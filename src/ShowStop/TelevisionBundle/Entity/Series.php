<?php

namespace ShowStop\TelevisionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShowStop\TelevisionBundle\Entity\Series
 *
 * @ORM\Table(name="showstop_series")
 * @ORM\Entity
 */
class Series
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var text $description
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var integer $year
     *
     * @ORM\Column(name="year", type="integer")
     */
    private $year;

    /**
     * @var string $country
     *
     * @ORM\Column(name="country", type="string", length=4)
     */
    private $country;

    /**
     * @var string $first_aired
     *
     * @ORM\Column(name="first_aired", type="string")
     */
    private $first_aired;

    /**
     * @var string $network
     *
     * @ORM\Column(name="network", type="string", length=50)
     */
    private $network;

    /**
     * @var string $status
     *
     * @ORM\Column(name="status", type="string", length=50)
     */
    private $status;

    /**
     * @var integer $tvdb_id
     *
     * @ORM\Column(name="tvdb_id", type="integer")
     */
    private $tvdb_id;


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
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * Set description
     *
     * @param text $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return text 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set year
     *
     * @param integer $year
     */
    public function setYear($year)
    {
        $this->year = $year;
    }

    /**
     * Get year
     *
     * @return integer 
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set country
     *
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set first_aired
     *
     * @param string $firstAired
     */
    public function setFirstAired($firstAired)
    {
        $this->first_aired = $firstAired;
    }

    /**
     * Get first_aired
     *
     * @return string 
     */
    public function getFirstAired()
    {
        return $this->first_aired;
    }

    /**
     * Set network
     *
     * @param string $network
     */
    public function setNetwork($network)
    {
        $this->network = $network;
    }

    /**
     * Get network
     *
     * @return string 
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * Set status
     *
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set tvdb_id
     *
     * @param integer $tvdbId
     */
    public function setTvdbId($tvdbId)
    {
        $this->tvdb_id = $tvdbId;
    }

    /**
     * Get tvdb_id
     *
     * @return integer 
     */
    public function getTvdbId()
    {
        return $this->tvdb_id;
    }
}