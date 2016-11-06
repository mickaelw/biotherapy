<?php

namespace Back\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    }
	
	public function getParent()
    {
        return 'fos_user_registration';
    }
	
    /**
     * @return string
     */
    public function getName()
    {
        return 'back_userbundle_user';
    }
}
