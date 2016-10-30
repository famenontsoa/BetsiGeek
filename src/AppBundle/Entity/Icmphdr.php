<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Icmphdr
 *
 * @ORM\Table(name="icmphdr", indexes={@ORM\Index(name="icmp_type", columns={"icmp_type"})})
 * @ORM\Entity
 */
class Icmphdr
{
    /**
     * @var integer
     *
     * @ORM\Column(name="sid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sid;

    /**
     * @var integer
     *
     * @ORM\Column(name="cid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="icmp_type", type="boolean", nullable=false)
     */
    private $icmpType;

    /**
     * @var boolean
     *
     * @ORM\Column(name="icmp_code", type="boolean", nullable=false)
     */
    private $icmpCode;

    /**
     * @var integer
     *
     * @ORM\Column(name="icmp_csum", type="smallint", nullable=true)
     */
    private $icmpCsum;

    /**
     * @var integer
     *
     * @ORM\Column(name="icmp_id", type="smallint", nullable=true)
     */
    private $icmpId;

    /**
     * @var integer
     *
     * @ORM\Column(name="icmp_seq", type="smallint", nullable=true)
     */
    private $icmpSeq;


}
