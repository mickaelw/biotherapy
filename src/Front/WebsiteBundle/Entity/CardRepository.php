<?php

namespace Front\WebsiteBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * CardRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CardRepository extends EntityRepository
{
	public function search($word,$bioID=0,$CSID=0,$CS2ID=0){
		$qb = $this->createQueryBuilder('c');
		
		if($bioID != 0)
			$qb->Where('c.biotherapy = :bioID')
	     		->setParameter('bioID', $bioID);
		if($CSID != 0)
			$qb->andWhere('c.clinicalSituation = :CSID')
				->setParameter('CSID', $CSID);
		if($CS2ID != 0)
			$qb->andWhere('c.clinicalSituation2 = :CS2ID')
				->setParameter('CS2ID', $CS2ID);
		if(!empty($word))
			$qb->andWhere('c.name LIKE :word')
				->setParameter('word', '%'.$word.'%');
		
		$qb->orderBy('c.modifiedTime', 'DESC');

		return $qb->getQuery()->getResult();
	}
	
	public function findAllOrderedByBiotherapy(){
		return $this->getEntityManager()
            ->createQuery(
                'SELECT c FROM FrontWebsiteBundle:Card c ORDER BY c.biotherapy ASC, c.clinicalSituation ASC'
            )
            ->getResult();
	}
}
