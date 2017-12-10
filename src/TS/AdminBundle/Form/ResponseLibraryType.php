<?php

namespace TS\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ResponseLibraryType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('response', 'text', array(
                    'required' => true,
                ))
                ->add('value', 'text', array(
                    'required' => FALSE,
                    'attr' => array(
                        'placeholder' => 'enter a value just in Numeric input case',
                    )
                ))
                ->add('note','number', array(
                    'required' => true,
                   
                ))
                ->add('CorrectAnswer', 'choice', array(
                         'choices'   => array('no' => 'No', 'yes' => 'Yes'),
                         'required' => true,
                          'multiple'  => false,
                        
                        ))
                
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'TS\AdminBundle\Entity\ResponseLibrary'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'ts_adminbundle_responseLibrarytype';
    }

}
