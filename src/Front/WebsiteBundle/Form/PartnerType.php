<?php

namespace Front\WebsiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PartnerType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name'	,'text')
            ->add('url'		,'url')
            ->add('media'	,'entity', array(
            	'class'		=> 'FrontWebsiteBundle:Media',
            	'property'	=> 'name',
            	'empty_value' => 'Choisissez un logo',
            	'query_builder'	=> function(\Front\WebsiteBundle\Entity\MediaRepository $m){
	            	return $m->getPicture();
            	},
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Front\WebsiteBundle\Entity\Partner'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'front_websitebundle_partner';
    }
}
