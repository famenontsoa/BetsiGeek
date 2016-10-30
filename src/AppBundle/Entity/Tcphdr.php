<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tcphdr
 *
 * @ORM\Table(name="tcphdr", indexes={@ORM\Index(name="tcp_sport", columns={"tcp_sport"}), @ORM\Index(name="tcp_dport", columns={"tcp_dport"}), @ORM\Index(name="tcp_flags", columns={"tcp_flags"})})
 * @ORM\Entity
 */
class Tcphdr
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
     * @var integer
     *
     * @ORM\Column(name="tcp_sport", type="smallint", nullable=false)
     */
    private $tcpSport;

    /**
     * @var integer
     *
     * @ORM\Column(name="tcp_dport", type="smallint", nullable=false)
     */
    private $tcpDport;

    /**
     * @var integer
     *
     * @ORM\Column(name="tcp_seq", type="integer", nullable=true)
     */
    private $tcpSeq;

    /**
     * @var integer
     *
     * @ORM\Column(name="tcp_ack", type="integer", nullable=true)
     */
    private $tcpAck;

    /**
     * @var boolean
     *
     * @ORM\Column(name="tcp_off", type="boolean", nullable=true)
     */
    private $tcpOff;

    /**
     * @var boolean
     *
     * @ORM\Column(name="tcp_res", type="boolean", nullable=true)
     */
    private $tcpRes;

    /**
     * @var boolean
     *
     * @ORM\Column(name="tcp_flags", type="boolean", nullable=false)
     */
    private $tcpFlags;

    /**
     * @var integer
     *
     * @ORM\Column(name="tcp_win", type="smallint", nullable=true)
     */
    private $tcpWin;

    /**
     * @var integer
     *
     * @ORM\Column(name="tcp_csum", type="smallint", nullable=true)
     */
    private $tcpCsum;

    /**
     * @var integer
     *
     * @ORM\Column(name="tcp_urp", type="smallint", nullable=true)
     */
    private $tcpUrp;


}
