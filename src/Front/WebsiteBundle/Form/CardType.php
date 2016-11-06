<?php

namespace Front\WebsiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CardType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name'				,'text', array('required'=>false))
            ->add('textPatient'			,'textarea', array('attr' => array('class'=>'edit','rows'=>'20'),'required'=>false))
            ->add('textMDShort'			,'textarea', array('attr' => array('class'=>'edit','rows'=>'20'),'required'=>false))
            ->add('textMDFull'			,'textarea', array('attr' => array('class'=>'edit','rows'=>'20'),'required'=>false))
            ->add('textRef'				,'textarea', array('attr' => array('class'=>'edit','rows'=>'20'),'required'=>false))
            ->remove('createdTime')
            ->remove('modifiedTime')
            ->add('biotherapy'			,'entity', array(
            	'class'		=> 'FrontWebsiteBundle:Biotherapy',
            	'property'	=> 'name',
            	'empty_value' => 'Choisissez une biothérapie',
            ))
            ->add('clinicalSituation'	,'entity', array(
            	'class'		=> 'FrontWebsiteBundle:ClinicalSituation',
            	'property'	=> 'name',
            	'empty_value' => 'Choisissez une situation clinique',
            	'query_builder'	=> function(\Front\WebsiteBundle\Entity\ClinicalSituationRepository $cs){
	            	return $cs->getCSRoot();
            	}
            ))
            ->add('clinicalSituation2'	,'entity', array(
            	'class'		=> 'FrontWebsiteBundle:ClinicalSituation',
            	'property'	=> 'name',
            	'empty_value' => 'Choisissez une situation clinique',
            	'required'	=> false
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Front\WebsiteBundle\Entity\Card'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'front_websitebundle_card';
    }
}
