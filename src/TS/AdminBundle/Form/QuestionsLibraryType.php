<?php

namespace TS\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class QuestionsLibraryType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        
        $builder
                ->add('introduction', 'textarea')
                ->add('text', 'textarea', array(
                    'required' => true,
                    'max_length'=>50,
                ))
                ->add('responses', 'collection', array('type' => new ResponseLibraryType(),
                    'allow_add' => true,
                    'allow_delete' => true,
                    'required' => FALSE,
                ))
                ->add('questionPicture', new QuestionPictureType(), array(
                    'required' => FALSE,
                ))
                ->add('note', 'number')
                ->add('questionLevel', 'choice', array(
                        'choices'   => array('easy' => 'Easy', 'Medium' => 'medium','hard' => 'Hard'),
                        'required'  => true,
                ))
                
                        
                        
                        
                        
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'TS\AdminBundle\Entity\QuestionLibrary'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'ts_adminbundle_questionslibrarytype';
    }

}
