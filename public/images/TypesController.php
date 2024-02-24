<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\DispositifavbacRepository;
use App\Repository\FormationRepository;
use App\Repository\FormalyceeRepository;
use App\Repository\EtabsSecondaireRepository;
use App\Repository\Parcoursup21Repository;
use App\Repository\Parcoursup22Repository;
use App\Repository\EtabsSupRepository;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class TypesController extends AbstractController
{


    /**
     * @Route(
     * "/postbactypes",
     * name="postbactypes"
     * )
     */ 
     public function postbactypes(FormationRepository $repository, Request $request)
   { 
   
   $pbactypes = $repository->getPostBacTypes();
        //$thisPage = $pagennnnnnnnnnnnn;
        return $this->render('pbactypes/pbac.html.twig', compact('pbactypes'));
   
   
   
   } 

    /**
     * @Route(
     * "/avantbactypes",
     * name="avantbactypes"
     * )
     */ 
     public function avantbactypes(FormalyceeRepository $repository, Request $request)
   { 
   
        $avbactypes = $repository->getAvBacTypes();
        //$thisPage = $page;
        return $this->render('avtypes/index.html.twig', compact('avbactypes'));
   
   
   }
   /**
     * @Route(
     * "/alternanceapiget",
     * name="alternanceapiget"
     * )
     */ 
   public function alternanceapiget(FormalyceeRepository $repository, Request $request,$romecode, $miregion)
   { 
   $url = 'https://labonnealternance.apprentissage.beta.gouv.fr/api/V1/formationsParRegion?romes='.$romecode.'&region='.$miregion.'&caller=contact%40domaine%20nom_de_societe';			
	
   $ch = curl_init();		
		curl_setopt($ch, CURLOPT_URL, $url);		
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		
		$data = json_decode(curl_exec($ch), true);
		
		$counter = count($data["results"]);
		$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);		
		if($http_code != 200) 
			throw new \Exception('Error : Failed to get user information');
		
		//return $data;		
                return $this->render('avtypes/alter.html.twig',['data'=> $data, 'counter' => $counter ]);
   }
   /**
     * @Route(
     * "/alternance",
     * name="alternance"
     * )
     */ 
     public function alternance(FormalyceeRepository $repository, Request $request)
   { 
        if ($request->isMethod('POST')) {
          
          //var_dump($_POST);
          $response = $this->forward('App\Controller\TypesController::alternanceapiget', [
        'romecode'  => $_POST['romecode'],
        'miregion' => $_POST['miregion'],
    ]);

    // ... further modify the response or return it directly

    return $response;

          die();
        }else{
        var_dump($_GET);
        die();
         return $this->render('avtypes/alter.html.twig');
        }
        //$avbactypes = $repository->getAvBacTypes();
        //$thisPage = $page;
        //return $this->render('avtypes/index.html.twig', compact('avbactypes'));
   
   
   }
   
   /**
     * @Route(
     * "/metiers",
     * name="metiers"
     * )
     */ 
     public function metiers(FormalyceeRepository $repository, Request $request)
   { 
   
        $response = new Response($this->renderView('types/metiers.html.twig'),200
    );

    $response->headers->set('Access-Control-Allow-Origin', '*');

    return $response;
   
    
        // This should return the file located in /mySymfonyProject/web/public-resources/TextFile.txt
        // to being viewed in the Browser
        //return new BinaryFileResponse($publicResourcesFolderPath.$filename);
        
   
   } 
   
   
   /**
     * @Route(
     * "/portesouvertes/supapi",
     * name="portesouvertessupapi"
     * )
     */ 
     public function portesouvertessupapi(EtabsSupRepository $repository, Request $request): Response
   { 
   
        $jpo = $repository->getTags();
        
        $encoders = [new JsonEncoder()];

    // On instancie le "normaliseur" pour convertir la collection en tableau
    $normalizers = [new ObjectNormalizer()];

    // On instancie le convertisseur
    $serializer = new Serializer($normalizers, $encoders);
    
    // On convertit en json
    $jsonContent = $serializer->serialize($jpo, 'json', [
        'circular_reference_handler' => function ($object) {
            return $object->getId();
        }
    ]);
    //$response = new JsonResponse([ $jpo ]);
    //$tojson = addslashes(json_encode($jpo,JSON_FORCE_OBJECT|JSON_UNESCAPED_UNICODE));

    $response = new Response($jsonContent);
    //$response->setEncodingOptions( $response->getEncodingOptions() | JSON_PRETTY_PRINT ); 
    // On ajoute l'entête HTTP
    $response->setCharset('UTF-8');
    $response->headers->set('Content-Type', 'application/json; charset=utf-8');

    // On envoie la réponse
    return $response;      
   
   
   }
   
   
   
   
   
   
   /**
     * @Route(
     * "/portesouvertes/api",
     * name="portesouvertessecapi"
     * )
     */ 
     public function portesouvertessecapi(EtabsSecondaireRepository $repository, Request $request): Response
   { 
   
        $jpo = $repository->getTags();
        
        $encoders = [new JsonEncoder()];

    // On instancie le "normaliseur" pour convertir la collection en tableau
    $normalizers = [new ObjectNormalizer()];

    // On instancie le convertisseur
    $serializer = new Serializer($normalizers, $encoders);
    
    // On convertit en json
    $jsonContent = $serializer->serialize($jpo, 'json', [
        'circular_reference_handler' => function ($object) {
            return $object->getId();
        }
    ]);
    //$response = new JsonResponse([ $jpo ]);
    //$tojson = addslashes(json_encode($jpo,JSON_FORCE_OBJECT|JSON_UNESCAPED_UNICODE));

    $response = new Response($jsonContent);
    //$response->setEncodingOptions( $response->getEncodingOptions() | JSON_PRETTY_PRINT ); 
    // On ajoute l'entête HTTP
    $response->setCharset('UTF-8');
    $response->headers->set('Content-Type', 'application/json; charset=utf-8');

    // On envoie la réponse
    return $response;      
   
   
   }


   /**
     * @Route(
     * "/portesouvertes/sec",
     * name="portesouvertessecrender"
     * )
     */ 
     public function portesouvertessecrender(EtabsSecondaireRepository $repository, Request $request): Response
   { 
   
        
        return $this->render('avtypes/jposec.html.twig');
       

    // On envoie la réponse
       
   
   
   }


   /**
     * @Route(
     * "/portesouvertes/sup",
     * name="portesouvertessuprender"
     * )
     */ 
     public function portesouvertessuprender(EtabsSupRepository $repository, Request $request): Response
   { 
   
        
        return $this->render('pbactypes/jposup.html.twig');
       

    // On envoie la réponse
       
   
   
   }

	


    /**
     * @Route("/types", name="default")
     * @param FormationRepository $repository
     * @param integer $page
     * @return Response
     */
     
    public function index(FormationRepository $repository, Request $request): Response
    {
        
        //$properties = $repository->getAllPosts($page); // Returns 5 posts out of 20
        //$post_count = $repository->countTotalFormas(); 
        //$proos = $repository->getTags();
        
        if ($request->isMethod('POST')) {
             $types = $repository->getEveryThing($request->request->all()["miname"]); 
        //var_dump($request->request->all()["miname"]);
        //var_dump($properties);
             //die();
              return $this->render('types/index.html.twig', compact('properties' ));
              
              }else{
             
        $types = $repository->getTypes();
        //$thisPage = $page;
        return $this->render('types/index.html.twig', compact('types'));
        
        }
//return $this->render('default/index.html.twig', [
  //'properties' => $properties,
   //'controller_name' => 'DefaultController'
//]);
        }
        
    /**
     * @Route(
     * "/metiers",
     * name="metiersdivers"
     * )
     */      
        
     public function divers(FormationRepository $repository, Request $request): Response
    {
        
        //$properties = $repository->getAllPosts($page); // Returns 5 posts out of 20
        //$post_count = $repository->countTotalFormas(); 
        //$proos = $repository->getTags();
        //FacebookSession::setDefaultApplication( '677936206740235','e167c66548eb5868d30805edae225c12' );
        if ($request->isMethod('POST')) {
             //$properties = $repository->getEveryThing($request->request->all()["miname"]); 
        var_dump($request->request->all()["remarques"]);
        //var_dump($properties);
             die();
              return $this->render('default/indox.html.twig', compact('properties' ));
              
              }else{
             


        //$thisPage = $page;
        return $this->render('types/metiers.html.twig');
        
        }
//return $this->render('default/index.html.twig', [
  //'properties' => $properties,
   //'controller_name' => 'DefaultController'
//]);
}     
      /**
     * @Route("/formations/{typdisp}/selectdispo", name="dispositif_select_typdisp")
     * requirements={"typdisp"=".+"}
     */
     public function selectdispo(DispositifavbacRepository $repository, FormalyceeRepository $repo,  Request $request, $typdisp)
   {  
       
       $form = $this->createFormBuilder()->add('region', ChoiceType::class, array('choices' => array('Auvergne-Rhône-Alpes' => 'Auvergne-Rhône-Alpes', 
       'Bourgogne-Franche-Comté' => 'Bourgogne-Franche-Comté', 
       'Bretagne' => 'Bretagne',
       'Centre-Val de Loire' => 'Centre-Val de Loire',
       'Corse' => 'Corse',
       'Grand Est' => 'Grand Est',
       'Hauts-de-France'=> 'Hauts-de-France',
       'Ile-de-France' => 'Ile-de-France',
       'Grand Est' => 'Grand Est',
       'Ile-de-France' => 'Ile-de-France',
       'Normandie'=> 'Normandie',
       'Nouvelle-Aquitaine' => 'Nouvelle-Aquitaine',
       'Occitanie' => 'Occitanie',
       'Pays de la Loire' => 'Pays de la Loire',
       'Provence-Alpes-Côte d’Azur'=> 'Provence-Alpes-Côte d’Azur'
       ), 
    'attr' => ['class' => 'form-select'],
    ))->getForm();
    $typesdisparray = ["section d'enseignement général et professionnel adapté", "unité pédagogique pour élèves allophones arrivants en collège (ex Classe pour non francophones)",
    'classe pour enfants de familles itinérantes et de voyageurs', "Unité localisée pour l'inclusion scolaire en collège", "unité localisée pour l'inclusion scolaire en lycée ou LP",
    'section sportive de collège', 'section sportive de lycée', 'classe à horaires aménagés musique', "classe de quatrième de l'enseignement agricole", 'section bilangue de collège',  
    'classe à horaires aménagés danse', 'dispositif relais','unité pédagogique pour élèves allophones arrivants en lycée ou EREA', 'section sportive de lycée','section internationale de lycée',
    'section internationale de collège','section européenne de LP', 'section européenne de LGT', 'section bilingue de langue régionale de lycée', 'section bilangue de collège', 'section Esabac', 'section Bachibac', 'section Abibac', 'pôle espoir', 'pôle France', 'prépa apprentissage', 'classe de troisième prépa-métiers', "classe de troisième de l'enseignement agricole"   
    ]; 
    $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
             
             
            if (in_array($typdisp, $typesdisparray)) {
            
            $properties = $repository->getDisposAvBacByTypesDispRegion($typdisp, $form->getData()['region']);
            }else{ 
            $properties = $repo->getAvBacByTypesDispRegion($typdisp, $form->getData()['region']);
            }
            
            
            
            
            return $this->render(
        'types/selectreg.html.twig',
        ['properties' => $properties]
    );
            
        }
    
    
       //var_dump($repository->getDisposAvBacByTypesDisp($typdisp));
       //die();
    return $this->render(
        'types/selectreg.html.twig',
        ['form' => $form->createView()]
    );

   }
   
   /**
     * @Route(
     * "/parcoursupdata2022",
     * name="parcoursupdata2022"
     * )
     */ 
     public function parcoursupdata2022(Parcoursup21Repository $repository, Request $request, $page): Response
   { 
        if ($request->isMethod('POST')) {
          $types = $repository->getResultsByFormagrAca($request->request->all()["fili"], $request->request->all()["academie"], $page); 
        
          
          return $this->render(
        'types/psup.html.twig',
        ['types' => $types]
    );
    
    }else{
    
     if (null !==($request->query->get('fili')) && null !==($request->query->get('academie')))
    {
        
    $maxPosts = 10;
    $res1 = $repository->getResultsByFormagrAca($request->query->get('fili'), $request->query->get('academie'), $page); 
    $countot = intval($res1['count']); 
    $items = $res1['items'];
    $fili = $request->query->get('fili');    
    $academie = $request->query->get('academie');
    $pagination = array(
                'page' => $page,
                'route' => 'parcoursupdata2022',
                'fili'=> $fili,
                'academie' => $academie,
                'pages_count' => ceil($countot / $maxPosts),
                'route_params' => array()
        );
    
    
    return $this->render(
        'types/psuppaginate.html.twig',
        ['items' => $items, 'count' =>  $countot, 'pagination' => $pagination, 'fili' => $fili, 'academie' => $academie  ]
    );
    }
    else
    {
        echo '<p>il manque un renseignement</p>';
        die();
    }
    
    
    
    
    
    }
         
       
    }
    

    /**
     * @Route(
     * "/parcoursupdata2023",
     * name="parcoursupdata2023"
     * )
     */ 
     public function parcoursupdata2023(Parcoursup22Repository $repository, Request $request, $page): Response
   { 
        if ($request->isMethod('POST')) {
          $types = $repository->getResultsByFormagrAca($request->request->all()["fili"], $request->request->all()["academie"], $page); 
        
          
          return $this->render(
        'types/psup22.html.twig',
        ['types' => $types]
    );
    
    }else{
    
     if (null !==($request->query->get('fili')) && null !==($request->query->get('academie')))
    {
        
    $maxPosts = 10;
    $res1 = $repository->getResultsByFormagrAca($request->query->get('fili'), $request->query->get('academie'), $page); 
    $countot = intval($res1['count']); 
    $items = $res1['items'];
    $fili = $request->query->get('fili');    
    $academie = $request->query->get('academie');
    $pagination = array(
                'page' => $page,
                'route' => 'parcoursupdata2023',
                'fili'=> $fili,
                'academie' => $academie,
                'pages_count' => ceil($countot / $maxPosts),
                'route_params' => array()
        );
    
    
    return $this->render(
        'types/psup22paginate.html.twig',
        ['items' => $items, 'count' =>  $countot, 'pagination' => $pagination, 'fili' => $fili, 'academie' => $academie  ]
    );
    }
    else
    {
        echo '<p>il manque un renseignement</p>';
        die();
    }
    
    
    
    
    
    }
         
       
    }
    
    
    
    /**
     * @Route(
     * "/parcoursupdata2021apiget",
     * name="parcoursupdata2021apiget"
     * )
     */ 
     public function parcoursupdata2021apiget(FormalyceeRepository $repository, Request $request, $q, $academie, $fili)
   { 

$url = "https:/data.enseignementsup-recherche.gouv.fr/api/records/1.0/search/?dataset=fr-esr-parcoursup&q=&refine.fili=$fili&refine.acad_mies=$academie";	


   $ch = curl_init();		
		curl_setopt($ch, CURLOPT_URL, $url);		
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		
		$data = json_decode(curl_exec($ch), true);
  	var_dump($data);
die();	
		$counter = count($data["results"]);
		$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);		
		if($http_code != 200) 
			throw new \Exception('Error : Failed to get user information');
		
		//return $data;		
                return $this->render('avtypes/alter.html.twig',['data'=> $data, 'counter' => $counter ]);
   
   
   }
    
    
}
