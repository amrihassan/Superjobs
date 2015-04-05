<?php

namespace Superjobs\HomeBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * JobsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class JobsRepository extends EntityRepository
{
    public function getCreatedQueryBuilder()
    {
      return $this
        ->createQueryBuilder('a')
        ->where('a.published = :published')
        ->setParameter('is_created', true)
      ;
    }
}
