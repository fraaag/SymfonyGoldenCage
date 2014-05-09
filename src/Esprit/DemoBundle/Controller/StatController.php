<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Esprit\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ob\HighchartsBundle\Highcharts\Highchart;
 
class StatController extends Controller
{
    public function chartAction()
    {
        // Chart
        $ob = new Highchart();
        $ob->chart->renderTo('linechart');
        $ob->title->text('Nombre de produit par préstataire');
        $ob->plotOptions->pie(array(
            'allowPointSelect'  => true,
            'cursor'    => 'pointer',
            'dataLabels'    => array('enabled' => false),
            'showInLegend'  => true
        ));
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('EspritDemoBundle:Prestataire')->findAll();
        $data=array();
        foreach($entities as $e){
          $data.add($e.integer);
        }
        
        $ob->series(array(array('type' => 'pie','name' => 'Browser share', 'data' => $data)));

        return $this->render('EspritDemoBundle:Default:Statistique.html.twig', array(
            'chart' => $ob
        ));
    }
}
