<?php

namespace TS\LDAPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Candidate
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="TS\LDAPBundle\Entity\CandidateRepository")
 * @ORM\HasLifecycleCallbacks()
 * @UniqueEntity("username",message="This username is already in use.")
 */
class Candidate {

    /**
     * @ORM\ManyToMany(targetEntity="TS\CandidatBundle\Entity\CandidatTests", cascade={"persist", "remove"})
     */
    private $CandidatTests;
    
    /**
     * @ORM\ManyToMany(targetEntity="TS\AdminBundle\Entity\Invitation", cascade={"persist", "remove"}, inversedBy="candidates")
     */
    private $Invitation;
    
    /**
     * @ORM\OneToOne(targetEntity="TS\AdminBundle\Entity\Status", cascade={"persist", "remove"})
     */
    private $status;
    
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
     * @ORM\Column(name="username", type="string", length=255 ,unique=true)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;
    
    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=255)
     */
    private $role;
    
    
     /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=255)
     */
    private $state;
    
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->CandidatTests = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set username
     *
     * @param string $username
     * @return Candidate
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Candidate
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Add CandidatTests
     *
     * @param \TS\CandidatBundle\Entity\CandidatTests $candidatTests
     * @return Candidate
     */
    public function addCandidatTest(\TS\CandidatBundle\Entity\CandidatTests $candidatTests)
    {
        $this->CandidatTests[] = $candidatTests;

        return $this;
    }

    /**
     * Remove CandidatTests
     *
     * @param \TS\CandidatBundle\Entity\CandidatTests $candidatTests
     */
    public function removeCandidatTest(\TS\CandidatBundle\Entity\CandidatTests $candidatTests)
    {
        $this->CandidatTests->removeElement($candidatTests);
    }

    /**
     * Get CandidatTests
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCandidatTests()
    {
        return $this->CandidatTests;
    }

    /**
     * Set role
     *
     * @param string $role
     * @return Candidate
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string 
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set state
     *
     * @param string $state
     * @return Candidate
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set status
     *
     * @param \TS\AdminBundle\Entity\Status $status
     * @return Candidate
     */
    public function setStatus(\TS\AdminBundle\Entity\Status $status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return \TS\AdminBundle\Entity\Status 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Add Invitation
     *
     * @param \TS\AdminBundle\Entity\Invitation $invitation
     * @return Candidate
     */
    public function addInvitation(\TS\AdminBundle\Entity\Invitation $invitation)
    {
        $this->Invitation[] = $invitation;

        return $this;
    }

    /**
     * Remove Invitation
     *
     * @param \TS\AdminBundle\Entity\Invitation $invitation
     */
    public function removeInvitation(\TS\AdminBundle\Entity\Invitation $invitation)
    {
        $this->Invitation->removeElement($invitation);
    }

    /**
     * Get Invitation
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getInvitation()
    {
        return $this->Invitation;
    }
}
