<?php

namespace TS\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResponseLibrary
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="TS\AdminBundle\Entity\ResponseLibraryRepository")
 */
class ResponseLibrary
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
     * @var string
     *
     * @ORM\Column(name="response", type="string", length=255)
     */
    private $response;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=255, nullable=true)
     */
    private $value;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="float")
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
     * Set response
     *
     * @param string $response
     * @return ResponseLibrary
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
     * Set value
     *
     * @param string $value
     * @return ResponseLibrary
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set note
     *
     * @param string $note
     * @return ResponseLibrary
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
     * @return ResponseLibrary
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
