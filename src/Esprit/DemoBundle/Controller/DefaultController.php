<?php

namespace Esprit\DemoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Esprit\DemoBundle\Entity\Prestataire;
use Esprit\DemoBundle\Form\PrestataireType;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EspritDemoBundle:Default:index.html.twig', array('name' => $name));
    }
    public function homeAction()
    {
        //nom bundle:folder li ta7t l views:vue
        return $this->render('EspritDemoBundle:Default:home.html.twig', array());
    }
     public function homeprestataireAction()
    {
        //nom bundle:folder li ta7t l views:vue
        return $this->render('EspritDemoBundle:Default:espaceprestataire.html.twig');
    }
    public function gest_prestAction()
    {
         $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EspritDemoBundle:Prestataire')->findAll();

        return $this->render('EspritDemoBundle:Admin:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    public function liste_prestAction()
    {
        //nom bundle:folder li ta7t l views:vue
        return $this->render('EspritDemoBundle:Client:ListePrestataire.html.twig', array());
    }
}
