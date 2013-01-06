<?php

namespace Nerdery\GroupsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="Nerdery\GroupsBundle\Repository\UsersRepository")
 */
class Users
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
     * @ORM\Column(name="name", type="string", length=127, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=32, nullable=false)
     */
    private $salt;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Clubs", mappedBy="user")
     */
    private $club;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Events", mappedBy="user")
     */
    private $event;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->club = new \Doctrine\Common\Collections\ArrayCollection();
        $this->event = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name
     *
     * @param string $name
     * @return Users
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Users
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
     * Set password
     *
     * @param string $password
     * @return Users
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set salt
     *
     * @param string $salt
     * @return Users
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;
    
        return $this;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Add club
     *
     * @param \Nerdery\GroupsBundle\Entity\Clubs $club
     * @return Users
     */
    public function addClub(\Nerdery\GroupsBundle\Entity\Clubs $club)
    {
        $this->club[] = $club;
    
        return $this;
    }

    /**
     * Remove club
     *
     * @param \Nerdery\GroupsBundle\Entity\Clubs $club
     */
    public function removeClub(\Nerdery\GroupsBundle\Entity\Clubs $club)
    {
        $this->club->removeElement($club);
    }

    /**
     * Get club
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getClub()
    {
        return $this->club;
    }

    /**
     * Add event
     *
     * @param \Nerdery\GroupsBundle\Entity\Events $event
     * @return Users
     */
    public function addEvent(\Nerdery\GroupsBundle\Entity\Events $event)
    {
        $this->event[] = $event;
    
        return $this;
    }

    /**
     * Remove event
     *
     * @param \Nerdery\GroupsBundle\Entity\Events $event
     */
    public function removeEvent(\Nerdery\GroupsBundle\Entity\Events $event)
    {
        $this->event->removeElement($event);
    }

    /**
     * Get event
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEvent()
    {
        return $this->event;
    }
}