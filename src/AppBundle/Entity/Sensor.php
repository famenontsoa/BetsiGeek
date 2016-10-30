<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sensor
 *
 * @ORM\Table(name="sensor")
 * @ORM\Entity
 */
class Sensor
{
    /**
     * @var integer
     *
     * @ORM\Column(name="sid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sid;

    /**
     * @var string
     *
     * @ORM\Column(name="hostname", type="text", length=65535, nullable=true)
     */
    private $hostname;

    /**
     * @var string
     *
     * @ORM\Column(name="interface", type="text", length=65535, nullable=true)
     */
    private $interface;

    /**
     * @var string
     *
     * @ORM\Column(name="filter", type="text", length=65535, nullable=true)
     */
    private $filter;

    /**
     * @var boolean
     *
     * @ORM\Column(name="detail", type="boolean", nullable=true)
     */
    private $detail;

    /**
     * @var boolean
     *
     * @ORM\Column(name="encoding", type="boolean", nullable=true)
     */
    private $encoding;

    /**
     * @var integer
     *
     * @ORM\Column(name="last_cid", type="integer", nullable=false)
     */
    private $lastCid;


}
