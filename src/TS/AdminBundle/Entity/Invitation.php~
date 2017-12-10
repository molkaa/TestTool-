<?php

namespace TS\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invitation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="TS\AdminBundle\Entity\InvitationRepository")
 */
class Invitation {

    /**
     * @ORM\ManyToMany(targetEntity="TS\LDAPBundle\Entity\Candidate", cascade={"persist"},mappedBy="Invitation")
     */
    private $candidates;

    /**
     * @ORM\ManyToMany(targetEntity="TS\AdminBundle\Entity\Evaluator", cascade={"persist"})
     */
    private $evaluators;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="datetime")
     */
    private $dateCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="object", type="string", length=255)
     */
    private $object;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=255)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="hour", type="string", length=255)
     */
    private $hour;

    /**
     * @var array
     *
     * @ORM\Column(name="tests", type="array")
     */
    private $tests;

    /**
     * Constructor
     */
    public function __construct() {
        $this->dateCreation = new \DateTime();
        $this->candidates = new \Doctrine\Common\Collections\ArrayCollection();
        $this->evaluators = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set object
     *
     * @param string $object
     * @return Invitation
     */
    public function setObject($object) {
        $this->object = $object;

        return $this;
    }

    /**
     * Get object
     *
     * @return string 
     */
    public function getObject() {
        return $this->object;
    }

   

    /**
     * Add evaluators
     *
     * @param \TS\AdminBundle\Entity\Evaluator $evaluators
     * @return Invitation
     */
    public function addEvaluator(\TS\AdminBundle\Entity\Evaluator $evaluators) {
        $this->evaluators[] = $evaluators;

        return $this;
    }

    /**
     * Remove evaluators
     *
     * @param \TS\AdminBundle\Entity\Evaluator $evaluators
     */
    public function removeEvaluator(\TS\AdminBundle\Entity\Evaluator $evaluators) {
        $this->evaluators->removeElement($evaluators);
    }

    /**
     * Get evaluators
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEvaluators() {
        return $this->evaluators;
    }

    /**
     * Set tests
     *
     * @param array $tests
     * @return Invitation
     */
    public function setTests($tests) {
        $this->tests = $tests;

        return $this;
    }

    /**
     * Get tests
     *
     * @return array 
     */
    public function getTests() {
        return $this->tests;
    }

    /**
     * Set hour
     *
     * @param string $hour
     * @return Invitation
     */
    public function setHour($hour) {
        $this->hour = $hour;

        return $this;
    }

    /**
     * Get hour
     *
     * @return string 
     */
    public function getHour() {
        return $this->hour;
    }

    /**
     * Set date
     *
     * @param string $date
     * @return Invitation
     */
    public function setDate($date) {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string 
     */
    public function getDate() {
        return $this->date;
    }


    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return Invitation
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime 
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Add candidates
     *
     * @param \TS\LDAPBundle\Entity\Candidate $candidates
     * @return Invitation
     */
    public function addCandidate(\TS\LDAPBundle\Entity\Candidate $candidates)
    {
        $this->candidates[] = $candidates;

        return $this;
    }

    /**
     * Remove candidates
     *
     * @param \TS\LDAPBundle\Entity\Candidate $candidates
     */
    public function removeCandidate(\TS\LDAPBundle\Entity\Candidate $candidates)
    {
        $this->candidates->removeElement($candidates);
    }

    /**
     * Get candidates
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCandidates()
    {
        return $this->candidates;
    }
}
