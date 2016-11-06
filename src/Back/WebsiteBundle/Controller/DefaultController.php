<?php

namespace Back\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
			return $this->redirect($this->generateUrl('fos_user_security_login'));
		}
	    
	    return $this->render('BackWebsiteBundle:Default:index.html.twig');
    }
}
