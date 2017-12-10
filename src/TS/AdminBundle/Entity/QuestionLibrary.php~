<?php

namespace TS\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestionLibrary
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="TS\AdminBundle\Entity\QuestionLibraryRepository")
 */
class QuestionLibrary
{
    /**
     * @ORM\ManyToMany(targetEntity="TS\AdminBundle\Entity\ResponseLibrary", cascade={"persist"})
     */
    private $responses;

    /**
     * @ORM\ManyToOne(targetEntity="TS\AdminBundle\Entity\QuestionPicture", cascade={"persist"})
     */
    private $questionPicture;
    
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
     * @ORM\Column(name="questionLevel", type="string", length=255)
     */
    private $questionLevel;
    /**
     * Constructor
     */
    public function __construct() {

        $this->responses = new \Doctrine\Common\Collections\ArrayCollection();
    }

    

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set tests
     *
     * @param string $tests
     * @return QuestionLibrary
     */
    public function setTests($tests)
    {
        $this->tests = $tests;

        return $this;
    }

    /**
     * Get tests
     *
     * @return string 
     */
    public function getTests()
    {
        return $this->tests;
    }

    /**
     * Set introduction
     *
     * @param string $introduction
     * @return QuestionLibrary
     */
    public function setIntroduction($introduction)
    {
        $this->introduction = $introduction;

        return $this;
    }

    /**
     * Get introduction
     *
     * @return string 
     */
    public function getIntroduction()
    {
        return $this->introduction;
    }

    /**
     * Set text
     *
     * @param string $text
     * @return QuestionLibrary
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return QuestionLibrary
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set automatic
     *
     * @param string $automatic
     * @return QuestionLibrary
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
     * Set note
     *
     * @param float $note
     * @return QuestionLibrary
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
     * Add responses
     *
     * @param \TS\AdminBundle\Entity\ResponseLibrary $responses
     * @return QuestionLibrary
     */
    public function addResponse(\TS\AdminBundle\Entity\ResponseLibrary $responses)
    {
        $this->responses[] = $responses;

        return $this;
    }

    /**
     * Remove responses
     *
     * @param \TS\AdminBundle\Entity\ResponseLibrary $responses
     */
    public function removeResponse(\TS\AdminBundle\Entity\ResponseLibrary $responses)
    {
        $this->responses->removeElement($responses);
    }

    /**
     * Get responses
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getResponses()
    {
        return $this->responses;
    }

    /**
     * Set questionPicture
     *
     * @param \TS\AdminBundle\Entity\QuestionPicture $questionPicture
     * @return QuestionLibrary
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


   

    /**
     * Set questionLevel
     *
     * @param string $questionLevel
     * @return QuestionLibrary
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
}
