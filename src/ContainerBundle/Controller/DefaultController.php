<?php

namespace ContainerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ContainerBundle:Default:index.html.twig');
    }
}
