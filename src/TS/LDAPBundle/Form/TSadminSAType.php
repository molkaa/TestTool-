<?php

namespace TS\LDAPBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TSadminSAType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username','text')
            ->add('role', 'choice', array(
                 'choices'  => array('RH' => 'RH', 'admin' => 'Super Admin'),
                 'required' => true,
                 
));
        
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TS\LDAPBundle\Entity\TSadmin'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ts_ldapbundle_tsadminsatype';
    }
}
