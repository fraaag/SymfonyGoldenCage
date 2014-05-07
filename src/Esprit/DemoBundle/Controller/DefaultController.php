<?php

namespace Esprit\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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
        //nom bundle:folder li ta7t l views:vue
        return $this->render('EspritDemoBundle:Admin:gest_prest.html.twig', array());
    }
    public function liste_prestAction()
    {
        //nom bundle:folder li ta7t l views:vue
        return $this->render('EspritDemoBundle:Client:ListePrestataire.html.twig', array());
    }
}
