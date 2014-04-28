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
}
