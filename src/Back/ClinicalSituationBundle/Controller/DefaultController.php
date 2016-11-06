<?php

namespace Back\ClinicalSituationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Front\WebsiteBundle\Entity\ClinicalSituation;
use Front\WebsiteBundle\Form\ClinicalSituationType;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em 		= $this->getDoctrine()->getManager();
    	$listCS 	= $em->getRepository('FrontWebsiteBundle:ClinicalSituation')->findAll();
    	
        return $this->render('BackClinicalSituationBundle::index.html.twig', array(
        	'list'	=> $listCS,
        ));
    }
    
    public function addAction(){
    	$objCS = new ClinicalSituation();
    	$form = $this->createForm(new ClinicalSituationType, $objCS);
    	
    	$request = $this->get('request');
		if ($request->getMethod() == 'POST') {
			$form->bind($request);
			if ($form->isValid()) {
				$em = $this->getDoctrine()->getManager();
				$em->persist($objCS);
				$em->flush();
				
				$this->get('session')->getFlashBag()->add('done', 'La situation clinique a bien été ajoutée');
				
				return $this->redirect($this->generateUrl('back_CS_homepage'));
			}
		}
    	
        return $this->render('BackClinicalSituationBundle:Form:add.html.twig', array(
        	'form'	=> $form->createView()
        ));
    }
    
    public function updateAction($id)
    {
	    $em 	= $this->getDoctrine()->getManager();
    	$objCS 	= $em->getRepository('FrontWebsiteBundle:ClinicalSituation')->find($id);
    	$form 	= $this->createForm(new ClinicalSituationType, $objCS);
    	
    	$request = $this->get('request');
		if ($request->getMethod() == 'POST') {
			$form->bind($request);
			if ($form->isValid()) {
				$em->persist($objCS);
				$em->flush();
				
				$this->get('session')->getFlashBag()->add('done', 'La situation cliniques a bien été modifiée');
				
				return $this->redirect($this->generateUrl('back_CS_homepage'));
			}
		}
    	
        return $this->render('BackClinicalSituationBundle:Form:update.html.twig', array(
        	'obj'	=> $objCS,
        	'form'	=> $form->createView()
        ));
    }
    
    public function deleteAction($id)
    {
	    $em 	= $this->getDoctrine()->getManager();
    	$objCS 	= $em->getRepository('FrontWebsiteBundle:ClinicalSituation')->find($id);
    	$em->remove($objCS);
		$em->flush();
		
		$this->get('session')->getFlashBag()->add('error', 'La situation cliniques a bien été supprimée');
		return $this->redirect($this->generateUrl('back_CS_homepage'));
    }
}
