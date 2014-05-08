<?php

namespace VoyagealacartePi\AdminBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use CodeHard\BestDealBundle\Entity\Reclamation;
use CodeHard\BestDealBundle\Form\ReclamationType;

class ContactController extends Controller
{
    
    public function contactAction()
    {
               $Reclamation = new Reclamation();
       $form = $this->createCreateForm($Reclamation);
       $request = $this->getRequest();
       if ($request->isMethod('post')) {
           $form->bind($request);
           if($form->isValid())
           {
               
               $em = $this->getDoctrine()->getManager();
               $this->sendMailAction('thebestdeal2014@gmail.com', $Reclamation->getEmail(), $Reclamation->getSujet(), $Reclamation->getMessage());
               $em->persist($Reclamation);
               $em->flush();
               return $this->redirect($this->generateUrl('code_hard_best_deal_homepage'));
           }
       }
       
       return $this->render('CodeHardBestDealBundle:Contact:contact.html.twig',array('form'=>$form->createView()));
    }
    
    public function sendMailAction($to="thebestdeal2014@gmail.com",$from="medamine.jedidi@esprit.tn",$subject="hh",$body="jj")
    {
      // Récupération du service
    $mailer = $this->get('mailer');

    // Création de l'e-mail : le service mailer utilise SwiftMailer, donc nous créons une instance de Swift_Message
    $message = \Swift_Message::newInstance()
      
      
      ->setSubject($subject)
      ->setFrom($from)
      ->setTo($to)
      ->setBody($body);

    // Retour au service mailer, nous utilisons sa méthode « send() » pour envoyer notre $message
    $mailer->send($message);

    // N'oublions pas de retourner une réponse, par exemple une page qui afficherait « L'e-mail a bien été envoyé »
    return $this->redirect($this->generateUrl('code_hard_best_deal_contactpage'));
    }
    
     /**
    * Creates a form to create a Reclamation entity.
    *
    * @param Reclamation $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Reclamation $entity)
    {
        $form = $this->createForm(new ReclamationType(), $entity, array(
            'action' => $this->generateUrl('code_hard_best_deal_sendpage'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    
    }
    
   
