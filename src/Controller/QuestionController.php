<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class QuestionController extends AbstractController
{
    /**
     * @Route("/")
     */

    public function homepage()
    {
        return new Response("add message here");
    }
    /**
     * @Route("/questions/{slug}")
     */

    public function show($slug)
    {

        return $this->render('question/show.html.twig', [
            'question' => ucwords(str_replace("-", " ", $slug)),
            'answers' => ["chicken", "turkey", "tuna", "beef"]
        ]);

        //return new Response(sprintf("hey, heres %s", ucwords(str_replace("-", " ", $slug))));
    }
}
