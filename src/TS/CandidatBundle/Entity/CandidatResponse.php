<?php

namespace TS\CandidatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CandidatResponse
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="TS\CandidatBundle\Entity\CandidatResponseRepository")
 */
class CandidatResponse
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
     * @var integer
     *
     * @ORM\Column(name="questionId", type="integer")
     */
    private $questionId;

    /**
     * @var float
     *
     * @ORM\Column(name="mark", type="float", nullable=true)
     */
    private $mark;

    /**
     * @var string
     *
     * @ORM\Column(name="response", type="string", length=255)
     */
    private $response;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="string", length=255, nullable=true)
     */
    private $note;

    
    /**
     * @var string
     *
     * @ORM\Column(name="CorrectAnswer", type="string", length=255, nullable=true)
     */
    private $CorrectAnswer;
    
    
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
     * Set questionId
     *
     * @param integer $questionId
     * @return CandidatResponse
     */
    public function setQuestionId($questionId)
    {
        $this->questionId = $questionId;

        return $this;
    }

    /**
     * Get questionId
     *
     * @return integer 
     */
    public function getQuestionId()
    {
        return $this->questionId;
    }

    /**
     * Set mark
     *
     * @param float $mark
     * @return CandidatResponse
     */
    public function setMark($mark)
    {
        $this->mark = $mark;

        return $this;
    }

    /**
     * Get mark
     *
     * @return float 
     */
    public function getMark()
    {
        return $this->mark;
    }

    /**
     * Set response
     *
     * @param string $response
     * @return CandidatResponse
     */
    public function setResponse($response)
    {
        $this->response = $response;

        return $this;
    }

    /**
     * Get response
     *
     * @return string 
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Set note
     *
     * @param string $note
     * @return CandidatResponse
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
     * Set CorrectAnswer
     *
     * @param string $correctAnswer
     * @return CandidatResponse
     */
    public function setCorrectAnswer($correctAnswer)
    {
        $this->CorrectAnswer = $correctAnswer;

        return $this;
    }

    /**
     * Get CorrectAnswer
     *
     * @return string 
     */
    public function getCorrectAnswer()
    {
        return $this->CorrectAnswer;
    }
}
