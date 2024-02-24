<?php

namespace App\Blog\Table;

use App\Blog\Entity\Domsearch;
use Framework\Database\PaginatedQuery;
use Pagerfanta\Pagerfanta;

class DomaineTable
{

    /**
     * @var \PDO
     */
    public $pdo;

    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    public function getPDO()
    {
        
        $pdo = new \PDO('mysql:host=localhost;dbname=07795_onisup', 'root', 'froggy25', [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        return $pdo;
    } 

     /**
     * Met à jour un enregistrement au niveau de la base de données
     *
     * @param int $id
     * @param array $params
     * @return bool
     */
    public function update(int $id, array $params): bool
    {
        $fieldQuery = $this->buildFieldQuery($params);
        $params["id"] = $id;
        $statement = $this->pdo->prepare("UPDATE posts SET $fieldQuery WHERE id = :id");
        return $statement->execute($params);
    }
    /**
     * Pagine les article
     *
     * @param int $perPage
     * @return Pagerfanta
     */
    public function findPaginatedGrouped(int $perPage, int $currentPage): Pagerfanta
    {
        $query = new PaginatedQuery(
            $this->pdo,
            'SELECT * FROM domsearch GROUP BY Domen',
            'SELECT COUNT(id) FROM domsearch',
            Domsearch::class
        );
        return (new Pagerfanta($query))
            ->setMaxPerPage($perPage)
            ->setCurrentPage($currentPage);
    }
	
	public function findPaginatedSearch(int $perPage, int $currentPage): Pagerfanta
    {
        $query = new PaginatedQuery(
            $this->pdo,
            'SELECT * FROM domsearch GROUP BY Domen',
            'SELECT COUNT(id) FROM domsearch',
            Domsearch::class
        );
        return (new Pagerfanta($query))
            ->setMaxPerPage($perPage)
            ->setCurrentPage($currentPage);
    }

    /**
     * Récupère un article à partir de son ID
     * @param int $id
     * @return \stdClass
     */
    public function find(int $id): Post
    {
        $query = $this->pdo
            ->prepare('SELECT * FROM domsearch WHERE id = ?');
        $query->execute([$id]);
        $query->setFetchMode(\PDO::FETCH_CLASS, Domsearch::class);
        return $query->fetch() ?: null;
    }

    /**
     * Crée un nouvel enregistrement
     *
     * @param array $params
     * @return bool
     */
    public function insert(array $params): bool
    {
        $fields = array_keys($params);
        $values = array_map(function ($field) {
            return ':' . $field;
        }, $fields);
        $statement = $this->pdo->prepare(
            "INSERT INTO posts (" .
            join(',', $fields) .
            ") VALUES (" .
            join(',', $values) .
            ")"
        );
        return $statement->execute($params);
    }
 
    public function count(): int
    {
        $count = $this->pdo->query("SELECT COUNT(*) FROM posts")->fetchColumn();
        return $count;
    }

    /**
     * Supprime un enregistrment
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        $statement = $this->pdo->prepare('DELETE FROM posts WHERE id = ?');
        return $statement->execute([$id]);
    }

    private function buildFieldQuery(array $params)
    {
        return join(', ', array_map(function ($field) {
            return "$field = :$field";
        }, array_keys($params)));
    }
}
