<?php

namespace TS\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OffersType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('title', 'text', array(
                    'label' => 'Job title',
                ))
                ->add('team', 'text')
                ->add('reference', 'text')
                ->add('state', 'choice', array(
                    'choices' => array('ON' => 'ON', 'OFF' => 'OFF'),
                    'required' => true,
                ))
                ->add('longDescription', 'textarea')
                ->add('shortDescription', 'textarea')
                ->add('tests', 'entity', array(
                    'class' => 'TSAdminBundle:Tests',
                    'property' => 'name',
                    'empty_value' => 'choose a test',
                    'multiple'=>true,
                    'label' => 'Test(s)',))
            ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'TS\AdminBundle\Entity\Offers'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'ts_adminbundle_offerstype';
    }

}
