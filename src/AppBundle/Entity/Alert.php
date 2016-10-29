<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alert
 *
 * @ORM\Table(name="alert")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AlertRepository")
 */
class Alert
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="sigName", type="string", length=255)
     */
    private $sigName;

    /**
     * @var string
     *
     * @ORM\Column(name="ipSource", type="string", length=255)
     */
    private $ipSource;

    /**
     * @var int
     *
     * @ORM\Column(name="sigPriority", type="integer")
     */
    private $sigPriority;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timeStamp", type="datetimetz")
     */
    private $timeStamp;


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
     * Set sigName
     *
     * @param string $sigName
     * @return Alert
     */
    public function setSigName($sigName)
    {
        $this->sigName = $sigName;

        return $this;
    }

    /**
     * Get sigName
     *
     * @return string 
     */
    public function getSigName()
    {
        return $this->sigName;
    }

    /**
     * Set ipSource
     *
     * @param string $ipSource
     * @return Alert
     */
    public function setIpSource($ipSource)
    {
        $this->ipSource = $ipSource;

        return $this;
    }

    /**
     * Get ipSource
     *
     * @return string 
     */
    public function getIpSource()
    {
        return $this->ipSource;
    }

    /**
     * Set sigPriority
     *
     * @param integer $sigPriority
     * @return Alert
     */
    public function setSigPriority($sigPriority)
    {
        $this->sigPriority = $sigPriority;

        return $this;
    }

    /**
     * Get sigPriority
     *
     * @return integer 
     */
    public function getSigPriority()
    {
        return $this->sigPriority;
    }

    /**
     * Set timeStamp
     *
     * @param \DateTime $timeStamp
     * @return Alert
     */
    public function setTimeStamp($timeStamp)
    {
        $this->timeStamp = $timeStamp;

        return $this;
    }

    /**
     * Get timeStamp
     *
     * @return \DateTime 
     */
    public function getTimeStamp()
    {
        return $this->timeStamp;
    }
}
