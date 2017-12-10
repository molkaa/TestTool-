<?php

namespace TS\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class InvitationType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
//        $status = array('test' => 'test', 'Interview1' => 'Interview1', 'Interview2' => 'Interview2', 'Interview3' => 'Interview3',
//            'Other' => 'Other');
        $builder
//                ->add('date', 'text')
//                ->add('hour', 'text')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'TS\AdminBundle\Entity\Invitation'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'ts_adminbundle_invitation';
    }

}
