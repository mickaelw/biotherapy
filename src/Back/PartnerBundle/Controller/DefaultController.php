<?php

namespace Back\PartnerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Front\WebsiteBundle\Entity\Partner;
use Front\WebsiteBundle\Form\PartnerType;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	$em 		= $this->getDoctrine()->getManager();
    	$listPar 	= $em->getRepository('FrontWebsiteBundle:Partner')->findAll();
    	
        return $this->render('BackPartnerBundle::index.html.twig', array(
        	'list'	=> $listPar,
        ));
    }
    
    public function addAction(){
    	$objPar = new Partner();
    	$form = $this->createForm(new PartnerType, $objPar);
    	
    	$request = $this->get('request');
		if ($request->getMethod() == 'POST') {
			$form->bind($request);
			if ($form->isValid()) {
				$em = $this->getDoctrine()->getManager();
				$em->persist($objPar);
				$em->flush();
				
				$this->get('session')->getFlashBag()->add('done', 'Le partenaire a bien été ajouté');
				
				return $this->redirect($this->generateUrl('back_partner_homepage'));
			}
		}
    	
        return $this->render('BackPartnerBundle:Form:add.html.twig', array(
        	'form'	=> $form->createView()
        ));
    }
    
    public function updateAction($id)
    {
	    $em 		= $this->getDoctrine()->getManager();
    	$objPar 	= $em->getRepository('FrontWebsiteBundle:Partner')->find($id);
    	$form = $this->createForm(new PartnerType, $objPar);
    	
    	$request = $this->get('request');
		if ($request->getMethod() == 'POST') {
			$form->bind($request);
			if ($form->isValid()) {
				$em->persist($objPar);
				$em->flush();
				
				$this->get('session')->getFlashBag()->add('done', 'Le partenaire a bien été modifié');
				
				return $this->redirect($this->generateUrl('back_partner_homepage'));
			}
		}
    	
        return $this->render('BackPartnerBundle:Form:update.html.twig', array(
        	'obj'	=> $objPar,
        	'form'	=> $form->createView()
        ));
    }
    
    public function deleteAction($id)
    {
	    $em 		= $this->getDoctrine()->getManager();
    	$objPar 	= $em->getRepository('FrontWebsiteBundle:Partner')->find($id);
    	$em->remove($objPar);
		$em->flush();
		
		$this->get('session')->getFlashBag()->add('error', 'Le partenaire a bien été supprimé');
		return $this->redirect($this->generateUrl('back_partner_homepage'));
    }
}