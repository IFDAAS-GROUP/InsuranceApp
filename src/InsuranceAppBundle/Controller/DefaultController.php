<?php

namespace InsuranceAppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('InsuranceAppBundle:Default:index.html.twig');
    }
}