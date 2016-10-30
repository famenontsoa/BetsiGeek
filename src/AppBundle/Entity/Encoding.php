<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Encoding
 *
 * @ORM\Table(name="encoding")
 * @ORM\Entity
 */
class Encoding
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="encoding_type", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $encodingType;

    /**
     * @var string
     *
     * @ORM\Column(name="encoding_text", type="text", length=65535, nullable=false)
     */
    private $encodingText;


}
