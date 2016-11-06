<?php

namespace Front\WebsiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MediaType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name','text')
            ->add('download','checkbox',array('required'=>false))
            ->add('file','file',array('required'=>false))
            ->remove('url')
            ->remove('urlPreview')
            ->remove('type')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Front\WebsiteBundle\Entity\Media'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'front_websitebundle_media';
    }
}
