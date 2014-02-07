<?php

namespace Reflexe\Bundle\MediaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ReflexeMediaBundle:Default:index.html.twig', array('name' => $name));
    }
}
