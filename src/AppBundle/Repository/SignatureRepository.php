<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * SignatureRepository
 *
 * @author Aina
 */
class SignatureRepository extends EntityRepository
{
    public function getCategoryCount($category)
    {
        $queryBuilder = $this->createQueryBuilder('q');

        $queryBuilder->select($queryBuilder->expr()->count('q.sigId'));
        $categoryMap = array(
            '1' => array(0, 1,2,3),
            '2' => array(4,5),
            '3' => array(6, 7),
        );
        $queryBuilder->where($queryBuilder->expr()->in('q.sigPriority', $categoryMap[(int)$category]));
        $query = $queryBuilder->getQuery();

        return $query->getSingleScalarResult();
    }
}
