<?php
// src/Back/UserBundle/Controller/DefaultController.php;

namespace Back\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Back\UserBundle\Entity\User;
use Back\UserBundle\Form\UserType;

class DefaultController extends Controller
{
	public function indexAction(){
		$um 		= $this->get('fos_user.user_manager');
    	$listUser 	= $um->findUsers();
    	
		return $this->render('BackUserBundle::index.html.twig', array(
			'list'	=> $listUser,
		));
	}
	
	public function addAction(){
		$um 		= $this->get('fos_user.user_manager');
    	$objUser 	= $um->createUser();
    	$form = $this->createForm(new UserType, $objUser);
    	
    	$request = $this->get('request');
		if ($request->getMethod() == 'POST') {
			$form->bind($request);
			if ($form->isValid()) {
				$objUser->setRoles(array('ROLE_USER'));
				$objUser->setEnabled(true);
				$um->updateUser($objUser);
				$this->getDoctrine()->getManager()->flush();
				
				$this->get('session')->getFlashBag()->add('done', 'L\'utilisateur a bien été ajouté');
				
				return $this->redirect($this->generateUrl('back_user_homepage'));
			}
		}
    	
        return $this->render('BackUserBundle:Form:add.html.twig', array(
        	'form'	=> $form->createView()
        ));
    }
    
    public function updateAction($id)
    {
	    $um 		= $this->get('fos_user.user_manager');
    	$objUser 	= $um->findUserBy(array('id'=>$id));
    	$form = $this->createForm(new UserType, $objUser);
    	
    	$request = $this->get('request');
		if ($request->getMethod() == 'POST') {
			$form->bind($request);
			if ($form->isValid()) {
				$um->updateUser($objUser);
				$this->getDoctrine()->getManager()->flush();
				
				$this->get('session')->getFlashBag()->add('done', 'L\'utilisateur a bien été modifié');
				
				return $this->redirect($this->generateUrl('back_user_homepage'));
			}
		}
    	
        return $this->render('BackUserBundle:Form:update.html.twig', array(
        	'obj'	=> $objUser,
        	'form'	=> $form->createView()
        ));
    }

    
    public function deleteAction($id)
    {
	    $um 		= $this->get('fos_user.user_manager');
    	$objUser 	= $um->findUserBy(array('id'=>$id));
    	$um->deleteUser($objUser);
		$this->getDoctrine()->getManager()->flush();
		
		$this->get('session')->getFlashBag()->add('error', 'L\'utilisateur a bien été supprimé');
		return $this->redirect($this->generateUrl('back_user_homepage'));
    }
}