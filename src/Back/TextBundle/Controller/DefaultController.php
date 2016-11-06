<?php

namespace Back\TextBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Front\WebsiteBundle\Entity\Text;
use Front\WebsiteBundle\Form\TextType;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	$em 		= $this->getDoctrine()->getManager();
    	$listText 	= $em->getRepository('FrontWebsiteBundle:Text')->findAll();
    	
        return $this->render('BackTextBundle::index.html.twig', array(
        	'list'	=> $listText,
        ));
    }
    
    public function updateAction($id)
    {
	    $em 		= $this->getDoctrine()->getManager();
    	$objText 	= $em->getRepository('FrontWebsiteBundle:Text')->find($id);
    	$form = $this->createForm(new TextType, $objText);
    	
    	$request = $this->get('request');
		if ($request->getMethod() == 'POST') {
			$form->bind($request);
			if ($form->isValid()) {
				$em->persist($objText);
				$em->flush();
				
				$this->get('session')->getFlashBag()->add('done', 'Le texte a bien été modifié');
				
				return $this->redirect($this->generateUrl('back_text_homepage'));
			}
		}
    	
        return $this->render('BackTextBundle:Form:update.html.twig', array(
        	'obj'	=> $objText,
        	'form'	=> $form->createView()
        ));
    }
}
