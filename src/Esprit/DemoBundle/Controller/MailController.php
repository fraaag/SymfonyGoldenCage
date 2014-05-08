<?php

namespace Esprit\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MailController extends Controller{

    public function indexAction()
    {
        $message = \Swift_Message::newInstance()
            ->setSubject('Hello Email')
            ->setFrom('goldencage.3a14@gmail.com')
            ->setTo('amine.hadj.fredj@gmail.com')
            ->setBody("hello")
        ;
        $this->get('mailer')->send($message);

        return $this->render('EspritDemoBundle:Admin:gest_prest.html.twig', array());
    }
}