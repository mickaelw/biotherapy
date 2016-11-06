<?php

namespace Front\WebsiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TextType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'hidden')
            ->add('text', 'textarea', array('attr' => array('class'=>'edit','rows'=>'20')))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Front\WebsiteBundle\Entity\Text'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'front_websitebundle_text';
    }
}
