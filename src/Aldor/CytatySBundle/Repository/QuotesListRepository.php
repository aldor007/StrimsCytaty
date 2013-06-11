<?php

namespace Aldor\CytatySBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * QuoteRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class QuotesListRepository extends EntityRepository
{
    public function getLastQouteList($max)
    {
        $qb = $this->createQueryBuilder('q')->where(' q.enddate < :enddate')
            ->setParameter('enddate',new \DateTime())
    ->add('orderBy', 'q.id DESC')

            ->setMaxResults($max);
        $query = $qb->getQuery();
        return $query->getResult();


    }


}
