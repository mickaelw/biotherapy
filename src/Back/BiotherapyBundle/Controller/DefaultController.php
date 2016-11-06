<?php

namespace Back\BiotherapyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Front\WebsiteBundle\Entity\Biotherapy;
use Front\WebsiteBundle\Form\BiotherapyType;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	$em 		= $this->getDoctrine()->getManager();
    	$listBio 	= $em->getRepository('FrontWebsiteBundle:Biotherapy')->findAll();
    	
        return $this->render('BackBiotherapyBundle::index.html.twig', array(
        	'list'	=> $listBio,
        ));
    }
    
    public function addAction(){
    	$objBio = new Biotherapy();
    	$form = $this->createForm(new BiotherapyType, $objBio);
    	
    	$request = $this->get('request');
		if ($request->getMethod() == 'POST') {
			$form->bind($request);
			if ($form->isValid()) {
				$em = $this->getDoctrine()->getManager();
				$em->persist($objBio);
				$em->flush();
				
				$this->get('session')->getFlashBag()->add('done', 'La biothérapie a bien été ajoutée');
				
				return $this->redirect($this->generateUrl('back_biotherapy_homepage'));
			}
		}
    	
        return $this->render('BackBiotherapyBundle:Form:add.html.twig', array(
        	'form'	=> $form->createView()
        ));
    }
    
    public function updateAction($id)
    {
	    $em 		= $this->getDoctrine()->getManager();
    	$objBio 	= $em->getRepository('FrontWebsiteBundle:Biotherapy')->find($id);
    	$form = $this->createForm(new BiotherapyType, $objBio);
    	
    	$request = $this->get('request');
		if ($request->getMethod() == 'POST') {
			$form->bind($request);
			if ($form->isValid()) {
				$em->persist($objBio);
				$em->flush();
				
				$this->get('session')->getFlashBag()->add('done', 'La biothérapie a bien été modifiée');
				
				return $this->redirect($this->generateUrl('back_biotherapy_homepage'));
			}
		}
    	
        return $this->render('BackBiotherapyBundle:Form:update.html.twig', array(
        	'obj'	=> $objBio,
        	'form'	=> $form->createView()
        ));
    }
    
    public function deleteAction($id)
    {
	    $em 		= $this->getDoctrine()->getManager();
    	$objBio 	= $em->getRepository('FrontWebsiteBundle:Biotherapy')->find($id);
    	$em->remove($objBio);
		$em->flush();
		
		$this->get('session')->getFlashBag()->add('error', 'La biothérapie a bien été supprimée');
		return $this->redirect($this->generateUrl('back_biotherapy_homepage'));
    }
}
