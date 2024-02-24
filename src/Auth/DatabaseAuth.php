<?php
namespace App\Auth;

use Framework\Auth;
use Framework\Auth\User;
use Framework\Database\NoRecordException;
use Framework\Session\SessionInterface;

class DatabaseAuth implements Auth
{

    /**
     * @var UserTable
     */
    private $userTable;
    /**
     * @var SessionInterface
     */
    private $session;

    /**
     * @var \App\Auth\User
     */
    private $user;

    public function __construct(UserTable $userTable, SessionInterface $session)
    {
        $this->userTable = $userTable;
        $this->session = $session;
    }

    public function login(string $username, string $password): ?User
    {
        if (empty($username) || empty($password)) {
            return null;
        }

        /** @var \App\Auth\User $user */
        $user = $this->userTable->findBy('username', $username);
        if ($user) {
            $this->session->set('auth.user', $user->id);
            return $user;
        }

        return null;
    }

    public function logout(): void
    {
        $this->session->delete('auth.user');
    }
    public function getRegisteredUser($user)
    {
       
        
        try {
            $user = $this->userTable->findBy('username', $username);
            return $user;
        } catch (NoRecordException $exception) {
            return null;
        }
        
        return null;
    }
    /**
     * @return User|null
     */
    public function getUser(): ?User
    {
        if ($this->user) {
            return $this->user;
        }
        $userId = $this->session->get('auth.user');
        if ($userId) {
            try {
                $this->user = $this->userTable->find($userId);
                return $this->user;
            } catch (NoRecordException $exception) {
                $this->session->delete('auth.user');
                return null;
            }
        }
        return null;
    }

    public function setUser(\App\Auth\User $user): void
    {
        $this->session->set('auth.user', $user->id);
        $this->user = $user;
    }
}
