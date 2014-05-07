<?php

namespace Esprit\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prestataire
 */
class Prestataire
{
    /**
     * @var string
     */
    private $adresse;

    /**
     * @var string
     */
    private $adressmail;

    /**
     * @var integer
     */
    private $fax;

    /**
     * @var integer
     */
    private $gsm;

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
    private $nomsociete;

    /**
     * @var string
     */
    private $photo;

    /**
     * @var string
     */
    private $presentation;

    /**
     * @var string
     */
    private $siteweb;

    /**
     * @var integer
     */
    private $tel;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Esprit\DemoBundle\Entity\Rubrique
     */
    private $idrubrique;


    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Prestataire
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set adressmail
     *
     * @param string $adressmail
     * @return Prestataire
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
     * Set fax
     *
     * @param integer $fax
     * @return Prestataire
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return integer 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set gsm
     *
     * @param integer $gsm
     * @return Prestataire
     */
    public function setGsm($gsm)
    {
        $this->gsm = $gsm;

        return $this;
    }

    /**
     * Get gsm
     *
     * @return integer 
     */
    public function getGsm()
    {
        return $this->gsm;
    }

    /**
     * Set login
     *
     * @param string $login
     * @return Prestataire
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
     * @return Prestataire
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
     * Set nomsociete
     *
     * @param string $nomsociete
     * @return Prestataire
     */
    public function setNomsociete($nomsociete)
    {
        $this->nomsociete = $nomsociete;

        return $this;
    }

    /**
     * Get nomsociete
     *
     * @return string 
     */
    public function getNomsociete()
    {
        return $this->nomsociete;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return Prestataire
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set presentation
     *
     * @param string $presentation
     * @return Prestataire
     */
    public function setPresentation($presentation)
    {
        $this->presentation = $presentation;

        return $this;
    }

    /**
     * Get presentation
     *
     * @return string 
     */
    public function getPresentation()
    {
        return $this->presentation;
    }

    /**
     * Set siteweb
     *
     * @param string $siteweb
     * @return Prestataire
     */
    public function setSiteweb($siteweb)
    {
        $this->siteweb = $siteweb;

        return $this;
    }

    /**
     * Get siteweb
     *
     * @return string 
     */
    public function getSiteweb()
    {
        return $this->siteweb;
    }

    /**
     * Set tel
     *
     * @param integer $tel
     * @return Prestataire
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return integer 
     */
    public function getTel()
    {
        return $this->tel;
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
     * Set idrubrique
     *
     * @param \Esprit\DemoBundle\Entity\Rubrique $idrubrique
     * @return Prestataire
     */
    public function setIdrubrique(\Esprit\DemoBundle\Entity\Rubrique $idrubrique = null)
    {
        $this->idrubrique = $idrubrique;

        return $this;
    }

    /**
     * Get idrubrique
     *
     * @return \Esprit\DemoBundle\Entity\Rubrique 
     */
    public function getIdrubrique()
    {
        return $this->idrubrique;
    }
    public function __toString()
 {
     return "".$this->idrubrique;
 }
}
