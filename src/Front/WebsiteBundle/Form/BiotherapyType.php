<?php

namespace Front\WebsiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BiotherapyType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',				'text')
            ->add('clinicalSituations', 'entity', array(
            	'class'		=> 'FrontWebsiteBundle:ClinicalSituation',
            	'property'	=> 'name',
            	'empty_value' => 'Choisissez une situation clinique',
            	'query_builder'	=> function(\Front\WebsiteBundle\Entity\ClinicalSituationRepository $cs){
	            	return $cs->getCSRoot();
            	},
            	'multiple'	=> true,
            	'expanded'	=> true,
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Front\WebsiteBundle\Entity\Biotherapy'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'front_websitebundle_biotherapy';
    }
}
