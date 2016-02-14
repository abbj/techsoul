<?php

namespace utilisateurs\utilisateursBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('utilisateursBundle:Default:index.html.twig', array('name' => $name));
    }
}
