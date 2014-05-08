<?php

namespace Mail\MailBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function indexAction() {

 $request = $this->get('request');
        $subject="Réclmataion";
        $msg = $request->get('msg');
        $email = $request->get('adr');
        
        $message = \Swift_Message::newInstance()
                 ->setSubject($subject)
                ->setBody($msg)
                ->setFrom('goldencage.3a14@gmail.com')
                ->setTo($email)
              


        ;
        $this->get('mailer')->send($message);
       return $this->render('MailMailBundle:Default:index.html.twig',array());


}}
