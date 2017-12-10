<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace TS\AdminBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ob\HighchartsBundle\Highcharts\Highchart;
use Zend\Json\Expr;


class StatisticsController extends Controller{
    public function statAction() {
        $request = $this->getRequest();
        $session = $request->getSession();
        if ($session->get('logged_in') === true) {
 $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository("TSLDAPBundle:Candidate")
                ->getByStateCandidats('enable');
        $nbr = count($user);
        $user1 = $em->getRepository("TSLDAPBundle:Candidate")
                ->getByStateCandidats('disable');
        $nbr1 = count($user1);
        
        $series = array(
            array(
                'name' => 'Nombre des membres',
                'type' => 'column',
                'color' => '#4572A7',
                'yAxis' => 1,
                'data' => array($nbr, $nbr1),
            ),
            
        );

        $yData = array(
            array(
                'labels' => array(
                    'formatter' => new Expr('function () { return this.value + " degrees C" }'),
                    'style' => array('color' => '#AA4643')
                ),
                'title' => array(
                    'text' => 'Temperature',
                    'style' => array('color' => '#AA4643')
                ),
                'opposite' => true,
            ),
            array(
                'labels' => array(
                    'formatter' => new Expr('function () { return this.value + " Membres" }'),
                    'style' => array('color' => '#4572A7')
                ),
                'gridLineWidth' => 0,
                'title' => array(
                    'text' => 'Nombre des membres',
                    'style' => array('color' => '#4572A7')
                ),
            ),
        );
        $categories = array('Enable', 'Disable');

        $ob = new Highchart();

        $ob->chart->renderTo('container'); // The #id of the div where to render the chart

        $ob->chart->type('column');

        $ob->title->text('Statistique des membres');

        $ob->xAxis->categories($categories);

        $ob->yAxis($yData);

        $ob->legend->enabled(false);

        $formatter = new Expr('function () {

 var unit = {

 "Nombre des membres": "membres",

 

 }[this.series.name];

 return this.x + ": <b>" + this.y + "</b> " + unit;

 }');

        $ob->tooltip->formatter($formatter);

        $ob->series($series);
return $this->render('TSAdminBundle:Admin:LineCharts.html.twig', array('chart'=>$ob)); 
        }else {
            return $this->redirect($this->generateUrl('adminLogin'));
        }
    }
    
    public function chartPieAction(){
        $request = $this->getRequest();
        $session = $request->getSession();
        if ($session->get('logged_in') === true) {
        $em = $this->getDoctrine()->getManager();
        $one = $em->getRepository("TSAdminBundle:QuestionLibrary")
                ->getByTypeQuestions('one');
        $nbr = count($one);
        
        $free = $em->getRepository("TSAdminBundle:QuestionLibrary")
                ->getByTypeQuestions('free');
        $nbr1 = count($free);
        
        $many = $em->getRepository("TSAdminBundle:QuestionLibrary")
                ->getByTypeQuestions('many');
        $nbr2 = count($many);
        
        $numeric = $em->getRepository("TSAdminBundle:QuestionLibrary")
                ->getByTypeQuestions('numeric');
        $nbr3 = count($numeric);
        
        $menu = $em->getRepository("TSAdminBundle:QuestionLibrary")
                ->getByTypeQuestions('menu');
        $nbr4 = count($menu);
        
$ob = new Highchart();
$ob->chart->renderTo('container');
$ob->chart->type('pie');
$ob->title->text('Questions type');
$ob->plotOptions->series(
    array(
        'dataLabels' => array(
            'enabled' => true,
            'format' => '{point.name}: {point.y:.1f}%'
        )
    )
);

$ob->tooltip->headerFormat('<span style="font-size:11px">{series.name}</span><br>');
$ob->tooltip->pointFormat('<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>');

$data = array(
    array(
        'name' => 'Multiple Choice',
        'y' => $nbr,
        'drilldown' => 'Multiple Choice',
        'visible' => true
    ),
    array(
        'name' => 'Essay',
        'y' => $nbr1,
        'drilldown' => 'Essay',
        'visible' => true
    ),
    array('CheckBox', $nbr2),
    array('Numeric', $nbr3),
    array('Menu', $nbr4)
);
$ob->series(
    array(
        array(
            'name' => 'Questions share',
            'colorByPoint' => true,
            'data' => $data /******************************/
        )
    )
);

$drilldown = array(
    array(
        'name' => 'Essay',
        'id' => 'Essay',
        'data' => array(
            array("v8.0", 26.61),
            array("v9.0", 16.96),
            array("v6.0", 6.4),
            array("v7.0", 3.55),
            array("v8.0", 0.09)
        )
    ),
    array(
        'name' => 'Multiple Choice',
        'id' => 'Multiple Choice',
        'data' => array(
            array("v19.0", 7.73),
            array("v17.0", 1.13),
            array("v16.0", 0.45),
            array("v18.0", 0.26)
        )
    ),
);
$ob->drilldown->series($drilldown);
return $this->render('TSAdminBundle:Admin:Pie.html.twig', array(
'chart' => $ob
));
    }else {
            return $this->redirect($this->generateUrl('adminLogin'));
        }
}}

