<?php

namespace ShowStop\TelevisionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('ShowStopTelevisionBundle:Default:index.html.twig', array('name' => $name));
    }
}
