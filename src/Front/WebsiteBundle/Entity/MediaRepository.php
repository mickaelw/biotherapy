<?php

namespace Front\WebsiteBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * MediaRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class MediaRepository extends EntityRepository
{
	public function getPicture()
	{
		$qb = $this->createQueryBuilder('m')
			->where("m.type in ('png','jpg','jpeg','gif','tiff')");
			
		return $qb;
	}
}
