<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Contracts\HttpClient\HttpClientInterface;

use App\Entity\Beer;
use App\Entity\Category;

class BarController extends AbstractController
{

    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * @Route("/bar", name="bar")
     */
    public function index(): Response
    {
        return $this->render('bar/index.html.twig', [
            'controller_name' => 'BarController',
        ]);
    }

    /**
     * @Route("/mentions", name="mentions")
     */
    public function mentions(): Response {
        return $this->render('mentions/index.html.twig', [
            'title' => 'Mentions Légales',
        ]);
    }

    /**
     * @Route("/beers", name="beers")
     */
    public function beers(): Response {

        // Version en recuperant les data que faker a cree dans la bdd
        $repository = $this->getDoctrine()->getRepository(Beer::class);
        $beers = $repository->findAll();

        return $this->render('beers/index.html.twig', [
            'title' => 'Beers',
            'beers' => $beers,
        ]);

        // Version de la page avec l'API
        /* return $this->render('beers/index.html.twig', [
            'title' => 'Beers',
            'beers' => $this->beers_api(),
        ]);
        */
    }

    //ceci bloque une possible réponse au client
    private function beers_api() {
        $response = $this->client->request(
            'GET',
            'https://raw.githubusercontent.com/Antoine07/hetic_symfony/main/Introduction/Data/beers.json'
        );
    
        $statusCode = $response->getStatusCode();
        // $statusCode = 200
        $contentType = $response->getHeaders()['content-type'][0];
        // $contentType = 'application/json'
        $content = $response->getContent();
        // $content = '{"id":521583, "name":"symfony-docs", ...}'
        $content = $response->toArray();
        // $content = ['id' => 521583, 'name' => 'symfony-docs', ...]
    
        return $content ;
    }

    /**
     * @Route("/newbeer", name="create_beer")
    */
    public function createBeer(){
        $entityManager = $this->getDoctrine()->getManager();

        $beer = new Beer();
        $beer->setname('Super Beer');
        $beer->setPublishedAt(new \DateTime());
        $beer->setDescription('Ergonomic and stylish!');

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($beer);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new beer with id '.$beer->getId());
    }


    /**
     * @Route("/newcategory", name="create_category")
    */
    public function createCategory(){
        $entityManager = $this->getDoctrine()->getManager();

        $category = new Category();
        $category->setname('Houblon');
        $category->setDescription('Super Houblon');

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($category);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new category with id '.$category->getId());
    }

    /**
     * @Route("/createrelation", name="create_relation")
    */
    public function createRelation(){
        $beers = $this->getDoctrine()->getRepository(Beer::class);
        $entityManager = $this->getDoctrine()->getManager();

        $category = new Category();
        $category->setname('Blonde');
        $category->setDescription('Super Blonde');

        foreach ($beers->findAll() as $beer) {
            // relates this beer to the category
            $category->addBeersCategory($beer);
        }

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($category);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response(
            'beers'
        );
    }

    /**
     * @Route("/relationcat", name="relationcat")
     */
    public function addRelationcat()
    {
        $categories = $this->getDoctrine()->getRepository(Category::class);
        $entityManager = $this->getDoctrine()->getManager();

        // new category Blonde
        $beer = new Beer();
        $beer->setName('Ardeche');
        $beer->setDescription('Blonde');

        foreach ($categories->findAll() as $category) {
            // relates this beer to the category
            $beer->addCategory($category);
        }

        $entityManager->persist($beer);
        $entityManager->flush();

        return new Response(
            'beers'
        );
    }
}
