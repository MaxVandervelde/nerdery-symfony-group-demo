<?php

namespace Nerdery\GroupsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Roles
 *
 * @ORM\Table(name="roles")
 * @ORM\Entity(repositoryClass="Nerdery\GroupsBundle\Repository\RolesRepository")
 */
class Roles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=31, nullable=false)
     */
    private $title;

    /**
     * @var integer
     *
     * @ORM\Column(name="can_edit_club", type="integer", nullable=false)
     */
    private $canEditClub;

    /**
     * @var integer
     *
     * @ORM\Column(name="can_delete_club", type="integer", nullable=false)
     */
    private $canDeleteClub;

    /**
     * @var integer
     *
     * @ORM\Column(name="can_create_event", type="integer", nullable=false)
     */
    private $canCreateEvent;

    /**
     * @var integer
     *
     * @ORM\Column(name="can_edit_event", type="integer", nullable=false)
     */
    private $canEditEvent;

    /**
     * @var integer
     *
     * @ORM\Column(name="can_delete_event", type="integer", nullable=false)
     */
    private $canDeleteEvent;

    /**
     * @var integer
     *
     * @ORM\Column(name="can_delete_user", type="integer", nullable=false)
     */
    private $canDeleteUser;

    /**
     * @var integer
     *
     * @ORM\Column(name="can_invite_user", type="integer", nullable=false)
     */
    private $canInviteUser;

    /**
     * @var \Clubs
     *
     * @ORM\ManyToOne(targetEntity="Clubs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="club_id", referencedColumnName="id")
     * })
     */
    private $club;



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
     * Set title
     *
     * @param string $title
     * @return Roles
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set canEditClub
     *
     * @param integer $canEditClub
     * @return Roles
     */
    public function setCanEditClub($canEditClub)
    {
        $this->canEditClub = $canEditClub;
    
        return $this;
    }

    /**
     * Get canEditClub
     *
     * @return integer 
     */
    public function getCanEditClub()
    {
        return $this->canEditClub;
    }

    /**
     * Set canDeleteClub
     *
     * @param integer $canDeleteClub
     * @return Roles
     */
    public function setCanDeleteClub($canDeleteClub)
    {
        $this->canDeleteClub = $canDeleteClub;
    
        return $this;
    }

    /**
     * Get canDeleteClub
     *
     * @return integer 
     */
    public function getCanDeleteClub()
    {
        return $this->canDeleteClub;
    }

    /**
     * Set canCreateEvent
     *
     * @param integer $canCreateEvent
     * @return Roles
     */
    public function setCanCreateEvent($canCreateEvent)
    {
        $this->canCreateEvent = $canCreateEvent;
    
        return $this;
    }

    /**
     * Get canCreateEvent
     *
     * @return integer 
     */
    public function getCanCreateEvent()
    {
        return $this->canCreateEvent;
    }

    /**
     * Set canEditEvent
     *
     * @param integer $canEditEvent
     * @return Roles
     */
    public function setCanEditEvent($canEditEvent)
    {
        $this->canEditEvent = $canEditEvent;
    
        return $this;
    }

    /**
     * Get canEditEvent
     *
     * @return integer 
     */
    public function getCanEditEvent()
    {
        return $this->canEditEvent;
    }

    /**
     * Set canDeleteEvent
     *
     * @param integer $canDeleteEvent
     * @return Roles
     */
    public function setCanDeleteEvent($canDeleteEvent)
    {
        $this->canDeleteEvent = $canDeleteEvent;
    
        return $this;
    }

    /**
     * Get canDeleteEvent
     *
     * @return integer 
     */
    public function getCanDeleteEvent()
    {
        return $this->canDeleteEvent;
    }

    /**
     * Set canDeleteUser
     *
     * @param integer $canDeleteUser
     * @return Roles
     */
    public function setCanDeleteUser($canDeleteUser)
    {
        $this->canDeleteUser = $canDeleteUser;
    
        return $this;
    }

    /**
     * Get canDeleteUser
     *
     * @return integer 
     */
    public function getCanDeleteUser()
    {
        return $this->canDeleteUser;
    }

    /**
     * Set canInviteUser
     *
     * @param integer $canInviteUser
     * @return Roles
     */
    public function setCanInviteUser($canInviteUser)
    {
        $this->canInviteUser = $canInviteUser;
    
        return $this;
    }

    /**
     * Get canInviteUser
     *
     * @return integer 
     */
    public function getCanInviteUser()
    {
        return $this->canInviteUser;
    }

    /**
     * Set club
     *
     * @param \Nerdery\GroupsBundle\Entity\Clubs $club
     * @return Roles
     */
    public function setClub(\Nerdery\GroupsBundle\Entity\Clubs $club = null)
    {
        $this->club = $club;
    
        return $this;
    }

    /**
     * Get club
     *
     * @return \Nerdery\GroupsBundle\Entity\Clubs 
     */
    public function getClub()
    {
        return $this->club;
    }
}