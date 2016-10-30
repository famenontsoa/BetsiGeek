<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SigReference
 *
 * @ORM\Table(name="sig_reference")
 * @ORM\Entity
 */
class SigReference
{
    /**
     * @var integer
     *
     * @ORM\Column(name="sig_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sigId;

    /**
     * @var integer
     *
     * @ORM\Column(name="ref_seq", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $refSeq;

    /**
     * @var integer
     *
     * @ORM\Column(name="ref_id", type="integer", nullable=false)
     */
    private $refId;


}
