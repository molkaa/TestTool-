<?php

namespace TS\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tests
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="TS\AdminBundle\Entity\TestsRepository")
 */
class Tests {
    
    
     
    /**
     * @ORM\OneToOne(targetEntity="TS\AdminBundle\Entity\TestStatestics", cascade={"persist"})
     */
    private $TestStatestics;

    /**
     * @ORM\ManyToMany(targetEntity="TS\AdminBundle\Entity\Questions", cascade={"persist"}, inversedBy="test")
     */
    private $questions;
    
     /**
     * @ORM\ManyToMany(targetEntity="TS\AdminBundle\Entity\ExcelQuestion", cascade={"persist"}, inversedBy="test")
     */
    private $excelQuestion;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var decimal
     *
     * @ORM\Column(name="note", type="decimal")
     */
    private $note;

    /**
     * @var decimal
     *
     * @ORM\Column(name="eliminatoryNote", type="decimal")
     */
    private $eliminatoryNote;

    /**
     * @var decimal
     *
     * @ORM\Column(name="automatic", type="decimal")
     */
    private $automatic;
    
    
    /**
     * @var decimal
     *
     * @ORM\Column(name="time", type="decimal")
     */
    private $time;
    
     /**
     * @var string
     *
     * @ORM\Column(name="calculationMethod", type="string", length=255)
     */
    private $calculationMethod;
    
     /**
     * @var decimal
     *
     * @ORM\Column(name="NumberQuestions", type="decimal",nullable=true)
     */
    private $NumberQuestions;
    
    /**
     * @var decimal
     *
     * @ORM\Column(name="PercentageEasy", type="decimal",nullable=true)
     */
    private $PercentageEasy;
    
    /**
     * @var decimal
     *
     * @ORM\Column(name="PercentageMedium", type="decimal",nullable=true)
     */
    private $PercentageMedium;
    
     /**
     * @var decimal
     *
     * @ORM\Column(name="PercentageHard", type="decimal",nullable=true)
     */
    private $PercentageHard;
    
    
    
     /**
     * @var string
     *
     * @ORM\Column(name="Customized", type="string", length=3,nullable=true)
     */
    private $Customized;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="Status", type="string", length=10)
     */
    private $Status = 'enable';
    
    
    
    /**
     * Constructor
     */
    public function __construct() {

        $this->questions = new \Doctrine\Common\Collections\ArrayCollection();
       
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
     * @return Tests
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
     * Set type
     *
     * @param string $type
     * @return Tests
     */
    public function setType($type) {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType() {
        return $this->type;
    }


    /**
     * Set note
     *
     * @param string $note
     * @return Tests
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set eliminatoryNote
     *
     * @param string $eliminatoryNote
     * @return Tests
     */
    public function setEliminatoryNote($eliminatoryNote)
    {
        $this->eliminatoryNote = $eliminatoryNote;

        return $this;
    }

    /**
     * Get eliminatoryNote
     *
     * @return string 
     */
    public function getEliminatoryNote()
    {
        return $this->eliminatoryNote;
    }

    /**
     * Set automatic
     *
     * @param string $automatic
     * @return Tests
     */
    public function setAutomatic($automatic)
    {
        $this->automatic = $automatic;

        return $this;
    }

    /**
     * Get automatic
     *
     * @return string 
     */
    public function getAutomatic()
    {
        return $this->automatic;
    }

    /**
     * Add questions
     *
     * @param \TS\AdminBundle\Entity\Questions $questions
     * @return Tests
     */
    public function addQuestion(\TS\AdminBundle\Entity\Questions $questions)
    {
        $this->questions[] = $questions;

        return $this;
    }
    
    /**
     * Add excelquestions
     *
     * @param \TS\AdminBundle\Entity\ExcelQuestion $excelquestions
     * @return Tests
     */
    public function addExcelQuestion(\TS\AdminBundle\Entity\ExcelQuestion $excelquestions)
    {
        $this->excelQuestions[] = $excelquestions;

        return $this;
    }

    /**
     * Remove questions
     *
     * @param \TS\AdminBundle\Entity\Questions $questions
     */
    public function removeQuestion(\TS\AdminBundle\Entity\Questions $questions)
    {
        $this->questions->removeElement($questions);
    }

    /**
     * Get questions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getQuestions()
    {
        return $this->questions;
    }

    /**
     * Set time
     *
     * @param string $time
     * @return Tests
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return string 
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set calculationMethod
     *
     * @param string $calculationMethod
     * @return Tests
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
     * Set NumberQuestions
     *
     * @param string $numberQuestions
     * @return Tests
     */
    public function setNumberQuestions($numberQuestions)
    {
        $this->NumberQuestions = $numberQuestions;

        return $this;
    }

    /**
     * Get NumberQuestions
     *
     * @return string 
     */
    public function getNumberQuestions()
    {
        return $this->NumberQuestions;
    }

    /**
     * Set PercentageEasy
     *
     * @param string $percentageEasy
     * @return Tests
     */
    public function setPercentageEasy($percentageEasy)
    {
        $this->PercentageEasy = $percentageEasy;

        return $this;
    }

    /**
     * Get PercentageEasy
     *
     * @return string 
     */
    public function getPercentageEasy()
    {
        return $this->PercentageEasy;
    }

    /**
     * Set PercentageMedium
     *
     * @param string $percentageMedium
     * @return Tests
     */
    public function setPercentageMedium($percentageMedium)
    {
        $this->PercentageMedium = $percentageMedium;

        return $this;
    }

    /**
     * Get PercentageMedium
     *
     * @return string 
     */
    public function getPercentageMedium()
    {
        return $this->PercentageMedium;
    }

    /**
     * Set PercentageHard
     *
     * @param string $percentageHard
     * @return Tests
     */
    public function setPercentageHard($percentageHard)
    {
        $this->PercentageHard = $percentageHard;

        return $this;
    }

    /**
     * Get PercentageHard
     *
     * @return string 
     */
    public function getPercentageHard()
    {
        return $this->PercentageHard;
    }

    /**
     * Set Customized
     *
     * @param string $customized
     * @return Tests
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
     * Set TestStatestics
     *
     * @param \TS\AdminBundle\Entity\TestStatestics $testStatestics
     * @return Tests
     */
    public function setTestStatestics(\TS\AdminBundle\Entity\TestStatestics $testStatestics = null)
    {
        $this->TestStatestics = $testStatestics;

        return $this;
    }

    /**
     * Get TestStatestics
     *
     * @return \TS\AdminBundle\Entity\TestStatestics 
     */
    public function getTestStatestics()
    {
        return $this->TestStatestics;
    }

    /**
     * Set Status
     *
     * @param string $status
     * @return Tests
     */
    public function setStatus($status)
    {
        $this->Status = $status;

        return $this;
    }

    /**
     * Get Status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->Status;
    }
}
