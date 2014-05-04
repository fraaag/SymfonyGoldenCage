<?php

namespace Esprit\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Photo
 */
class Photo
{
    /**
     * @var string
     */
    private $titrephoto;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Esprit\DemoBundle\Entity\Galeriephoto
     */
    private $idgalerie;


    /**
     * Set titrephoto
     *
     * @param string $titrephoto
     * @return Photo
     */
    public function setTitrephoto($titrephoto)
    {
        $this->titrephoto = $titrephoto;

        return $this;
    }

    /**
     * Get titrephoto
     *
     * @return string 
     */
    public function getTitrephoto()
    {
        return $this->titrephoto;
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
     * Set idgalerie
     *
     * @param \Esprit\DemoBundle\Entity\Galeriephoto $idgalerie
     * @return Photo
     */
    public function setIdgalerie(\Esprit\DemoBundle\Entity\Galeriephoto $idgalerie = null)
    {
        $this->idgalerie = $idgalerie;

        return $this;
    }

    /**
     * Get idgalerie
     *
     * @return \Esprit\DemoBundle\Entity\Galeriephoto 
     */
    public function getIdgalerie()
    {
        return $this->idgalerie;
    }
}
