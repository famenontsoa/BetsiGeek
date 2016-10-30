<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Iphdr
 *
 * @ORM\Table(name="iphdr", indexes={@ORM\Index(name="ip_src", columns={"ip_src"}), @ORM\Index(name="ip_dst", columns={"ip_dst"})})
 * @ORM\Entity
 */
class Iphdr
{
    /**
     * @var integer
     * @ORM\ManyToOne(targetEntity="Signature", inversedBy="iphdr")
     * @ORM\JoinColumn(name="sid", referencedColumnName="sig_sid")
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
     * @var integer
     *
     * @ORM\Column(name="ip_src", type="integer", nullable=false)
     */
    private $ipSrc;

    /**
     * @var integer
     *
     * @ORM\Column(name="ip_dst", type="integer", nullable=false)
     */
    private $ipDst;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ip_ver", type="boolean", nullable=true)
     */
    private $ipVer;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ip_hlen", type="boolean", nullable=true)
     */
    private $ipHlen;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ip_tos", type="boolean", nullable=true)
     */
    private $ipTos;

    /**
     * @var integer
     *
     * @ORM\Column(name="ip_len", type="smallint", nullable=true)
     */
    private $ipLen;

    /**
     * @var integer
     *
     * @ORM\Column(name="ip_id", type="smallint", nullable=true)
     */
    private $ipId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ip_flags", type="boolean", nullable=true)
     */
    private $ipFlags;

    /**
     * @var integer
     *
     * @ORM\Column(name="ip_off", type="smallint", nullable=true)
     */
    private $ipOff;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ip_ttl", type="boolean", nullable=true)
     */
    private $ipTtl;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ip_proto", type="boolean", nullable=false)
     */
    private $ipProto;

    /**
     * @var integer
     *
     * @ORM\Column(name="ip_csum", type="smallint", nullable=true)
     */
    private $ipCsum;


}
