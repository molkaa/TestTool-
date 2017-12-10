<?php

namespace TS\CandidatBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CandidatResponseType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('questionId')
            ->add('mark')
            ->add('response')
            ->add('note')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TS\CandidatBundle\Entity\CandidatResponse'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ts_candidatbundle_candidatresponse';
    }
}
