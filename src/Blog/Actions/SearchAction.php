<?php

namespace App\Blog\Actions;


use Framework\Database\Hydrator;
use Framework\Renderer\RenderInterface;
use Framework\Response\RedirectResponse;
use Framework\Router;
use Framework\Session\FlashService;
use Framework\Validator;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Container\ContainerInterface;
use Framework\Actions\RouterAwareAction;
use App\Blog\Table\DomaineTable;

class SearchAction
{
    private $container;
    /**
     * @var RendererInterface
     */
    private $renderer;
    /**
     * @var UserTable
     */
    private $router;
	
	private $table;
    /**
     * @var FlashService
     */
    private $flashService;

    use RouterAwareAction;

    public function __construct(
	    Router $router,
        RenderInterface $renderer,
        ContainerInterface $container,
		DomaineTable $table
        
    ) {
        $this->container = $container->get('plates');
        $this->renderer = $renderer;
        $this->router = $router;
        $this->table = $table;
    }
	
	

    public function __invoke(ServerRequestInterface $request)
    {
        echo($_POST["domaine"])."</br>";
        echo($_POST["niveau"])."</br>";
		echo($_POST["region"]);
		
		
		//$tagus = explode(" ", $_POST['domaine']);
		$pdo = $this->table->pdo;
		
		$sql = "SELECT Fortitre,Forindexationdomainewebonisep, ENSdepartement, Forurletidonisep,FORniveaudesortie,FORtype,Lieudenseignement,ENScodepostal,Ensurletidonisep
		FROM formalycee_three WHERE (FORtype = :type AND ENSdepartement LIKE :region AND MATCH (Forindexationdomainewebonisep) AGAINST (:searchstr IN BOOLEAN MODE)) 
		OR (FORtype = :type AND ENSregion LIKE :region AND MATCH (Forindexationdomainewebonisep) AGAINST (:searchstr IN BOOLEAN MODE)) 
		OR (FORtype = :type AND MATCH (Forindexationdomainewebonisep) AGAINST (:searchstr IN BOOLEAN MODE)) ORDER BY ENScodepostal ASC";


    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':searchstr', $_POST["domaine"]);
	$stmt->bindValue(':type', $_POST["niveau"]);
	$stmt->bindValue(':region', $_POST["region"]);
    $stmt->execute();
	$res = $stmt->fetchAll();
	
	
        return $this->container->render('search', [ 'posts' => $res , 'router' => $this->router]);
    }
}
