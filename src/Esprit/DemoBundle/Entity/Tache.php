<?php

namespace Esprit\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tache
 */
class Tache
{
    /**
     * @var \DateTime
     */
    private $datetache;

    /**
     * @var string
     */
    private $desctache;

    /**
     * @var \DateTime
     */
    private $heuretache;

    /**
     * @var string
     */
    private $nomtache;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Esprit\DemoBundle\Entity\Client
     */
    private $idclient;


    /**
     * Set datetache
     *
     * @param \DateTime $datetache
     * @return Tache
     */
    public function setDatetache($datetache)
    {
        $this->datetache = $datetache;

        return $this;
    }

    /**
     * Get datetache
     *
     * @return \DateTime 
     */
    public function getDatetache()
    {
        return $this->datetache;
    }

    /**
     * Set desctache
     *
     * @param string $desctache
     * @return Tache
     */
    public function setDesctache($desctache)
    {
        $this->desctache = $desctache;

        return $this;
    }

    /**
     * Get desctache
     *
     * @return string 
     */
    public function getDesctache()
    {
        return $this->desctache;
    }

    /**
     * Set heuretache
     *
     * @param \DateTime $heuretache
     * @return Tache
     */
    public function setHeuretache($heuretache)
    {
        $this->heuretache = $heuretache;

        return $this;
    }

    /**
     * Get heuretache
     *
     * @return \DateTime 
     */
    public function getHeuretache()
    {
        return $this->heuretache;
    }

    /**
     * Set nomtache
     *
     * @param string $nomtache
     * @return Tache
     */
    public function setNomtache($nomtache)
    {
        $this->nomtache = $nomtache;

        return $this;
    }

    /**
     * Get nomtache
     *
     * @return string 
     */
    public function getNomtache()
    {
        return $this->nomtache;
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
     * Set idclient
     *
     * @param \Esprit\DemoBundle\Entity\Client $idclient
     * @return Tache
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
