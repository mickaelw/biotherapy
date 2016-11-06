<?php

namespace Back\MediaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Front\WebsiteBundle\Entity\Media;
use Front\WebsiteBundle\Form\MediaType;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	$em 		= $this->getDoctrine()->getManager();
    	$listMed 	= $em->getRepository('FrontWebsiteBundle:Media')->findAll();
    	
        return $this->render('BackMediaBundle::index.html.twig', array(
        	'list'	=> $listMed,
        ));
    }
    
    public function addAction(){
    	$objMed = new Media();
    	$form = $this->createForm(new MediaType, $objMed);
    	
    	$request = $this->get('request');
		if ($request->getMethod() == 'POST') {
			$form->bind($request);
			if ($form->isValid()) {
				$objMed->upload();
				$em = $this->getDoctrine()->getManager();
				$em->persist($objMed);
				$em->flush();
				
				$this->get('session')->getFlashBag()->add('done', 'Le partenaire a bien été ajouté');
				
				return $this->redirect($this->generateUrl('back_media_homepage'));
			}
		}
    	
        return $this->render('BackMediaBundle:Form:add.html.twig', array(
        	'form'	=> $form->createView()
        ));
    }
    
    public function updateAction($id)
    {
	    $em 		= $this->getDoctrine()->getManager();
    	$objMed 	= $em->getRepository('FrontWebsiteBundle:Media')->find($id);
    	$form = $this->createForm(new MediaType, $objMed);
    	
    	$request = $this->get('request');
		if ($request->getMethod() == 'POST') {
			$form->bind($request);
			if ($form->isValid()) {
				$objMed->upload();
				$em->persist($objMed);
				$em->flush();
				
				$this->get('session')->getFlashBag()->add('done', 'Le partenaire a bien été modifié');
				
				return $this->redirect($this->generateUrl('back_media_homepage'));
			}
		}
    	
        return $this->render('BackMediaBundle:Form:update.html.twig', array(
        	'obj'	=> $objMed,
        	'form'	=> $form->createView()
        ));
    }
    
    public function deleteAction($id)
    {
	    $em 		= $this->getDoctrine()->getManager();
    	$objMed 	= $em->getRepository('FrontWebsiteBundle:Media')->find($id);
    	$em->remove($objMed);
		$em->flush();
		
		$this->get('session')->getFlashBag()->add('error', 'Le partenaire a bien été supprimé');
		return $this->redirect($this->generateUrl('back_media_homepage'));
    }
}
