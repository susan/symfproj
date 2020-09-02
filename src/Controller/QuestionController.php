<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class QuestionController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */

    public function homepage()
    {
        return $this->render('question/homepage.html.twig');
        //return new Response("add message here");
    }
    /**
     * @Route("/questions/{slug}", name="app_question_show")
     */

    public function show($slug)
    {
        dump($this);
        return $this->render('question/show.html.twig', [
            'question' => ucwords(str_replace("-", " ", $slug)),
            'answers' => ["chicken", "turkey", "tuna", "beef"]
        ]);

        //return new Response(sprintf("hey, heres %s", ucwords(str_replace("-", " ", $slug))));
    }
}
