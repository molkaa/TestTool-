<?php

namespace TS\AdminBundle\Entity;

use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\ORM\EntityRepository;

/**
 * TestsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TestsRepository extends EntityRepository {

    public function getAllTests($nombreParPages, $pages) {
        if ($pages < 1) {
            throw new \InvalidArgumentException('L\'argument $pages ne peut être inférieur à 1 (valeur : "' . $pages . '").');
        }
        $query = $this->createQueryBuilder('t')
                ->getQuery();
        $query->setFirstResult(($pages - 1) * $nombreParPages)
                ->setMaxResults($nombreParPages);
        return new Paginator($query);
    }
    
    
    public function getAllQuestions($nombreParPages, $pages) {
        if ($pages < 1) {
            throw new \InvalidArgumentException('L\'argument $pages ne peut être inférieur à 1 (valeur : "' . $pages . '").');
        }
     $query = $this->createQueryBuilder('t')
             ->join('t.questions', 'q')
             ->getQuery();
    $query->setFirstResult(($pages - 1) * $nombreParPages)
                ->setMaxResults($nombreParPages);
        return new Paginator($query);
    }
        
        
    public function getSpecificTests($nombreParPage, $page, $type) {
        if ($page < 1) {
            throw new \InvalidArgumentException('L\'argument $page ne peut être inférieur à 1 (valeur : "' . $page . '").');
        }
        $query = $this->createQueryBuilder('t');
        if (!empty($type)) {
            $query->where('t.type= :type')
                    ->setParameter('type', $type);
        } else {
            $this->getAllTests($nombreParPage, 1);
        }
        $query->setFirstResult(($page - 1) * $nombreParPage)
                ->setMaxResults($nombreParPage);
        return new Paginator($query);
    }

    public function getTests() {
        $query = $this->createQueryBuilder('t')
                ->where('t.Status = :status')
                ->setParameter('status', 'enable')
                ->orderBy('t.name', 'asc')
                ->getQuery();
        return $query->getResult();
    }

    public function getRandomTests($name) {
        $query = $this->createQueryBuilder('t')
                ->where('t.name= :name')
                ->setParameter('name', $name)
                ->getQuery()
                ->getResult();
        shuffle($query);
        return $query;
    }
    
   public function getLevelQuestions($name, $level, $nbr)
    {
         $query = $this->createQueryBuilder('t')
                ->where('t.name= :name')
                ->setParameter('name', $name) 
                ->join('t.questions', 'q')
                
                ->andWhere('q.questionLevel=:level')
                ->setParameter('level', $level)
                ->addSelect('q')
                ->getQuery();
                
        $query->setMaxResults($nbr);
      return $query->getResult();
    }
}