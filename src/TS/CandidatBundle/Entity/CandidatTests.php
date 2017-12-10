<?php

namespace TS\CandidatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CandidatTests
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="TS\CandidatBundle\Entity\CandidatTestsRepository")
 */
class CandidatTests {

    /**
     * @ORM\ManyToMany(targetEntity="TS\AdminBundle\Entity\Tests", cascade={"persist"})
     */
    private $tests;
    
    
     /**
     * @ORM\ManyToMany(targetEntity="TS\CandidatBundle\Entity\CandidatQuestionsStatistics", cascade={"persist", "remove"})
     */
    private $CandidatQuestionsStatistics;
    
    
    /**
     * @ORM\ManyToMany(targetEntity="TS\CandidatBundle\Entity\CandidatResponse", cascade={"persist", "remove"})
     */
    private $responses;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
     /**
     * @var integer
     *
     * @ORM\Column(name="testId", type="integer")
     */
    private $testId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=255)
     */
    private $state;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="string", length=255, nullable=true)
     */
    private $note;

    /**
     * @var float
     *
     * @ORM\Column(name="mark", type="float", nullable=true)
     */
    private $mark;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateSubmit", type="datetime", nullable=true)
     */
     private $dateSubmit;
     
    /**
     * @var string
     *
     * @ORM\Column(name="calculationMethod", type="string", length=255, nullable=true)
     */
    private $calculationMethod;
    
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="Customized", type="string", length=3, nullable=true)
     */
    private $Customized;
    
   

    /**
     * Constructor
     */
    public function __construct() {

        $this->date = new \DateTime();
        $this->tests = new \Doctrine\Common\Collections\ArrayCollection();
        $this->responses = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @ORM\preUpdate
     * Callback pour mettre à jour la date de test à chaque modification de l'entité
     */
    public function updateDate() {
        $this->setDate(new \Datetime());
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
     * Set name
     *
     * @param string $name
     * @return CandidatTests
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set state
     *
     * @param string $state
     * @return CandidatTests
     */
    public function setState($state) {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string 
     */
    public function getState() {
        return $this->state;
    }

    /**
     * Set note
     *
     * @param string $note
     * @return CandidatTests
     */
    public function setNote($note) {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string 
     */
    public function getNote() {
        return $this->note;
    }

    /**
     * Add tests
     *
     * @param \TS\AdminBundle\Entity\Tests $tests
     * @return CandidatTests
     */
    public function addTest(\TS\AdminBundle\Entity\Tests $tests) {
        $this->tests[] = $tests;

        return $this;
    }

    /**
     * Remove tests
     *
     * @param \TS\AdminBundle\Entity\Tests $tests
     */
    public function removeTest(\TS\AdminBundle\Entity\Tests $tests) {
        $this->tests->removeElement($tests);
    }

    /**
     * Get tests
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTests() {
        return $this->tests;
    }

    /**
     * Add responses
     *
     * @param \TS\CandidatBundle\Entity\CandidatResponse $responses
     * @return CandidatTests
     */
    public function addResponse(\TS\CandidatBundle\Entity\CandidatResponse $responses) {
        $this->responses[] = $responses;

        return $this;
    }

    /**
     * Remove responses
     *
     * @param \TS\CandidatBundle\Entity\CandidatResponse $responses
     */
    public function removeResponse(\TS\CandidatBundle\Entity\CandidatResponse $responses) {
        $this->responses->removeElement($responses);
    }

    /**
     * Get responses
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getResponses() {
        return $this->responses;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return CandidatTests
     */
    public function setDate(\Datetime $date) {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * Set mark
     *
     * @param float $mark
     * @return CandidatTests
     */
    public function setMark($mark) {
        $this->mark = $mark;

        return $this;
    }

    /**
     * Get mark
     *
     * @return float 
     */
    public function getMark() {
        return $this->mark;
    }


    /**
     * Set dateSubmit
     *
     * @param \DateTime $dateSubmit
     * @return CandidatTests
     */
    public function setDateSubmit($dateSubmit)
    {
        $this->dateSubmit = $dateSubmit;

        return $this;
    }

    /**
     * Get dateSubmit
     *
     * @return \DateTime 
     */
    public function getDateSubmit()
    {
        return $this->dateSubmit;
    }

    /**
     * Set calculationMethod
     *
     * @param string $calculationMethod
     * @return CandidatTests
     */
    public function setCalculationMethod($calculationMethod)
    {
        $this->calculationMethod = $calculationMethod;

        return $this;
    }

    /**
     * Get calculationMethod
     *
     * @return string 
     */
    public function getCalculationMethod()
    {
        return $this->calculationMethod;
    }

    /**
     * Add CandidatQuestionsStatistics
     *
     * @param \TS\CandidatBundle\Entity\CandidatQuestionsStatistics $candidatQuestionsStatistics
     * @return CandidatTests
     */
    public function addCandidatQuestionsStatistic(\TS\CandidatBundle\Entity\CandidatQuestionsStatistics $candidatQuestionsStatistics)
    {
        $this->CandidatQuestionsStatistics[] = $candidatQuestionsStatistics;

        return $this;
    }

    /**
     * Remove CandidatQuestionsStatistics
     *
     * @param \TS\CandidatBundle\Entity\CandidatQuestionsStatistics $candidatQuestionsStatistics
     */
    public function removeCandidatQuestionsStatistic(\TS\CandidatBundle\Entity\CandidatQuestionsStatistics $candidatQuestionsStatistics)
    {
        $this->CandidatQuestionsStatistics->removeElement($candidatQuestionsStatistics);
    }

    /**
     * Get CandidatQuestionsStatistics
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCandidatQuestionsStatistics()
    {
        return $this->CandidatQuestionsStatistics;
    }

    /**
     * Set Customized
     *
     * @param string $customized
     * @return CandidatTests
     */
    public function setCustomized($customized)
    {
        $this->Customized = $customized;

        return $this;
    }

    /**
     * Get Customized
     *
     * @return string 
     */
    public function getCustomized()
    {
        return $this->Customized;
    }


    /**
     * Set testId
     *
     * @param integer $testId
     * @return CandidatTests
     */
    public function setTestId($testId)
    {
        $this->testId = $testId;

        return $this;
    }

    /**
     * Get testId
     *
     * @return integer 
     */
    public function getTestId()
    {
        return $this->testId;
    }
}
