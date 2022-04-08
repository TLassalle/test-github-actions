<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloWorldController
{
    /**
     * @Route("/hello_world")
     */
    public function __invoke(): Response
    {
        return new Response('Hello world');
    }
}
