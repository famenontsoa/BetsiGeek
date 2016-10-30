<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Udphdr
 *
 * @ORM\Table(name="udphdr", indexes={@ORM\Index(name="udp_sport", columns={"udp_sport"}), @ORM\Index(name="udp_dport", columns={"udp_dport"})})
 * @ORM\Entity
 */
class Udphdr
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
     * @ORM\Column(name="udp_sport", type="smallint", nullable=false)
     */
    private $udpSport;

    /**
     * @var integer
     *
     * @ORM\Column(name="udp_dport", type="smallint", nullable=false)
     */
    private $udpDport;

    /**
     * @var integer
     *
     * @ORM\Column(name="udp_len", type="smallint", nullable=true)
     */
    private $udpLen;

    /**
     * @var integer
     *
     * @ORM\Column(name="udp_csum", type="smallint", nullable=true)
     */
    private $udpCsum;


}
