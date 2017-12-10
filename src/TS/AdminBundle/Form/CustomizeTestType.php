<?php

namespace TS\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CustomizeTestType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numberQuestions','integer')
            ->add('percentageEasy','integer')
            ->add('percentageMedium','integer')
            ->add('PercentageHard','integer')
            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TS\AdminBundle\Entity\Tests'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ts_adminbundle_cusomize_tests';
    }
}
