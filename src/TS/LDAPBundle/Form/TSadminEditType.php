<?php

namespace TS\LDAPBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class TSadminEditType extends TSadminType {

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
        return 'ts_ldapbundle_tsadminedittype';
    }

}
