<?php

namespace Nerdery\GroupsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RoleHistory
 *
 * @ORM\Table(name="role_history")
 * @ORM\Entity(repositoryClass="Nerdery\GroupsBundle\Repository\RoleHistoryRepository")
 */
class RoleHistory
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
     * @var \DateTime
     *
     * @ORM\Column(name="effective", type="datetime", nullable=false)
     */
    private $effective;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated", type="datetime", nullable=false)
     */
    private $updated;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

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
     * @var \Roles
     *
     * @ORM\ManyToOne(targetEntity="Roles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="role_id", referencedColumnName="id")
     * })
     */
    private $role;



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
     * Set effective
     *
     * @param \DateTime $effective
     * @return RoleHistory
     */
    public function setEffective($effective)
    {
        $this->effective = $effective;
    
        return $this;
    }

    /**
     * Get effective
     *
     * @return \DateTime 
     */
    public function getEffective()
    {
        return $this->effective;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return RoleHistory
     */
    public function setCreated($created)
    {
        $this->created = $created;
    
        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return RoleHistory
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    
        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime 
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set user
     *
     * @param \Nerdery\GroupsBundle\Entity\Users $user
     * @return RoleHistory
     */
    public function setUser(\Nerdery\GroupsBundle\Entity\Users $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \Nerdery\GroupsBundle\Entity\Users 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set club
     *
     * @param \Nerdery\GroupsBundle\Entity\Clubs $club
     * @return RoleHistory
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

    /**
     * Set role
     *
     * @param \Nerdery\GroupsBundle\Entity\Roles $role
     * @return RoleHistory
     */
    public function setRole(\Nerdery\GroupsBundle\Entity\Roles $role = null)
    {
        $this->role = $role;
    
        return $this;
    }

    /**
     * Get role
     *
     * @return \Nerdery\GroupsBundle\Entity\Roles 
     */
    public function getRole()
    {
        return $this->role;
    }
}