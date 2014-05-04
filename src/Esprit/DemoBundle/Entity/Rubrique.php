<?php

namespace Esprit\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rubrique
 */
class Rubrique
{
    /**
     * @var string
     */
    private $nomrubrique;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set nomrubrique
     *
     * @param string $nomrubrique
     * @return Rubrique
     */
    public function setNomrubrique($nomrubrique)
    {
        $this->nomrubrique = $nomrubrique;

        return $this;
    }

    /**
     * Get nomrubrique
     *
     * @return string 
     */
    public function getNomrubrique()
    {
        return $this->nomrubrique;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
