<?php

namespace Esprit\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 */
class Produit
{
    /**
     * @var string
     */
    private $nomproduit;

    /**
     * @var string
     */
    private $photo;

    /**
     * @var float
     */
    private $coutproduit;

    /**
     * @var float
     */
    private $coutsolde;

    /**
     * @var string
     */
    private $descriptionproduit;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Esprit\DemoBundle\Entity\Prestataire
     */
    private $idprestataire;

    /**
     * @var \Esprit\DemoBundle\Entity\Categorie
     */
    private $idcategorie;


    /**
     * Set nomproduit
     *
     * @param string $nomproduit
     * @return Produit
     */
    public function setNomproduit($nomproduit)
    {
        $this->nomproduit = $nomproduit;

        return $this;
    }

    /**
     * Get nomproduit
     *
     * @return string 
     */
    public function getNomproduit()
    {
        return $this->nomproduit;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return Produit
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
     * Set coutproduit
     *
     * @param float $coutproduit
     * @return Produit
     */
    public function setCoutproduit($coutproduit)
    {
        $this->coutproduit = $coutproduit;

        return $this;
    }

    /**
     * Get coutproduit
     *
     * @return float 
     */
    public function getCoutproduit()
    {
        return $this->coutproduit;
    }

    /**
     * Set coutsolde
     *
     * @param float $coutsolde
     * @return Produit
     */
    public function setCoutsolde($coutsolde)
    {
        $this->coutsolde = $coutsolde;

        return $this;
    }

    /**
     * Get coutsolde
     *
     * @return float 
     */
    public function getCoutsolde()
    {
        return $this->coutsolde;
    }

    /**
     * Set descriptionproduit
     *
     * @param string $descriptionproduit
     * @return Produit
     */
    public function setDescriptionproduit($descriptionproduit)
    {
        $this->descriptionproduit = $descriptionproduit;

        return $this;
    }

    /**
     * Get descriptionproduit
     *
     * @return string 
     */
    public function getDescriptionproduit()
    {
        return $this->descriptionproduit;
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
     * @return Produit
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
     * Set idcategorie
     *
     * @param \Esprit\DemoBundle\Entity\Categorie $idcategorie
     * @return Produit
     */
    public function setIdcategorie(\Esprit\DemoBundle\Entity\Categorie $idcategorie = null)
    {
        $this->idcategorie = $idcategorie;

        return $this;
    }

    /**
     * Get idcategorie
     *
     * @return \Esprit\DemoBundle\Entity\Categorie 
     */
    public function getIdcategorie()
    {
        return $this->idcategorie;
    }
    public function __toString()
 {
     return $this->id;
 }
}
