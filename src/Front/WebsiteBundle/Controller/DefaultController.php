<?php

namespace Front\WebsiteBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Front\WebsiteBundle\Entity\Card;
use Front\WebsiteBundle\Entity\CardRepository;
use Front\WebsiteBundle\Entity\Biotherapy;
use Front\WebsiteBundle\Entity\ClinicalSituation;
use Front\WebsiteBundle\Entity\Text;
use Front\WebsiteBundle\Entity\Media;
use Front\WebsiteBundle\Entity\Partner;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	$em 		= $this->getDoctrine()->getManager();
    	$listBio 	= $em->getRepository('FrontWebsiteBundle:Biotherapy')->findAll();
    	$listCS 	= $em->getRepository('FrontWebsiteBundle:ClinicalSituation')->findByParent(null);
    	$listCard 	= $em->getRepository('FrontWebsiteBundle:Card')->findAll();
    	$listPart 	= $em->getRepository('FrontWebsiteBundle:Partner')->findAll();
    	$home 		= $em->getRepository('FrontWebsiteBundle:Text')->find(1);
    	$about 		= $em->getRepository('FrontWebsiteBundle:Text')->find(2);
    	$contact 	= $em->getRepository('FrontWebsiteBundle:Text')->find(4);
    	$ua			= $this->parse_user_agent();
    	
    	$arrayName = array();
    	foreach($listCard as $c)
    		$arrayName[] = $c->getName();
    	$names = '[{value:"'.implode('"},{value:"',$arrayName).'"}]';
    	
        return $this->render('FrontWebsiteBundle:Default:index.html.twig', array(
        	'listBio'	=> $listBio,
        	'listCS'	=> $listCS,
        	'listKeyWords'	=> $names,
        	'home'		=> $home,
        	'about'		=> $about,
        	'listPart'	=> $listPart,
        	'contact'	=> $contact,
        	'ua'		=> $ua,
        ));
    }
    
    public function cardAction($id,$slug,$format)
    {
    	$em 		= $this->getDoctrine()->getManager();
    	$card 		= $em->getRepository('FrontWebsiteBundle:Card')->find($id);
    	$listBio 	= $em->getRepository('FrontWebsiteBundle:Biotherapy')->findAll();
    	$listCS 	= $em->getRepository('FrontWebsiteBundle:ClinicalSituation')->findByParent(null);
    	$listCard 	= $em->getRepository('FrontWebsiteBundle:Card')->findAll();
    	$listPart 	= $em->getRepository('FrontWebsiteBundle:Partner')->findAll();
    	$about 		= $em->getRepository('FrontWebsiteBundle:Text')->find(2);
    	$edition 	= $em->getRepository('FrontWebsiteBundle:Text')->find(3);
    	$contact 	= $em->getRepository('FrontWebsiteBundle:Text')->find(4);
    	$edition 	= $em->getRepository('FrontWebsiteBundle:Text')->find(3);
    	$ua			= $this->parse_user_agent();
    	
    	$arrayName = array();
    	foreach($listCard as $c)
    		$arrayName[] = mb_substr($c->getName(),0,35,'UTF-8');
    	$names = '[{value:"'.implode('"},{value:"',$arrayName).'"}]';
    	
    	$favorite = array();
    	if($this->getRequest()->cookies->get('favorite') != NULL)
			$favorite = json_decode($this->getRequest()->cookies->get('favorite'));
    	
        return $this->render('FrontWebsiteBundle:Default:card.html.twig', array(
        	'card'		=> $card,
        	'listBio'	=> $listBio,
        	'listCS'	=> $listCS,
        	'listKeyWords'	=> $names,
        	'favorite'	=> $favorite,
        	'edition'	=> $edition,
        	'about'		=> $about,
        	'listPart'	=> $listPart,
        	'contact'	=> $contact,
        	'edition'	=> $edition,
        	'ua'		=> $ua,
        ));
    }
    
    public function downloadAction($id,$slug,$format){
    	$em 		= $this->getDoctrine()->getManager();
    	$media 		= $em->getRepository('FrontWebsiteBundle:Media')->find($id);
        $path 		= $media->getUrl();
        $content 	= file_get_contents($path);

        $response = new Response();

        $response->headers->set('Content-Type', 'application/'.$format);
        $response->headers->set('Content-Disposition', 'attachment;filename="'.$media->getName().'.'.$media->getType().'"');

        return $response->setContent($content);
    }
    
    public function ajaxAction($param)
    {
    	switch($param) :
    		case 'search':
    			$em 			= $this->getDoctrine()->getManager();
    			$searchBioID 	= $this->getRequest()->get('search-biotherapy');
    			$searchCSID 	= $this->getRequest()->get('search-clinicalSituation');
    			$searchCS2ID 	= $this->getRequest()->get('search-clinicalSituation2');
    			$searchWord 	= $this->getRequest()->get('search-word');
    			
    			$search 		= $em->getRepository('FrontWebsiteBundle:Card')->search($searchWord, $searchBioID, $searchCSID, $searchCS2ID);

    			$favorite = array();
		    	if($this->getRequest()->cookies->get('favorite') != NULL)
					$favorite = json_decode($this->getRequest()->cookies->get('favorite'));
				return $this->render('FrontWebsiteBundle:Default:search.html.twig', array(
					'list' 		=> $search,
					'favorite' 	=> $favorite
				));
				break;
				
			case 'favorite' :
				$favCardID 	= $this->getRequest()->get('cardId');
				$favorite 	= array();
				$response 	= new Response();
				$state 		= '0';

				if($this->getRequest()->cookies->get('favorite') != NULL)
					$favorite = json_decode($this->getRequest()->cookies->get('favorite'));
				if(!in_array($favCardID, $favorite)){
					$favorite[] = $favCardID;
					$state = '1';
				}
				else{
					foreach($favorite as $k => $v)
						if($v == $favCardID){
							unset($favorite[$k]);
							$state = '0';
						}
				}
				$response->headers->setCookie(new Cookie('favorite', json_encode($favorite)));
				$response->send();
				echo $state;
				return $response;
				break;
				
			case 'select':								
				$type = $this->getRequest()->get('type');
				$ID = $this->getRequest()->get('value');
				$ua			= $this->parse_user_agent();
				
				$em = $this->getDoctrine()->getManager();
				$obj = $em->getRepository('FrontWebsiteBundle:ClinicalSituation')->findByParent($ID);
				
				return $this->render('FrontWebsiteBundle:Form:select.html.twig',array(
					'name'  => 'search-clinicalSituation2',
					'list'	=> $obj,
					'ua'		=> $ua,
				));
				break;
		endswitch;
    }
    
	private function parse_user_agent( $u_agent = null )
	{
		if( is_null($u_agent) ) {
			if( isset($_SERVER['HTTP_USER_AGENT']) ) {
				$u_agent = $_SERVER['HTTP_USER_AGENT'];
			} else {
				throw new \InvalidArgumentException('parse_user_agent requires a user agent');
			}
		}
		
		$platform = null;
		$browser  = null;
		$version  = null;
		
		$empty = array( 'platform' => $platform, 'browser' => $browser, 'version' => $version );
		
		if( !$u_agent ) return $empty;
		
		if( preg_match('/\((.*?)\)/im', $u_agent, $parent_matches) ) {
		
			preg_match_all('/(?P<platform>BB\d+;|Android|CrOS|iPhone|iPad|Linux|Macintosh|Windows(\ Phone)?|Silk|linux-gnu|BlackBerry|PlayBook|(New\ )?Nintendo\ (WiiU?|3DS)|Xbox(\ One)?)
					(?:\ [^;]*)?
					(?:;|$)/imx', $parent_matches[1], $result, PREG_PATTERN_ORDER);
		
			$priority           = array( 'Android', 'Xbox One', 'Xbox' );
			$result['platform'] = array_unique($result['platform']);
			if( count($result['platform']) > 1 ) {
				if( $keys = array_intersect($priority, $result['platform']) ) {
					$platform = reset($keys);
				} else {
					$platform = $result['platform'][0];
				}
			} elseif( isset($result['platform'][0]) ) {
				$platform = $result['platform'][0];
			}
		}
		
		if( $platform == 'linux-gnu' ) {
			$platform = 'Linux';
		} elseif( $platform == 'CrOS' ) {
			$platform = 'Chrome OS';
		}
		
		preg_match_all('%(?P<browser>Camino|Kindle(\ Fire\ Build)?|Firefox|Iceweasel|Safari|MSIE|Trident|AppleWebKit|Chrome|
				Vivaldi|IEMobile|Opera|OPR|Silk|Midori|Edge|
				Baiduspider|Googlebot|YandexBot|bingbot|Lynx|Version|Wget|curl|
				NintendoBrowser|PLAYSTATION\ (\d|Vita)+)
				(?:\)?;?)
				(?:(?:[:/ ])(?P<version>[0-9A-Z.]+)|/(?:[A-Z]*))%ix',
			$u_agent, $result, PREG_PATTERN_ORDER);
		
		// If nothing matched, return null (to avoid undefined index errors)
		if( !isset($result['browser'][0]) || !isset($result['version'][0]) ) {
			if( !$platform && preg_match('%^(?!Mozilla)(?P<browser>[A-Z0-9\-]+)(/(?P<version>[0-9A-Z.]+))?([;| ]\ ?.*)?$%ix', $u_agent, $result)
			) {
				return array( 'platform' => null, 'browser' => $result['browser'], 'version' => isset($result['version']) ? $result['version'] ?: null : null );
			}
		
			return $empty;
		}
		
		if( preg_match('/rv:(?P<version>[0-9A-Z.]+)/si', $u_agent, $rv_result) ) {
			$rv_result = $rv_result['version'];
		}
		
		$browser = $result['browser'][0];
		$version = $result['version'][0];
		
		$find = function ( $search, &$key ) use ( $result ) {
			$xkey = array_search(strtolower($search), array_map('strtolower', $result['browser']));
			if( $xkey !== false ) {
				$key = $xkey;
		
				return true;
			}
		
			return false;
		};
		
		$key  = 0;
		$ekey = 0;
		if( $browser == 'Iceweasel' ) {
			$browser = 'Firefox';
		} elseif( $find('Playstation Vita', $key) ) {
			$platform = 'PlayStation Vita';
			$browser  = 'Browser';
		} elseif( $find('Kindle Fire Build', $key) || $find('Silk', $key) ) {
			$browser  = $result['browser'][$key] == 'Silk' ? 'Silk' : 'Kindle';
			$platform = 'Kindle Fire';
			if( !($version = $result['version'][$key]) || !is_numeric($version[0]) ) {
				$version = $result['version'][array_search('Version', $result['browser'])];
			}
		} elseif( $find('NintendoBrowser', $key) || $platform == 'Nintendo 3DS' ) {
			$browser = 'NintendoBrowser';
			$version = $result['version'][$key];
		} elseif( $find('Kindle', $key) ) {
			$browser  = $result['browser'][$key];
			$platform = 'Kindle';
			$version  = $result['version'][$key];
		} elseif( $find('OPR', $key) ) {
			$browser = 'Opera Next';
			$version = $result['version'][$key];
		} elseif( $find('Opera', $key) ) {
			$browser = 'Opera';
			$find('Version', $key);
			$version = $result['version'][$key];
		} elseif( $find('Midori', $key) ) {
			$browser = 'Midori';
			$version = $result['version'][$key];
		} elseif( $browser == 'MSIE' || ($rv_result && $find('Trident', $key)) || $find('Edge', $ekey) ) {
			$browser = 'MSIE';
			if( $find('IEMobile', $key) ) {
				$browser = 'IEMobile';
				$version = $result['version'][$key];
			} elseif( $ekey ) {
				$version = $result['version'][$ekey];
			} else {
				$version = $rv_result ?: $result['version'][$key];
			}
		} elseif( $find('Vivaldi', $key) ) {
			$browser = 'Vivaldi';
			$version = $result['version'][$key];
		} elseif( $find('Chrome', $key) ) {
			$browser = 'Chrome';
			$version = $result['version'][$key];
		} elseif( $browser == 'AppleWebKit' ) {
			if( ($platform == 'Android' && !($key = 0)) ) {
				$browser = 'Android Browser';
			} elseif( strpos($platform, 'BB') === 0 ) {
				$browser  = 'BlackBerry Browser';
				$platform = 'BlackBerry';
			} elseif( $platform == 'BlackBerry' || $platform == 'PlayBook' ) {
				$browser = 'BlackBerry Browser';
			} elseif( $find('Safari', $key) ) {
				$browser = 'Safari';
			}
		
			$find('Version', $key);
		
			$version = $result['version'][$key];
		} elseif( $key = preg_grep('/playstation \d/i', array_map('strtolower', $result['browser'])) ) {
			$key = reset($key);
		
			$platform = 'PlayStation ' . preg_replace('/[^\d]/i', '', $key);
			$browser  = 'NetFront';
		}
		
		return array( 'platform' => $platform ?: null, 'browser' => $browser ?: null, 'version' => $version ?: null );		
	}

}