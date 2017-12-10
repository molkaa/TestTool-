<?php

namespace TS\LDAPBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CandidateType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
           ->add('username','text')
           ->add('state', 'choice', array(
                 'choices'  => array('enable' => 'enable', 'disable' => 'disable'),
                 'required' => true,
                 
));
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TS\LDAPBundle\Entity\Candidate'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ts_ldapbundle_candidatetype';
    }
}
