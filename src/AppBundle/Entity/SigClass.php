<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SigClass
 *
 * @ORM\Table(name="sig_class", indexes={@ORM\Index(name="sig_class_id", columns={"sig_class_id"}), @ORM\Index(name="sig_class_name", columns={"sig_class_name"})})
 * @ORM\Entity
 */
class SigClass
{
    /**
     * @var integer
     *
     * @ORM\Column(name="sig_class_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sigClassId;

    /**
     * @var string
     *
     * @ORM\Column(name="sig_class_name", type="string", length=60, nullable=false)
     */
    private $sigClassName;


}
