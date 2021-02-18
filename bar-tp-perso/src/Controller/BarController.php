<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BarController extends AbstractController
{
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
    public function beers(): Response
    {
        return $this->render('beers/index.html.twig', [
            'title' => 'Beers',
        ]);
    }
}
