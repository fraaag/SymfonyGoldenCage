<?php

namespace Esprit\DemoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Esprit\DemoBundle\Entity\Administrateur;
use Esprit\DemoBundle\Form\AdministrateurType;

/**
 * Administrateur controller.
 *
 */
class AdministrateurController extends Controller
{

    /**
     * Lists all Administrateur entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EspritDemoBundle:Administrateur')->findAll();

        return $this->render('EspritDemoBundle:Administrateur:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Administrateur entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Administrateur();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('administrateur_show', array('id' => $entity->getId())));
        }

        return $this->render('EspritDemoBundle:Administrateur:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Administrateur entity.
    *
    * @param Administrateur $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Administrateur $entity)
    {
        $form = $this->createForm(new AdministrateurType(), $entity, array(
            'action' => $this->generateUrl('administrateur_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Administrateur entity.
     *
     */
    public function newAction()
    {
        $entity = new Administrateur();
        $form   = $this->createCreateForm($entity);

        return $this->render('EspritDemoBundle:Administrateur:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Administrateur entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EspritDemoBundle:Administrateur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Administrateur entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EspritDemoBundle:Administrateur:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Administrateur entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EspritDemoBundle:Administrateur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Administrateur entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EspritDemoBundle:Administrateur:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Administrateur entity.
    *
    * @param Administrateur $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Administrateur $entity)
    {
        $form = $this->createForm(new AdministrateurType(), $entity, array(
            'action' => $this->generateUrl('administrateur_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Administrateur entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EspritDemoBundle:Administrateur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Administrateur entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('administrateur_edit', array('id' => $id)));
        }

        return $this->render('EspritDemoBundle:Administrateur:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Administrateur entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EspritDemoBundle:Administrateur')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Administrateur entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('administrateur'));
    }

    /**
     * Creates a form to delete a Administrateur entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('administrateur_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
