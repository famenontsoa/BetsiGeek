<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Signature
 *
 * @ORM\Table(name="signature", indexes={@ORM\Index(name="sign_idx", columns={"sig_name"}), @ORM\Index(name="sig_class_id_idx", columns={"sig_class_id"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SignatureRepository")
 */
class Signature
{
    /**
     * @var integer
     *
     * @ORM\Column(name="sig_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sigId;

    /**
     * @var string
     *
     * @ORM\Column(name="sig_name", type="string", length=255, nullable=false)
     */
    private $sigName;

    /**
     * @var integer
     *
     * @ORM\Column(name="sig_class_id", type="integer", nullable=false)
     */
    private $sigClassId;

    /**
     * @var integer
     *
     * @ORM\Column(name="sig_priority", type="integer", nullable=true)
     */
    private $sigPriority;

    /**
     * @var integer
     *
     * @ORM\Column(name="sig_rev", type="integer", nullable=true)
     */
    private $sigRev;

    /**
     * @var integer
     *
     * @ORM\Column(name="sig_sid", type="integer", nullable=true)
     */
    private $sigSid;

    /**
     * @var integer
     *
     * @ORM\Column(name="sig_gid", type="integer", nullable=true)
     */
    private $sigGid;

    /**
     * @var integer
     *
     * @ORM\OneToMany(targetEntity="Iphdr", mappedBy="sid")
     */
    private $iphdr;

    /**
     * @var integer
     *
     * @ORM\OneToMany(targetEntity="Event", mappedBy="sid")
     */
    private $event;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->iphdr = new \Doctrine\Common\Collections\ArrayCollection();
        $this->event = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get sigId
     *
     * @return integer
     */
    public function getSigId()
    {
        return $this->sigId;
    }

    /**
     * Set sigName
     *
     * @param string $sigName
     * @return Signature
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
     * Set sigClassId
     *
     * @param integer $sigClassId
     * @return Signature
     */
    public function setSigClassId($sigClassId)
    {
        $this->sigClassId = $sigClassId;

        return $this;
    }

    /**
     * Get sigClassId
     *
     * @return integer
     */
    public function getSigClassId()
    {
        return $this->sigClassId;
    }

    /**
     * Set sigPriority
     *
     * @param integer $sigPriority
     * @return Signature
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
     * Set sigRev
     *
     * @param integer $sigRev
     * @return Signature
     */
    public function setSigRev($sigRev)
    {
        $this->sigRev = $sigRev;

        return $this;
    }

    /**
     * Get sigRev
     *
     * @return integer
     */
    public function getSigRev()
    {
        return $this->sigRev;
    }

    /**
     * Set sigSid
     *
     * @param integer $sigSid
     * @return Signature
     */
    public function setSigSid($sigSid)
    {
        $this->sigSid = $sigSid;

        return $this;
    }

    /**
     * Get sigSid
     *
     * @return integer
     */
    public function getSigSid()
    {
        return $this->sigSid;
    }

    /**
     * Set sigGid
     *
     * @param integer $sigGid
     * @return Signature
     */
    public function setSigGid($sigGid)
    {
        $this->sigGid = $sigGid;

        return $this;
    }

    /**
     * Get sigGid
     *
     * @return integer
     */
    public function getSigGid()
    {
        return $this->sigGid;
    }

    /**
     * Add iphdr
     *
     * @param \AppBundle\Entity\Iphdr $iphdr
     * @return Signature
     */
    public function addIphdr(\AppBundle\Entity\Iphdr $iphdr)
    {
        $this->iphdr[] = $iphdr;

        return $this;
    }

    /**
     * Remove iphdr
     *
     * @param \AppBundle\Entity\Iphdr $iphdr
     */
    public function removeIphdr(\AppBundle\Entity\Iphdr $iphdr)
    {
        $this->iphdr->removeElement($iphdr);
    }

    /**
     * Get iphdr
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIphdr()
    {
        return $this->iphdr;
    }

    /**
     * Add event
     *
     * @param \AppBundle\Entity\Event $event
     * @return Signature
     */
    public function addEvent(\AppBundle\Entity\Event $event)
    {
        $this->event[] = $event;

        return $this;
    }

    /**
     * Remove event
     *
     * @param \AppBundle\Entity\Event $event
     */
    public function removeEvent(\AppBundle\Entity\Event $event)
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
