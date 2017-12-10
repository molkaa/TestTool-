<?php

namespace TS\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Questions
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="TS\AdminBundle\Entity\QuestionsRepository")
 */
class Questions {

    /**
     * @ORM\ManyToMany(targetEntity="TS\AdminBundle\Entity\Response", cascade={"persist"})
     */
    private $responses;

    /**
     * @ORM\ManyToOne(targetEntity="TS\AdminBundle\Entity\QuestionPicture", cascade={"persist"})
     */
    private $questionPicture;
    
    
    /**
     * @ORM\ManyToMany(targetEntity="TS\AdminBundle\Entity\Tests", cascade={"persist"},mappedBy="questions")
     */
    private $test;
    
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
     * @ORM\Column(name="tests", type="string", length=255)
     */
    private $tests;

    /**
     * @var string
     *
     * @ORM\Column(name="introduction", type="text", nullable=true)
     */
    private $introduction;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="text")
     */
    private $text;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="automatic", type="string", length=255)
     */
    private $automatic;

    /**
     * @var float
     *
     * @ORM\Column(name="note", type="float")
     */
    private $note;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="questionlevel", type="string", length=255)
     */
    private $questionLevel;
    
    /**
     * Constructor
     */
    public function __construct() {

        $this->responses = new \Doctrine\Common\Collections\ArrayCollection();
        $this->test = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set introduction
     *
     * @param string $introduction
     * @return Questions
     */
    public function setIntroduction($introduction) {
        $this->introduction = $introduction;

        return $this;
    }

    /**
     * Get introduction
     *
     * @return string 
     */
    public function getIntroduction() {
        return $this->introduction;
    }

    /**
     * Set text
     *
     * @param string $text
     * @return Questions
     */
    public function setText($text) {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText() {
        return $this->text;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Questions
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
     * Set automatic
     *
     * @param string $automatic
     * @return Questions
     */
    public function setAutomatic($automatic) {
        $this->automatic = $automatic;

        return $this;
    }

    /**
     * Get automatic
     *
     * @return string 
     */
    public function getAutomatic() {
        return $this->automatic;
    }

    /**
     * Add responses
     *
     * @param \TS\AdminBundle\Entity\Response $responses
     * @return Questions
     */
    public function addResponse(\TS\AdminBundle\Entity\Response $responses) {
        $this->responses[] = $responses;

        return $this;
    }

    /**
     * Remove responses
     *
     * @param \TS\AdminBundle\Entity\Response $responses
     */
    public function removeResponse(\TS\AdminBundle\Entity\Response $responses) {
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
     * Set tests
     *
     * @param string $tests
     * @return Questions
     */
    public function setTests($tests) {
        $this->tests = $tests;

        return $this;
    }

    /**
     * Get tests
     *
     * @return string 
     */
    public function getTests() {
        return $this->tests;
    }


    /**
     * Set note
     *
     * @param float $note
     * @return Questions
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return float 
     */
    public function getNote()
    {
        return $this->note;
    }

    

    /**
     * Set questionLevel
     *
     * @param string $questionLevel
     * @return Questions
     */
    public function setQuestionLevel($questionLevel)
    {
        $this->questionLevel = $questionLevel;

        return $this;
    }

    /**
     * Get questionLevel
     *
     * @return string 
     */
    public function getQuestionLevel()
    {
        return $this->questionLevel;
    }

    /**
     * Add test
     *
     * @param \TS\AdminBundle\Entity\Tests $test
     * @return Questions
     */
    public function addTest(\TS\AdminBundle\Entity\Tests $test)
    {
        $this->test[] = $test;

        return $this;
    }

    /**
     * Remove test
     *
     * @param \TS\AdminBundle\Entity\Tests $test
     */
    public function removeTest(\TS\AdminBundle\Entity\Tests $test)
    {
        $this->test->removeElement($test);
    }

    /**
     * Get test
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTest()
    {
        return $this->test;
    }

    /**
     * Set questionPicture
     *
     * @param \TS\AdminBundle\Entity\QuestionPicture $questionPicture
     * @return Questions
     */
    public function setQuestionPicture(\TS\AdminBundle\Entity\QuestionPicture $questionPicture = null)
    {
        $this->questionPicture = $questionPicture;

        return $this;
    }

    /**
     * Get questionPicture
     *
     * @return \TS\AdminBundle\Entity\QuestionPicture 
     */
    public function getQuestionPicture()
    {
        return $this->questionPicture;
    }
}
