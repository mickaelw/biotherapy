<?php 
// src/Front/WebsiteBundle/Twig/StringExtension.php
namespace Front\WebsiteBundle\Twig;

class StringExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('trunText', array($this, 'trunText')),
            new \Twig_SimpleFilter('url_format', array($this, 'urlFormat')),
        );
    }

    function trunText($texte_tron, $longeur_max, $space = 1, $tron = '...'){
		if (strlen($texte_tron) > $longeur_max){
			$texte_tron = mb_substr($texte_tron,0,$longeur_max,'UTF-8');
			$espace = mb_strrpos($texte_tron,' ',0,'UTF-8');
			if($espace && $space)
				$texte_tron = mb_substr($texte_tron,0,$espace,'UTF-8');			
			$texte_tron .= $tron;
		}
		return $texte_tron;
	}
	
	public function urlFormat($str)
    {
        $str = mb_strtolower($str, 'UTF-8');  
	    $str = str_replace(  
           array(  
                'à', 'â', 'ä', 'á', 'ã', 'å',  
                'î', 'ï', 'ì', 'í',  
                'ô', 'ö', 'ò', 'ó', 'õ', 'ø',  
                'ù', 'û', 'ü', 'ú',  
                'é', 'è', 'ê', 'ë',  
                'ç', 'ÿ', 'ñ',  
                'À', 'Â', 'Ä', 'Á', 'Ã', 'Å',  
                'Î', 'Ï', 'Ì', 'Í',  
                'Ô', 'ö', 'Ò', 'Ó', 'Õ', 'Ø',  
                'Ù', 'Û', 'Ü', 'Ú',  
                'É', 'È', 'Ê', 'Ë',  
                'Ç', 'Ý', 'Ñ',  
           ),  
           array(  
                'a', 'a', 'a', 'a', 'a', 'a',  
                'i', 'i', 'i', 'i',  
                'o', 'o', 'o', 'o', 'o', 'o',  
                'u', 'u', 'u', 'u',  
                'e', 'e', 'e', 'e',  
                'c', 'y', 'n',  
                'A', 'A', 'A', 'A', 'A', 'A',  
                'I', 'I', 'I', 'I',  
                'O', 'O', 'O', 'O', 'O', 'O',  
                'U', 'U', 'U', 'U',  
                'E', 'E', 'E', 'E',  
                'C', 'Y', 'N',  
            ),  
            $str
		);  
	  
	    $str = preg_replace("/[^[:alnum:]]+/", '_', $str);  
	    $str = preg_replace("/[-]+/", '_', $str);  
	    $str = preg_replace("/[-]$/", '', $str);  
	  
		if(substr($str, -1) == '_')
			$str = substr($str, 0, -1);
	  
	    return $str;
    }

    public function getName()
    {
        return 'string_extension';
    }
}