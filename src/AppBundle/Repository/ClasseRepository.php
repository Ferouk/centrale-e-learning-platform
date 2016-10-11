<?php

namespace AppBundle\Repository;

/**
 * ClasseRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ClasseRepository extends \Doctrine\ORM\EntityRepository
{

    public function search($search){
        $query = $this->createQueryBuilder('u')
            ->where("u.slug LIKE :search")
            ->setParameter("search", "%".$search."%")
            ->orderBy("u.slug", "ASC")
            ->getQuery();
        return $query->getResult();
    }
}
