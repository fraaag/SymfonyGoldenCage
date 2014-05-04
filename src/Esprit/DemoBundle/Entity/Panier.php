<?php

namespace Esprit\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Panier
 */
class Panier
{
    /**
     * @var integer
     */
    private $idproduit;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Esprit\DemoBundle\Entity\Client
     */
    private $idclt;


    /**
     * Set idproduit
     *
     * @param integer $idproduit
     * @return Panier
     */
    public function setIdproduit($idproduit)
    {
        $this->idproduit = $idproduit;

        return $this;
    }

    /**
     * Get idproduit
     *
     * @return integer 
     */
    public function getIdproduit()
    {
        return $this->idproduit;
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
     * Set idclt
     *
     * @param \Esprit\DemoBundle\Entity\Client $idclt
     * @return Panier
     */
    public function setIdclt(\Esprit\DemoBundle\Entity\Client $idclt = null)
    {
        $this->idclt = $idclt;

        return $this;
    }

    /**
     * Get idclt
     *
     * @return \Esprit\DemoBundle\Entity\Client 
     */
    public function getIdclt()
    {
        return $this->idclt;
    }
}
