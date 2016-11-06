<?php

namespace Front\WebsiteBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Front\WebsiteBundle\Entity\Card;
use Front\WebsiteBundle\Entity\CardRepository;
use Front\WebsiteBundle\Entity\Biotherapy;
use Front\WebsiteBundle\Entity\ClinicalSituation;
use Front\WebsiteBundle\Resources\fpdf\FPDF;

use Symfony\Component\HttpFoundation\BinaryFileResponse;

class PdfController extends Controller
{
    public function indexAction($version, $BioID, $CS1ID)
    {	
	    ob_start();
	    
	    $vTxt = 'getTextPatient';
	    $vTitle = 'patient';
	    if($version == 'vMed'){
	    	$vTxt = 'getTextMDShort';
	    	$vTitle = 'médecin';
	    }
	    
	    if($BioID == 0 && $CS1ID != 0)
		    $txt = 'Comparatif des prises en charge pratiques des patients sous biothérapie sous-cutanée présentant une <CS>';
	    elseif($BioID != 0 && $CS1ID == 0){
			$txt = 'Questions/Réponses pratiques sur mon traitement par <BIO>';
			if($version == 'vMed')
				$txt = 'Prise en charge pratique des patients sous <BIO>';
	    }
	    else
	    	$txt = 'Prise en charge pratique des patients sous <BIO> et présentant une <CS>';
	    
	    $em 		= $this->getDoctrine()->getManager();
	    $listCard 	= $em->getRepository('FrontWebsiteBundle:Card')->findAllOrderedByBiotherapy();
	    $bio 		= $em->getRepository('FrontWebsiteBundle:Biotherapy')->find($BioID);
	    $CS 		= $em->getRepository('FrontWebsiteBundle:ClinicalSituation')->find($CS1ID);
	    
		$pdf = new FPDF();
		$pdf->AddPage();
		$pdf->SetFont('Arial','B',16);
		
		/*
			Partie nom du PDF
			*/
		if($BioID == 0 && $CS1ID != 0)
		    $pdf->SetTitle($this->decode($this->parse($txt.' - '.'Version '.$vTitle, '', $CS->getName())));
	    elseif($BioID != 0 && $CS1ID == 0)
	    	$pdf->SetTitle($this->decode($this->parse($txt.' - '.'Version '.$vTitle, $bio->getName())));
	    else
	    	$pdf->SetTitle($this->decode($this->parse($txt.' - '.'Version '.$vTitle, $bio->getName(),$CS->getName())));
	
		/*
			Partie titre
			*/
		$pdf->Image(dirname(__FILE__).'/../Resources/fpdf/puce.jpg',10,6);
		$pdf->SetX(40);
		if($BioID == 0 && $CS1ID != 0)
			$pdf->MultiCell(160,10,$this->decode(ucfirst(strtolower($this->parse($txt, '', $CS->getName())))),0,'J');
	    elseif($BioID != 0 && $CS1ID == 0)
		    $pdf->MultiCell(160,10,$this->decode(ucfirst(strtolower($this->parse($txt, $bio->getName())))),0,'J');
	    else
	    	$pdf->MultiCell(160,10,$this->decode(ucfirst(strtolower($this->parse($txt, $bio->getName(),$CS->getName())))),0,'J');
		$pdf->Ln(10);
		
		/*
			Partie titre et corps de la fiche
			*/
		$tmpBio = '';
		$tmpCS = '';
		foreach($listCard as $card){
			$pdf->SetTextColor(0,0,0);
			if($CS1ID != 0 && $card->getClinicalSituation()->getId() != $CS1ID)
				continue;
			if($BioID != 0 && $card->getBiotherapy()->getId() != $BioID)
				continue;
			
			if($card->getBiotherapy()->getName() != $tmpBio && $BioID == 0){
				$tmpBio = $card->getBiotherapy()->getName();
				$pdf->SetFont('Arial','B',13);
				$pdf->MultiCell(190,10, ucfirst(strtolower($this->decode('Patients sous '.$tmpBio.' :'))),'B','L');
				$pdf->Ln(2);
			}
			
			if($card->getClinicalSituation()->getName() != $tmpCS && $CS1ID == 0){
				$tmpCS = $card->getClinicalSituation()->getName();
				$pdf->SetFont('Arial','B',13);
				$det = $this->getDet($tmpCS);
				$pdf->MultiCell(190,10, ucfirst(strtolower($this->decode('En cas '.$det.' :'))),'B','L');
				$pdf->Ln(2);
			}

			
			$pdf->SetFillColor(202,187,127);
			$pdf->SetFont('Arial','B',13);
			$pdf->MultiCell(190,10,$this->decode($card->getName()),0,'L',true);
			$pdf->SetTextColor(72,36,127);
			$pdf->SetFont('Arial','',9);
			$pdf->MultiCell(190,6, $this->decode($card->$vTxt()),0,'J');
			if($version == 'vMed'){
				$pdf->SetTextColor(207,0,25);
				$pdf->MultiCell(190,6, $this->decode($card->getTextMDFull()),0,'J');
			}
			$pdf->Ln(10);
		}
		
		/*
			Partie références
			*/
		$pdf->SetTextColor(0,0,0);
		$pdf->SetFont('Arial','I',13);
		$pdf->MultiCell(190,10,$this->decode('Référence(s)'),0,'L',false);
		$pdf->SetFont('Arial','I',9);
		foreach($listCard as $card){
			if($CS1ID != 0 && $card->getClinicalSituation()->getId() != $CS1ID)
				continue;
			if($BioID != 0 && $card->getBiotherapy()->getId() != $BioID)
				continue;
			if(empty($card->getTextRef()))
				continue;
			$pdf->MultiCell(190,6, $this->decode($card->getTextRef()),0,'L');
		}
		
		ob_end_clean();

		$response = new Response(
	        $pdf->Output(),
	        Response::HTTP_OK,
	        array('content-type' => 'application/pdf')
	    );
	
	    $d = $response->headers->makeDisposition(
	        ResponseHeaderBag::DISPOSITION_ATTACHMENT,
	        'foo.pdf'
	    );
	
	    $response->headers->set('Content-Disposition', $d);
	
	    return $response;
    }
    
    private function decode($txt){
	    $txt_decode = utf8_decode(html_entity_decode(str_replace(array('&rsquo;'), "'", strip_tags(mb_convert_encoding(trim($txt), "HTML-ENTITIES", 'UTF-8')))));
	    
	    return $txt_decode;
    }
    
    private function parse($txt,$bioName='',$csName=''){
	    $pattern = array('<BIO>','<CS>');
	    $replace = array($bioName,$csName);
	    
	    return str_replace($pattern, $replace, $txt);
    }
    
    private function getDet($txt){
	    $pattern = array('a','e','i','o','u','y');
	    $firstLetter = substr(strtolower($txt), 0, 1);
	    if(in_array($firstLetter,$pattern))
	    	return "d'".$txt;
	    else
	    	return "de ".$txt;
	}
}