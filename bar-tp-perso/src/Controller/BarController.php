<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use App\Entity\Beer;
use App\Entity\Category;

use App\Repository\BeerRepository;

class BarController extends AbstractController
{
    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    private function beers_api(): Array
    {
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
     * @Route("/bar", name="bar")
     */
    public function home(): Response
    {
        return $this->render('bar/index.html.twig', [
            'title' => 'The Bar',
        ]);
    }

    /**
     * @Route("/mentions", name="mentions")
     */
    public function mentions(): Response
    {
        return $this->render('mentions/index.html.twig', [
            'title' => 'Mentions',
        ]);
    }

    /**
     * @Route("/beers", name="beers")
     */
    public function beers(BeerRepository $beerRepo ): Response
    {
        $beers = $beerRepo->findAll();

        return $this->render('beers/index.html.twig', [
            'title' => 'Beers',
            'beers' => $beers,
        ]);
    }

    /** 
     * @Route("/newbeer", name="create_beer")
     */
    public function createBeer()
    {
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
    public function createCategory()
    {
        $entityManager = $this->getDoctrine()->getManager();

        $beerCategory = 'Blondes';

        $category = new Category();
        $category->setName($beerCategory);

        $entityManager->persist($category);

        $entityManager->flush();

        return new Response('Saved categories: ' . $beerCategory);
    }
}
