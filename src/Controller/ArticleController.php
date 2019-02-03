<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response("OMG! My first page already!");
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {
        $comments = [
            "Peter Piper picked a peck of pickled peppers.
            A peck of pickled peppers Peter Piper picked.
            If Peter Piper picked a peck of pickled peppers?
            Where's the peck of pickled peppers Peter Piper picked?",
            "Nine nimble noblemen nibbling nuts.",
            "Ingenious iguanas improvising an intricate impromptu on impossibly-impractical instruments."
        ];
        return $this->render('article/show.html.twig', [
            'title' => ucwords(str_replace('-', ' ', $slug)),
            'comments' => $comments, 
        ]);
    }
}