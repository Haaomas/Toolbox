<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog/{_locale?fr} ", requirements={"_locale"="en|fr", name="blog")
     */
    public function index($_locale): Response
    {
        if ($_locale == "fr"){
            return $this->render('blog/indexfr.html.twig', [
                'controller_name' => 'BlogController',
                'local' => $_locale
            ]);    
        }
        else {
            return $this->render('blog/indexEN.html.twig', [
                'controller_name' => 'BlogController',
                'local' => $_locale
            ]);
        }
    }
}