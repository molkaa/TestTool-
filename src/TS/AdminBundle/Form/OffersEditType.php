<?php

namespace TS\AdminBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;


class OffersEditType extends OffersType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
         parent::buildForm($builder, $options);

    // On supprime celui qu'on ne veut pas dans le formulaire de modification
    $builder->remove('reference');
    }

 
    /**
     * @return string
     */
    public function getName() {
        return 'ts_adminbundle_offersedittype';
    }

}
