<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Schema
 *
 * @ORM\Table(name="schema")
 * @ORM\Entity
 */
class Schema
{
    /**
     * @var integer
     *
     * @ORM\Column(name="vseq", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $vseq;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ctime", type="datetime", nullable=false)
     */
    private $ctime;


}
