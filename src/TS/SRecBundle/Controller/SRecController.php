<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace TS\SRecBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SRecController extends Controller {
    
    public $exp = array('00', '01', '02', '03', '04', '05', '06', '07', '08', '09', '10');
    public $establishment = array('INSAT', 'ESPRIT', 'ENSI', 'ISET\'COM', 'SUP\'COM', 'ISET', 'ISG', 'IHEC', 'FST', 'ENIT', 'Ruby', 'ENIG', 'ENIS', 'ISI', 'Other');
    public $diploma = array('Technician', 'License', 'BA', 'MA', 'Engineering', 'MBA', 'PhD');
    public $technologies = array('Java', 'JAVA/JEE', 'C', 'C++', 'ASP', 'C#', 'VB', 'PHP', 'PHP5', 'MATLAB', 'Ruby', 'HTML', 'Python', 'CSS', 'JavaScript', 'Jquery', 'Other');

    public function offersAction() {

        return $this->render('TSSRecBundle:SRec:offers.html.twig');
    }

    public function cvsAction($pages, Request $request) {
        $request = $this->get('request');

        if ($request->getMethod() == 'POST') {

            $mail = $request->get('email');
            $fName = $request->get('fName');
            $lName = $request->get('lName');
            $experience = $request->get('experience');
            $establishment = $request->get('establishment');
            $diploma = $request->get('diploma');
            $candidature = $request->get('candidature');
            $technologies = $request->get('technologies');
            
             $session = $request->getSession();
             
            $session->set('mail', $mail);
            $session->set('fName', $fName);
            $session->set('lName', $lName);
            $session->set('experience', $experience);
            $session->set('establishment', $establishment);
            $session->set('candidature', $candidature);
            $session->set('diploma', $diploma);
            $session->set('technologies', $technologies);

            $liste_candidats = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('TSCandidatBundle:Candidate')
                    ->getSpecificCandidates(3, 1, $experience, $mail, $fName, $lName, $establishment, $candidature, $diploma, $technologies);

            return $this->render('TSSRecBundle:SRec:cv.html.twig'
                            , array('listeCandidat' => $liste_candidats,
                        'page' => 1,
                        'exp' => $this->exp,
                        'establishment' => $this->establishment,
                        'diploma' => $this->diploma,
                        'technologies' => $this->technologies,
                        'nombrePage' => ceil(count($liste_candidats) / 3)));
        }
        $liste_candidats = $this->getDoctrine()
                ->getManager()
                ->getRepository('TSCandidatBundle:Candidate')
                ->getCandidates(3, $pages);

        return $this->render('TSSRecBundle:SRec:cvs.html.twig'
                        , array('listeCandidat' => $liste_candidats,
                    'pages' => $pages,
                    'exp' => $this->exp,
                    'establishment' => $this->establishment,
                    'diploma' => $this->diploma,
                    'technologies' => $this->technologies,
                    'nombrePages' => ceil(count($liste_candidats) / 3)));
    }

    public function cvAction($page) {

        $request = $this->get('request');
        
        $session = $request->getSession();

        if ($request->getMethod() == 'POST') {
            $mail = $request->get('email');
            $fName = $request->get('fName');
            $lName = $request->get('lName');
            $experience = $request->get('experience');
            $establishment = $request->get('establishment');
            $candidature = $request->get('candidature');
            $diploma = $request->get('diploma');
            $technologies = $request->get('technologies');

            
           $session->set('mail', $mail);
            $session->set('fName', $fName);
            $session->set('lName', $lName);
            $session->set('experience', $experience);
            $session->set('establishment', $establishment);
            $session->set('candidature', $candidature);
            $session->set('diploma', $diploma);
            $session->set('technologies', $technologies);

            $liste_candidats = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('TSCandidatBundle:Candidate')
                    ->getSpecificCandidates(3, 1, $experience, $mail, $fName, $lName, $establishment, $candidature, $diploma, $technologies);

            return $this->render('TSSRecBundle:SRec:cv.html.twig'
                            , array('listeCandidat' => $liste_candidats,
                        'page' => 1,
                        'exp' => $this->exp,
                        'establishment' => $this->establishment,
                        'diploma' => $this->diploma,
                        'technologies' => $this->technologies,
                        'nombrePage' => ceil(count($liste_candidats) / 3)));
        }


        $mail = $session->get('mail');
        $fName = $session->get('fName');
        $lName = $session->get('lName');
        $experience = $session->get('experience');
        $establishment = $session->get('establishment');
        $candidature = $session->get('candidature');
        $diploma = $session->get('diploma');
        $technologies = $session->get('technologies');

        $liste_candidats = $this->getDoctrine()
                ->getManager()
                ->getRepository('TSCandidatBundle:Candidate')
                ->getSpecificCandidates(3, $page, $experience, $mail, $fName, $lName, $establishment, $candidature, $diploma, $technologies);

        return $this->render('TSSRecBundle:SRec:cv.html.twig'
                        , array('listeCandidat' => $liste_candidats,
                    'page' => $page,
                    'exp' => $this->exp,
                    'establishment' => $this->establishment,
                    'diploma' => $this->diploma,
                    'technologies' => $this->technologies,
                    'nombrePage' => ceil(count($liste_candidats) / 3)));
    }

    public function editAction() {

        return $this->render('TSSRecBundle:SRec:edit.html.twig');
    }

    public function testsAction() {

        return $this->render('TSSRecBundle:SRec:tests.html.twig');
    }

}
