<?php

namespace Nerdery\GroupsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Clubs
 *
 * @ORM\Table(name="clubs")
 * @ORM\Entity(repositoryClass="Nerdery\GroupsBundle\Repository\ClubsRepository")
 */
class Clubs
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
     * @ORM\Column(name="title", type="string", length=63, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="founded", type="date", nullable=false)
     */
    private $founded;

    /**
     * @var integer
     *
     * @ORM\Column(name="invite_only", type="integer", nullable=false)
     */
    private $inviteOnly;

    /**
     * @var integer
     *
     * @ORM\Column(name="public", type="integer", nullable=false)
     */
    private $public;

    /**
     * @var integer
     *
     * @ORM\Column(name="member_count_cursor", type="integer", nullable=false)
     */
    private $memberCountCursor;

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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Users", inversedBy="club")
     * @ORM\JoinTable(name="clubs_users",
     *   joinColumns={
     *     @ORM\JoinColumn(name="club_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     *   }
     * )
     */
    private $user;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->user = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set title
     *
     * @param string $title
     * @return Clubs
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
     * Set description
     *
     * @param string $description
     * @return Clubs
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set founded
     *
     * @param \DateTime $founded
     * @return Clubs
     */
    public function setFounded($founded)
    {
        $this->founded = $founded;
    
        return $this;
    }

    /**
     * Get founded
     *
     * @return \DateTime 
     */
    public function getFounded()
    {
        return $this->founded;
    }

    /**
     * Set inviteOnly
     *
     * @param integer $inviteOnly
     * @return Clubs
     */
    public function setInviteOnly($inviteOnly)
    {
        $this->inviteOnly = $inviteOnly;
    
        return $this;
    }

    /**
     * Get inviteOnly
     *
     * @return integer 
     */
    public function getInviteOnly()
    {
        return $this->inviteOnly;
    }

    /**
     * Set public
     *
     * @param integer $public
     * @return Clubs
     */
    public function setPublic($public)
    {
        $this->public = $public;
    
        return $this;
    }

    /**
     * Get public
     *
     * @return integer 
     */
    public function getPublic()
    {
        return $this->public;
    }

    /**
     * Set memberCountCursor
     *
     * @param integer $memberCountCursor
     * @return Clubs
     */
    public function setMemberCountCursor($memberCountCursor)
    {
        $this->memberCountCursor = $memberCountCursor;
    
        return $this;
    }

    /**
     * Get memberCountCursor
     *
     * @return integer 
     */
    public function getMemberCountCursor()
    {
        return $this->memberCountCursor;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Clubs
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
     * @return Clubs
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
     * Add user
     *
     * @param \Nerdery\GroupsBundle\Entity\Users $user
     * @return Clubs
     */
    public function addUser(\Nerdery\GroupsBundle\Entity\Users $user)
    {
        $this->user[] = $user;
    
        return $this;
    }

    /**
     * Remove user
     *
     * @param \Nerdery\GroupsBundle\Entity\Users $user
     */
    public function removeUser(\Nerdery\GroupsBundle\Entity\Users $user)
    {
        $this->user->removeElement($user);
    }

    /**
     * Get user
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUser()
    {
        return $this->user;
    }
}