<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SimplonController extends AbstractController
{
    /**
     * @Route("/simplon", name="simplon")
     */
    public function index(): Response
    {
        return $this->render('simplon/index.html.twig');
    }

    }
