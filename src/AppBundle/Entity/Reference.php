<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reference
 *
 * @ORM\Table(name="reference")
 * @ORM\Entity
 */
class Reference
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ref_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $refId;

    /**
     * @var integer
     *
     * @ORM\Column(name="ref_system_id", type="integer", nullable=false)
     */
    private $refSystemId;

    /**
     * @var string
     *
     * @ORM\Column(name="ref_tag", type="text", length=65535, nullable=false)
     */
    private $refTag;


}
