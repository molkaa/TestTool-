<?php

namespace TS\AdminBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * QuestionsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class QuestionsRepository extends EntityRepository {

    public function getAllQuestions($nombreParPages, $pages) {
        if ($pages < 1) {
            throw new \InvalidArgumentException('L\'argument $pages ne peut être inférieur à 1 (valeur : "' . $pages . '").');
        }
        $query = $this->createQueryBuilder('q')
                ->getQuery();
        $query->setFirstResult(($pages - 1) * $nombreParPages)
                ->setMaxResults($nombreParPages);
        return new Paginator($query);
    }

    public function getSpecificQuestions($nombreParPage, $page, $key, $type) {
        if ($page < 1) {
            throw new \InvalidArgumentException('L\'argument $page ne peut être inférieur à 1 (valeur : "' . $page . '").');
        }
        $query = $this->createQueryBuilder('q');
        if (!empty($key)) {
            $query->where('q.introduction LIKE :key')
                    ->orWhere('q.text LIKE :key')
                    ->setParameter('key', '%' . $key . '%');
            if (!empty($type)) {
                $query->andwhere('q.tests= :type')
                        ->setParameter('type', $type);
            }
        } else {
            if (!empty($type)) {
                $query->andwhere('q.tests= :type')
                        ->setParameter('type', $type);
            } else {
                $this->getAllQuestions($nombreParPage, 1);
            }
        }
        $query->setFirstResult(($page - 1) * $nombreParPage)
                ->setMaxResults($nombreParPage);
        return new Paginator($query);
    }

    public function getQuestions() {
        $query = $this->createQueryBuilder('q')
                ->getQuery();
        return $query->getResult();
    }

    public function getIdQuestions($ids) {
        $query = $this->createQueryBuilder('q')
                ->where("q.id IN(:ids)")
                ->setParameter('ids', array_values($ids))
                ->getQuery();
        return $query->getResult();
    }
    
    
     public function getLevelQuestions($id, $level,$nbr)
    {
//         $query = $this->getEntityManager()
//        ->createQuery('
//             SELECT RAND() as HIDDEN rand,q FROM TSAdminBundle:Questions q
//             JOIN q.test t
//              WHERE q.questionLevel = :level
//              
//          AND    t.id = :id  ORDER BY rand'
//        )->setMaxResults($nbr)->setParameters(array('id'=>$id,'level'=>$level))->getResult();
//         var_dump($query);
//        die();
//         return $query;
         
         
         $ids = $this->createQueryBuilder('q')
               // ->Select('q.id')
                ->where('q.questionLevel=:level')
                ->setParameter('level', $level)
             
                ->join('q.test','t')
                ->andWhere('t.id=:id')
                ->setParameter('id', $id)
                ->getQuery()
                 
            //    ->expr( shuffle($this))
                ->setMaxResults($nbr)
                ->getResult();
//               
        
//               
//                for ($i=0;$i<$nbr;$i++)
//                {
//           $query[$i]=   $this->createQueryBuilder('q')
//                   ->where('q.id =:ids')
//                   ->setParameter('ids', $ids[$i]['id'])
//                  // ->setMaxResults($nbr)
//                   
//                   ->getQuery()->getSingleResult();
//                }
//       $query1 = array_slice($query, 0, $nbr);
                
               
      return $ids;
    }
    
      public function getQuestionsByTest($nombreParPages, $pages,$idTest) {
          if ($pages < 1) {
            throw new \InvalidArgumentException('L\'argument $pages ne peut être inférieur à 1 (valeur : "' . $pages . '").');
        }
        $query = $this->createQueryBuilder('q')
                 ->join('q.test', 'qt', 'WITH', 'qt.id = :id')
                ->setParameter('id',$idTest)
                ->getQuery();
         $query->setFirstResult(($pages - 1) * $nombreParPages)
                ->setMaxResults($nombreParPages);
        return new Paginator($query);
    }
    
    public function getStringIdQuestions($ids) {
        $query = $this->createQueryBuilder('q')
                ->where("q.id IN(:ids)")
                ->setParameter('ids', $ids)
                ->getQuery();
        return $query->getResult();
    }
}
