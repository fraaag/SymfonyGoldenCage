<?php

namespace Esprit\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 */
class Client
{
    /**
     * @var string
     */
    private $adressmail;

    /**
     * @var integer
     */
    private $banir;

    /**
     * @var string
     */
    private $login;

    /**
     * @var string
     */
    private $motdepasse;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var integer
     */
    private $numtel;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set adressmail
     *
     * @param string $adressmail
     * @return Client
     */
    public function setAdressmail($adressmail)
    {
        $this->adressmail = $adressmail;

        return $this;
    }

    /**
     * Get adressmail
     *
     * @return string 
     */
    public function getAdressmail()
    {
        return $this->adressmail;
    }

    /**
     * Set banir
     *
     * @param integer $banir
     * @return Client
     */
    public function setBanir($banir)
    {
        $this->banir = $banir;

        return $this;
    }

    /**
     * Get banir
     *
     * @return integer 
     */
    public function getBanir()
    {
        return $this->banir;
    }

    /**
     * Set login
     *
     * @param string $login
     * @return Client
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set motdepasse
     *
     * @param string $motdepasse
     * @return Client
     */
    public function setMotdepasse($motdepasse)
    {
        $this->motdepasse = $motdepasse;

        return $this;
    }

    /**
     * Get motdepasse
     *
     * @return string 
     */
    public function getMotdepasse()
    {
        return $this->motdepasse;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Client
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set numtel
     *
     * @param integer $numtel
     * @return Client
     */
    public function setNumtel($numtel)
    {
        $this->numtel = $numtel;

        return $this;
    }

    /**
     * Get numtel
     *
     * @return integer 
     */
    public function getNumtel()
    {
        return $this->numtel;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Client
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
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
