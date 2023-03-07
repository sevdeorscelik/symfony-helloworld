<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloWorldController extends AbstractController
{
    /**
     * @Route("/hello/world", name="app_hello_world")
     */

    

    public function index(): Response
    {
        $hw = "Hello World";
        $day = date("1");

        return $this->render('hello_world/index.html.twig', [
            'hw' => $hw,
            'day' => $day
        ]);
    }
};


