<?php

// src/Controller/DefaultController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index()
    {
        return $this->render('index.html.twig', []);
    }
}