<?php

namespace TS\AdminBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * EditTestsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EditTestsRepository extends EntityRepository
{
    public function getTests() {
        $query = $this->createQueryBuilder('t')
                 ->orderBy('t.name', 'asc')
                ->getQuery();
        return $query->getResult();
    }
}