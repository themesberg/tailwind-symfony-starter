<?php
// ./src/Controller/DefaultController.php

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

    public function accordion()
    {
        return $this->render('accordion.html.twig', []);
    }

    public function modal()
    {
        return $this->render('modal.html.twig', []);
    }

    public function collapse()
    {
        return $this->render('collapse.html.twig', []);
    }

    public function speedDial()
    {
        return $this->render('speed-dial.html.twig', []);
    }

    public function drawer()
    {
        return $this->render('drawer.html.twig', []);   
    }

    public function dropdown()
    {
        return $this->render('dropdown.html.twig', []);
    }

    public function popover()
    {
        return $this->render('popover.html.twig', []);
    }

    public function tabs()
    {
        return $this->render('tabs.html.twig', []);
    }

    public function tooltip()
    {
        return $this->render('tooltip.html.twig', []);
    }

    public function inputCounter()
    {
        return $this->render('input-counter.html.twig', []);
    }

    public function datepicker()
    {
        return $this->render('datepicker.html.twig', []);
    }
}
