<?php

namespace TS\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FeedBackType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $choices = array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5');
        $evaluation = array('Weak' => 'Weak Match', 'Potential' => 'Potential Match', 'Strong' => 'Strong Match');
        $note = array('Next' => 'Next', 'OFF' => 'OFF');
        $competencies = array('Not Applicable' => 'Not Applicable','Does Not Demonstrate' => 'Does Not Demonstrate', 'Demonstrates' => 'Demonstrates', 'Strength' => 'Strength');


        $builder
                ->add('presentability', 'choice', array('choices' => $choices,
                    'attr' => array('class' => 'chosen-select'),
                ))
                ->add('attitude', 'choice', array('choices' => $choices,
                    'label' => 'stress resistance',
                    'attr' => array('class' => 'chosen-select')
                ))
                ->add('civility', 'choice', array('choices' => $choices
                    , 'attr' => array('class' => 'chosen-select')
                ))
                ->add('comments', 'textarea')
                ->add('evaluation', 'choice', array('choices' => $evaluation, 'attr' => array('class' => 'chosen-select')))
                ->add('note', 'choice', array('choices' => $note, 'attr' => array('class' => 'chosen-select'),'label' => 'Decision ',))
                ->add('technical', 'choice', array('choices' => $competencies, 'attr' => array('class' => 'chosen-select'), 'required' => false,
                    'empty_value' => '', 'label' => 'Technical Skills ',))
                ->add('communication', 'choice', array('choices' => $competencies, 'attr' => array('class' => 'chosen-select'), 'required' => false,
                    'empty_value' => '', 'label' => 'Communication',))
                ->add('relationship', 'choice', array('choices' => $competencies, 'attr' => array('class' => 'chosen-select'), 'required' => false,
                    'empty_value' => '', 'label' => 'Relationship Management',))
                ->add('innovation', 'choice', array('choices' => $competencies, 'attr' => array('class' => 'chosen-select'), 'required' => false,
                    'empty_value' => '', 'label' => 'Innovation/Creativity',))
                ->add('agility', 'choice', array('choices' => $competencies, 'attr' => array('class' => 'chosen-select'), 'required' => false,
                    'empty_value' => '', 'label' => 'Change Agility',))
                ->add('acumen', 'choice', array('choices' => $competencies, 'attr' => array('class' => 'chosen-select'), 'required' => false,
                    'empty_value' => '', 'label' => 'Business Acumen',))
                ->add('project', 'choice', array('choices' => $competencies, 'attr' => array('class' => 'chosen-select'), 'required' => false,
                    'empty_value' => '', 'label' => 'Project Management',))
                ->add('team', 'choice', array('choices' => $competencies, 'attr' => array('class' => 'chosen-select'), 'required' => false,
                    'empty_value' => '', 'label' => 'Team Management',))
                ->add('leadership', 'choice', array('choices' => $competencies, 'attr' => array('class' => 'chosen-select'), 'required' => false,
                    'empty_value' => '', 'label' => 'Leadership',))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'TS\AdminBundle\Entity\FeedBack'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'ts_adminbundle_feedback';
    }

}
