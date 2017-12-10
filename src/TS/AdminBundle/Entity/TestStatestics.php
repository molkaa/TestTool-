<?php

namespace TS\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TestStatestics
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class TestStatestics
{
    
   
    
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var number
     *
     * @ORM\Column(name="numberQuestions", type="integer")
     */
    private $numberQuestions;

    /**
     * @var number
     *
     * @ORM\Column(name="percenteasy", type="integer")
     */
    private $percenteasy;

    /**
     * @var number
     *
     * @ORM\Column(name="percentMedium", type="integer")
     */
    private $percentMedium;

    /**
     * @var number
     *
     * @ORM\Column(name="percentHard", type="integer")
     */
    private $percentHard;
    
     /**
     * @var number
     *
     * @ORM\Column(name="note", type="integer")
     */
    private $note;
    
    /**
     * @var number
     *
     * @ORM\Column(name="eliminatoryNote", type="integer")
     */
    private $eliminatoryNote;

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
     * Set numberQuestions
     *
     * @param integer $numberQuestions
     * @return TestStatestics
     */
    public function setNumberQuestions($numberQuestions)
    {
        $this->numberQuestions = $numberQuestions;

        return $this;
    }

    /**
     * Get numberQuestions
     *
     * @return integer 
     */
    public function getNumberQuestions()
    {
        return $this->numberQuestions;
    }

    /**
     * Set percenteasy
     *
     * @param integer $percenteasy
     * @return TestStatestics
     */
    public function setPercenteasy($percenteasy)
    {
        $this->percenteasy = $percenteasy;

        return $this;
    }

    /**
     * Get percenteasy
     *
     * @return integer 
     */
    public function getPercenteasy()
    {
        return $this->percenteasy;
    }

    /**
     * Set percentMedium
     *
     * @param integer $percentMedium
     * @return TestStatestics
     */
    public function setPercentMedium($percentMedium)
    {
        $this->percentMedium = $percentMedium;

        return $this;
    }

    /**
     * Get percentMedium
     *
     * @return integer 
     */
    public function getPercentMedium()
    {
        return $this->percentMedium;
    }

    /**
     * Set percentHard
     *
     * @param integer $percentHard
     * @return TestStatestics
     */
    public function setPercentHard($percentHard)
    {
        $this->percentHard = $percentHard;

        return $this;
    }

    /**
     * Get percentHard
     *
     * @return integer 
     */
    public function getPercentHard()
    {
        return $this->percentHard;
    }

    /**
     * Set note
     *
     * @param integer $note
     * @return TestStatestics
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return integer 
     */
    public function getNote()
    {
        return $this->note;
    }

    

    /**
     * Set eliminatoryNote
     *
     * @param integer $eliminatoryNote
     * @return TestStatestics
     */
    public function setEliminatoryNote($eliminatoryNote)
    {
        $this->eliminatoryNote = $eliminatoryNote;

        return $this;
    }

    /**
     * Get eliminatoryNote
     *
     * @return integer 
     */
    public function getEliminatoryNote()
    {
        return $this->eliminatoryNote;
    }
}
