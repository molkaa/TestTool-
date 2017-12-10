<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace TS\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller {

    public function homeAction() {
        
        if ($this->get('security.context')->isGranted('ROLE_CANDIDATE')) {
            return $this->redirect($this->generateUrl('ts_candidat_homepage'));
        }
        else if ($this->get('security.context')->isGranted('ROLE_EVALUATOR')) {
            return $this->redirect($this->generateUrl('ts_evaluator_cvs'));
        }
        else if ($this->get('security.context')->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('TSEvaluatorBundle:Evaluator:cvs.html.twig'));
        }      
    }
}
