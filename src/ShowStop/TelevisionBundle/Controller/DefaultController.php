<?php

namespace ShowStop\TelevisionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function showAction($name) {
		$api_key = 'C39165096A3B58D7'; //key for tvdb api
		$seriesByName_response = 'http://thetvdb.com/api/GetSeries.php?seriesname=%s&language=%l'; //finds a list of shows matching name
		$seriesByID_response = 'http://thetvdb.com/api/%s/series/%d'; //returns all information about a specific show by id
		
		//get doctrine entity manager
		$em = $this->getDoctrine()->getEntityManager();
		
		//get all tv series from db
		//$series	= $em->getRepository('ShowStopTelevisionBundle:Series')
		//	->findAll();
		$query = $em->createQuery( 'SELECT s FROM ShowStopTelevisionBundle:Series s WHERE s.id >= 1500 AND s.id < 2500 ' );
		
		$series = $query->getResult();
		
		if (!$series) {
			throw $this->createNotFoundException( "No television show found called '" . $name . "'");
		}
		
		foreach( $series as $show ) {
			//find the show on tvdb
			$language = 'en';
			$xml = simplexml_load_file( sprintf( $seriesByName_response, urlencode( $show->getName() ), $language ) );
			
			if( $xml->Series[0] ) { 
				//lookup show info by tvdb_id
				$xml = simplexml_load_file( sprintf( $seriesByID_response, $api_key, $xml->Series[0]->seriesid ) );
				
				$show->setDescription( (string)$xml->Series[0]->Overview );
				$show->setFirstAired( (string)$xml->Series[0]->FirstAired );
				$show->setStatus( (string)$xml->Series[0]->Status );
				$show->setNetwork( (string)$xml->Series[0]->Network );
				$show->setTvdbId( (int)$xml->Series[0]->id );
			}
		}
		$em->flush();
		
        return $this->render('ShowStopTelevisionBundle:Default:index.html.twig', array('series' => 'update complete' ) );
    }
	
}
