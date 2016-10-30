<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReferenceSystem
 *
 * @ORM\Table(name="reference_system")
 * @ORM\Entity
 */
class ReferenceSystem
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ref_system_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $refSystemId;

    /**
     * @var string
     *
     * @ORM\Column(name="ref_system_name", type="string", length=20, nullable=true)
     */
    private $refSystemName;


}
