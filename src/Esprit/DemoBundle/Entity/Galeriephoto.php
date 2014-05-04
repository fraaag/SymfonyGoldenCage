<?php

namespace Esprit\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Galeriephoto
 */
class Galeriephoto
{
    /**
     * @var string
     */
    private $nomgalerie;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Esprit\DemoBundle\Entity\Prestataire
     */
    private $idprestataire;


    /**
     * Set nomgalerie
     *
     * @param string $nomgalerie
     * @return Galeriephoto
     */
    public function setNomgalerie($nomgalerie)
    {
        $this->nomgalerie = $nomgalerie;

        return $this;
    }

    /**
     * Get nomgalerie
     *
     * @return string 
     */
    public function getNomgalerie()
    {
        return $this->nomgalerie;
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

    /**
     * Set idprestataire
     *
     * @param \Esprit\DemoBundle\Entity\Prestataire $idprestataire
     * @return Galeriephoto
     */
    public function setIdprestataire(\Esprit\DemoBundle\Entity\Prestataire $idprestataire = null)
    {
        $this->idprestataire = $idprestataire;

        return $this;
    }

    /**
     * Get idprestataire
     *
     * @return \Esprit\DemoBundle\Entity\Prestataire 
     */
    public function getIdprestataire()
    {
        return $this->idprestataire;
    }
}
