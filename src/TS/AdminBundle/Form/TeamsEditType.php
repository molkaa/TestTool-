<?php

namespace TS\AdminBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;


class TeamsEditType extends EditTeamsType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
         parent::buildForm($builder, $options);
    
    }

 
    /**
     * @return string
     */
    public function getName() {
        return 'ts_adminbundle_teamedittype';
    }

}
