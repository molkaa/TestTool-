<?php

namespace TS\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TestsType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name','text')
            ->add('note','integer')
            ->add('eliminatoryNote','integer')
            ->add('time','integer')
            ->add('calculationMethod', 'choice', array(
                        'choices'   => array('compensation' => 'compensation method', 'binary' => 'Pass/Fail  method','aggressive' => 'Penalty method'),
                        'required'  => true,
                        'attr'=>array(
                        'class'=>'chosen-select',
                    )
                ))
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
        return 'ts_adminbundle_tests';
    }
}
