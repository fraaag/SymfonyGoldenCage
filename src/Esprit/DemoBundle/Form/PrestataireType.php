<?php

namespace Esprit\DemoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PrestataireType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('adresse')
            ->add('adressmail')
            ->add('fax')
            ->add('gsm')
            ->add('login')
            ->add('motdepasse')
            ->add('nomsociete')
            ->add('photo')
            ->add('presentation')
            ->add('siteweb')
            ->add('tel')
            ->add('idrubrique')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Esprit\DemoBundle\Entity\Prestataire'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'esprit_demobundle_prestataire';
    }
}
