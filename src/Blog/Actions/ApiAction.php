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
use Framework\Helpers\ApiHelper;

class ApiAction
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
		ApiHelper $helper
		
        
    ) {
        $this->container = $container->get('plates');
        $this->renderer = $renderer;
        $this->router = $router;
        $this->helper = $helper;
    }
	
	

    public function __invoke(ServerRequestInterface $request)
    {
        
		$radius = intval($request->getQueryParams()['radius']); 
		$romes = $request->getQueryParams()['romes']; 
		$diplome = $request->getQueryParams()['diploma'];
		
		if($diplome === "BAC"){
			$diploma = "4%20%28BAC...%29";
		}elseif($diplome === "CAP"){
			$diploma = "3%20%28CAP...%29";
		}elseif($diplome === "(BTS, DEUST)"){
			$diploma = "5%20%28BTS%2C%20DEUST...%29";
		}else{
			$diploma = "4%20%28BAC...";
		}
		$lat = floatval($request->getQueryParams()['lat']); 
		$long = floatval($request->getQueryParams()['long']); 
		$res = $this->helper->GetDataApiAlternance($romes, $long, $lat, $diploma, $radius);
		$posts = $res['results'];
		
		
	
	
        return $this->container->render('api', [ 'posts' => $posts , 'router' => $this->router]);
    }
}
