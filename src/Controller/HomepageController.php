<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
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
        $answers = [
            '1',
            '2',
            '3',
        ];

        return $this->render('pages/page.html.twig', [
            'page' => ucwords(str_replace('-', ' ', $slug)),
            'answers' => $answers
        ]);

        #return new Response(sprintf(
        #    'About page "%s"', $slug));
    }
}