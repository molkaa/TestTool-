<?php

namespace TS\CandidatBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CandidatTestsType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('state')
            ->add('note')
            ->add('mark')
            ->add('date')
            ->add('tests')
            ->add('responses')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TS\CandidatBundle\Entity\CandidatTests'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ts_candidatbundle_candidattests';
    }
}
