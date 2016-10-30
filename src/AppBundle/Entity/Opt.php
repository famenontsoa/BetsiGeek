<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Opt
 *
 * @ORM\Table(name="opt")
 * @ORM\Entity
 */
class Opt
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
     * @ORM\Column(name="optid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $optid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="opt_proto", type="boolean", nullable=false)
     */
    private $optProto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="opt_code", type="boolean", nullable=false)
     */
    private $optCode;

    /**
     * @var integer
     *
     * @ORM\Column(name="opt_len", type="smallint", nullable=true)
     */
    private $optLen;

    /**
     * @var string
     *
     * @ORM\Column(name="opt_data", type="text", length=65535, nullable=true)
     */
    private $optData;


}
