<?php

namespace TS\CandidatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TSCandidatBundle:Default:index.html.twig', array('name' => $name));
    }
}
