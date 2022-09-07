<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('Homepage here');
    }

    /**
     * @Route("/page/{slug}")
     */
    public function show($slug)
    {
        return new Response(sprintf(
            'About page "%s"', $slug));
    }
}