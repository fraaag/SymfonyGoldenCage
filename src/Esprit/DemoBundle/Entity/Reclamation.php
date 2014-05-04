<?php

namespace Esprit\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamation
 */
class Reclamation
{
    /**
     * @var \DateTime
     */
    private $daterec;

    /**
     * @var \DateTime
     */
    private $heurerec;

    /**
     * @var integer
     */
    private $noterec;

    /**
     * @var string
     */
    private $textrec;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Esprit\DemoBundle\Entity\Prestataire
     */
    private $idprestataire;

    /**
     * @var \Esprit\DemoBundle\Entity\Client
     */
    private $idclient;


    /**
     * Set daterec
     *
     * @param \DateTime $daterec
     * @return Reclamation
     */
    public function setDaterec($daterec)
    {
        $this->daterec = $daterec;

        return $this;
    }

    /**
     * Get daterec
     *
     * @return \DateTime 
     */
    public function getDaterec()
    {
        return $this->daterec;
    }

    /**
     * Set heurerec
     *
     * @param \DateTime $heurerec
     * @return Reclamation
     */
    public function setHeurerec($heurerec)
    {
        $this->heurerec = $heurerec;

        return $this;
    }

    /**
     * Get heurerec
     *
     * @return \DateTime 
     */
    public function getHeurerec()
    {
        return $this->heurerec;
    }

    /**
     * Set noterec
     *
     * @param integer $noterec
     * @return Reclamation
     */
    public function setNoterec($noterec)
    {
        $this->noterec = $noterec;

        return $this;
    }

    /**
     * Get noterec
     *
     * @return integer 
     */
    public function getNoterec()
    {
        return $this->noterec;
    }

    /**
     * Set textrec
     *
     * @param string $textrec
     * @return Reclamation
     */
    public function setTextrec($textrec)
    {
        $this->textrec = $textrec;

        return $this;
    }

    /**
     * Get textrec
     *
     * @return string 
     */
    public function getTextrec()
    {
        return $this->textrec;
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
     * @return Reclamation
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

    /**
     * Set idclient
     *
     * @param \Esprit\DemoBundle\Entity\Client $idclient
     * @return Reclamation
     */
    public function setIdclient(\Esprit\DemoBundle\Entity\Client $idclient = null)
    {
        $this->idclient = $idclient;

        return $this;
    }

    /**
     * Get idclient
     *
     * @return \Esprit\DemoBundle\Entity\Client 
     */
    public function getIdclient()
    {
        return $this->idclient;
    }
}
