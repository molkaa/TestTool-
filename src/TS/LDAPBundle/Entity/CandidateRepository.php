<?php

namespace TS\LDAPBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * CandidateRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CandidateRepository extends EntityRepository {

    public function getCandidates($nombreParPages, $pages) {

        if ($pages < 1) {
            throw new \InvalidArgumentException('L\'argument $pages ne peut être inférieur à 1 (valeur : "' . $pages . '").');
        }
        $query = $this->createQueryBuilder('c')
                ->getQuery();
        $query->setFirstResult(($pages - 1) * $nombreParPages)
                ->setMaxResults($nombreParPages);
        return new Paginator($query);
    }
     public function getPassedTests($nombreParPages, $pages) {
         if ($pages < 1) {
            throw new \InvalidArgumentException('L\'argument $pages ne peut être inférieur à 1 (valeur : "' . $pages . '").');
        }
        $state = "yes";
        $query = $this->createQueryBuilder('cct')
                ->join('cct.CandidatTests', 'cat', 'WITH', 'cat.state= :state')
                ->setParameter('state', $state)->getQuery();
        $query->setFirstResult(($pages - 1) * $nombreParPages)
                ->setMaxResults($nombreParPages);
        return new Paginator($query);
    }
    
    
    public function getAllPassedTests() {
        
        $state = "yes";
        $query = $this->createQueryBuilder('cct')
                ->join('cct.CandidatTests', 'cat', 'WITH', 'cat.state= :state')
                ->setParameter('state', $state)->getQuery()->getResult();
        
        return $query;
    }
    
    
    
    
    public function FindSpecificStatusByTeam( $fName,$icn,$LastName,$email,$teamName)
    {
         $query = $this->createQueryBuilder('c');

        if (!empty($icn)) {
            $query->where('c.iCN = :icn')
                    ->setParameter('icn', $icn);
        } else {
            $query->where('c.iCN >= :icn')
                    ->setParameter('icn', '0');
        }

        if (!empty($fName)) {
            $query->andWhere('c.firstName = :firstName')
                    ->setParameter('firstName', $fName);
        }
        if (!empty($LastName)) {
            $query->andWhere('c.lastName = :lastName')
                    ->setParameter('lastName', $LastName);
        }
        if (!empty($email)) {
            $query->andWhere('c.email = :email')
                    ->setParameter('email', $email);
        }

        $query->join('c.status', 's', 'WITH', 's.team = :team')
                ->setParameter('team', $teamName);
        return
                        $query->getQuery()
                        ->getResult();
    }

    public function getSpecificCandidates($nombreParPage, $page,$mail) {
        // ,
        if ($page < 1) {
            throw new \InvalidArgumentException('L\'argument $page ne peut être inférieur à 1 (valeur : "' . $page . '").');
        }

        $query = $this->createQueryBuilder('c');

       
            $query->where('c.username = :username')
                    ->setParameter('username', $mail)
                  ->andWhere('c.state = :state')
                    ->setParameter('state', 'enable');
            
        $query->getQuery()->getResult();

        $query->setFirstResult(($page - 1) * $nombreParPage)
                ->setMaxResults($nombreParPage);
        return new Paginator($query);
    }
    
     public function getSpecificCandidate($nombreParPage, $page,$username,$state) {
        // ,
        if ($page < 1) {
            throw new \InvalidArgumentException('L\'argument $page ne peut être inférieur à 1 (valeur : "' . $page . '").');
        }

        $query = $this->createQueryBuilder('c')->orderBy('c.state','desc');

         if (!empty($username)) {
            $query->where('c.username = :username')
                    ->setParameter('username', $username);
        } else {
            $query->where('c.id >= :id')
                    ->setParameter('id', '0');
        }
         if (!empty($state)) {
            $query->andWhere('c.state = :state')
                    ->setParameter('state', $state);
        }
        
          
           
            
        $query->getQuery()->getResult();

        $query->setFirstResult(($page - 1) * $nombreParPage)
                ->setMaxResults($nombreParPage);
        return new Paginator($query);
    }
    
     public function getSpecificCandidats($nombreParPage, $page) {
        // ,
        if ($page < 1) {
            throw new \InvalidArgumentException('L\'argument $page ne peut être inférieur à 1 (valeur : "' . $page . '").');
        }

        $query = $this->createQueryBuilder('c')->orderBy('c.state','desc');

       
           
            
        $query->getQuery()->getResult();

        $query->setFirstResult(($page - 1) * $nombreParPage)
                ->setMaxResults($nombreParPage);
        return new Paginator($query);
    }
     public function  getSpecificPassedTests($nombreParPage, $page, $username,$testName, $from, $to, $remark){
          if(!empty($to))
                {
        $toDate = clone $to;
        $toDate->modify('+1 day');
                }
         if ($page < 1) {
            throw new \InvalidArgumentException('L\'argument $page ne peut être inférieur à 1 (valeur : "' . $page . '").');
        }
        $state = "yes";
        $query = $this->createQueryBuilder('cct');
       
        
        if (!empty($username)) {
            $query->where('cct.username = :username')
                    ->setParameter('username', $username);
        } else {
            $query->where('cct.username != :username')
                    ->setParameter('username', '');
        }

      
      
        
        $query->join('cct.CandidatTests', 'cat', 'WITH', 'cat.state= :state')
                ->setParameter('state', $state);
        
          if (!empty($testName)) {
            $query->andWhere('cat.name = :name')
                    ->setParameter('name', $testName);
        }
        
         if (!empty($from)) {
            $query->andWhere('cat.dateSubmit >= :date')
                    ->setParameter('date',$from);
        }
        
        
         if (!empty($to)) {
            $query->andWhere('cat.dateSubmit < :date2')
                    ->setParameter('date2',$toDate);
        }
        
         if (!empty($remark)) {
            $query->andWhere('cat.note = :note')->andWhere('cat.note != :note2')
                    ->setParameter('note',$remark)->setParameter('note2','NULL');
        }
        
        
        
        $query->getQuery()->getResult();
        $query->setFirstResult(($page - 1) * $nombreParPage)
                ->setMaxResults($nombreParPage);
        return new Paginator($query);
           
         
         
         
     }

    public function getOtherCandidates(\Doctrine\ORM\QueryBuilder $query, $mail, $fName, $lName, $ref, $establishment, $candidature, $diploma, $technologies) {
        if (!empty($mail)) {
//            $query->andwhere($query->expr()->like('c.email', $mail));
            $query->andwhere('c.email= :mail')
                    ->setParameter('mail', $mail);
        }
        if (!empty($fName)) {
            $query->andwhere('c.firstName= :firstName')
                    ->setParameter('firstName', $fName);
        }
        if (!empty($lName)) {
            $query->andwhere('c.lastName= :lastName')
                    ->setParameter('lastName', $lName);
        }
        if (!empty($candidature)) {
            $query->andwhere('c.candidature= :candidature')
                    ->setParameter('candidature', $candidature);
        }
        if (!empty($ref)) {
            $query->join('c.offersAplications', 'oa', 'WITH', 'oa.reference= :reference')
                    ->setParameter('reference', $ref);
        }
        if (!empty($establishment)) {
            $query->join('c.academicDetails', 'a', 'WITH', 'a.establishment= :establishment')
                    ->setParameter('establishment', $establishment);
        }
        if (!empty($diploma)) {
            $query->join('c.academicDetails', 'b', 'WITH', 'b.diploma= :diploma')
                    ->setParameter('diploma', $diploma);
        }
        if (!empty($technologies)) {
            $query->join('c.technologies', 't', 'WITH', 't.name= :technologies')
                    ->setParameter('technologies', $technologies);
            //*****************************************************************************
//            $resultats = $this->getCandidateId($query);
//            foreach ($resultats as $key) {
//                echo($key);
//            }
//            $tech = 'JAVA';
//            $query = $this->_em->createQuery('SELECT c FROM TS:CandidatBundle:Candidate c WHERE :tech IN (SELECT  t.name
//FROM TS:CandidatBundle:technologies t join TS:CandidatBundle:Candidate ca WHERE c.id =  ca.id ))');
//            $query->setParameter('tech', $tech);
//                    ->andWhere('t.name IN (:tech)')
//                    ->setParameter('tech', $tech);
//            $resultats = $query->getQuery()->getResult();
//            $resultats = 'JAVA';
//            $resultats = $query->getQuery(
//            if (is_array($resultats)) {
//                echo('yesResultats ');
//            }
//            echo($resultats);
//            foreach ($resultats as $res) {
//                
//            }
//            $query->join('c.technologies', 't','WITH', '(:resultats) = (t.name)')
//                    ->setParameter('resultats', $resultats);
//            $query->where($query->expr()->in('c.nom', $nom_categories));
//            $query->andWhere('tech IN (:ids)')
//                    ->setParameter('tech', $tech)
//                    ->setParameter('ids', $resultats);
//            $query->andwhere($query->expr()->in($tech, array(1, 2, 5)));
//                    ->setParameter('technologies', $tech)
//                    ->setParameter('resultats', $resultats[0]);
        }
        return $query;
    }
        
    public function getAcademicDetails($id) {

        $query = $this->createQueryBuilder('ca')
                ->where('ca.id= :id')
                ->setParameter('id', $id)
                ->join('ca.academicDetails', 'a')
                ->addSelect('a');
        return $query->getQuery()->getResult();
    }

    public function getProfessionalExperiences($id) {

        $query = $this->createQueryBuilder('ca')
                ->where('ca.id= :id')
                ->setParameter('id', $id)
                ->join('ca.professionalExperiences', 'p')
                ->addSelect('p');
        return $query->getQuery()->getResult();
    }

    public function getTechnologies($id) {

        $query = $this->createQueryBuilder('ca')
                ->where('ca.id= :id')
                ->setParameter('id', $id)
                ->join('ca.technologies', 't')
                ->addSelect('t');
        return $query->getQuery()->getResult();
    }

    public function getLanguages($id) {

        $query = $this->createQueryBuilder('ca')
                ->where('ca.id= :id')
                ->setParameter('id', $id)
                ->join('ca.languages', 'l')
                ->addSelect('l');
        return $query->getQuery()->getResult();
    }

    public function getStatusCandidates($nombreParPages, $pages) {
        if ($pages < 1) {
            throw new \InvalidArgumentException('L\'argument $pages ne peut être inférieur à 1 (valeur : "' . $pages . '").');
        }
        $query = $this->createQueryBuilder('c')
                ->where('c.status IS NOT NULL')
                ->getQuery();
        $query->setFirstResult(($pages - 1) * $nombreParPages)
                ->setMaxResults($nombreParPages);
        return new Paginator($query);
    }

    public function getSpecificStatus($nombreParPages, $pages, $status) {
        if ($pages < 1) {
            throw new \InvalidArgumentException('L\'argument $pages ne peut être inférieur à 1 (valeur : "' . $pages . '").');
        }
        $query = $this->createQueryBuilder('c')
                ->join('c.status', 's', 'WITH', 's.status= :status')
                ->setParameter('status', $status)
                ->getQuery();
        $query->setFirstResult(($pages - 1) * $nombreParPages)
                ->setMaxResults($nombreParPages);
        return new Paginator($query);
    }
    
    public function getSpecificStatusByTeam($teamname) {
       
        $query = $this->createQueryBuilder('c')
                ->join('c.status', 's', 'WITH', 's.team= :team')
                ->setParameter('team', $teamname);
                
        return $query->getQuery()->getResult();
    }
    

   
    public function getCandidatTestWithState(){
       $query = $this->createQueryBuilder('c')
                ->join('c.CandidatTests', 'ct','WITH','ct.state= :state')
                ->setParameter('state', 'no');
        return $query->getQuery()->getArrayResult();
    }
    
    
    
    
      public function getNumberCandidateByTeam($team) {
       
        $query = $this->createQueryBuilder('c')
               
                ->join('c.status', 's')
               
                ->addSelect('s')
                 ->where('s.team  = :team')
                
                ->select('s.team')
                
                ->groupBy('s.team')
                
             /*nombre candidat by team*/
                   ->addSelect('COUNT(s) as nbr_candidatbyteam') 
              // ->groupBy('s.status')
                
                
                
                ->setParameter('team',$team);
                
                
                
              
        return $query->getQuery()->getResult();
    }
    
    
    
      public function getNumberCandidateByTeamByPosition($team) {
       
        $query = $this->createQueryBuilder('c')
               
                ->join('c.status', 's')
               
                ->addSelect('s')
                 ->where('s.team  = :team')
                
                ->select('s.team')
                
                ->groupBy('s.team')
                
             /*nombre candidat by team*/
                   ->addSelect('COUNT(s) as nbr_candidatbyteam,s.status') 
                  ->groupBy('s.status')
                
                
                
                ->setParameter('team',$team);
                
                
                
              
        return $query->getQuery()->getResult();
    }
    
    
    
    
    /*------------------------TestsTools---------------------------------------------*/
      public function getCandidats() {
       $query = $this->createQueryBuilder('c')->where('c.state=:state')
               ->setParameter('state', 'enable')
                ->getQuery();
        return $query->getResult();
    }
    
    public function getByStateCandidats($state) {
       $query = $this->createQueryBuilder('c')->where('c.state=:state')
               ->setParameter('state', $state)
                     ->getQuery();
        return $query->getResult();
    }
    
    

}
