<?php
// src/Back/UserBundle/Controller/SecurityController.php;

namespace Back\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Back\UserBundle\Entity\User;

class SecurityController extends Controller
{
	public function loginAction()
	{
		if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
			return $this->redirect($this->generateUrl('fos_user_security_check'));
		}
		$request = $this->getRequest();
		$session = $request->getSession();
		
		if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
			$error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
		} else {
			$error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
			$session->remove(SecurityContext::AUTHENTICATION_ERROR);
		}
		return $this->render('BackUserBundle:Security:login.html.twig', array(
			'error' => $error,
		));
	}
}