<?php

namespace Esprit\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Administrateur
 */
class Administrateur
{
    /**
     * @var string
     */
    private $datederniervisite;

    /**
     * @var string
     */
    private $login;

    /**
     * @var string
     */
    private $motdepasse;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set datederniervisite
     *
     * @param \DateTime $datederniervisite
     * @return Administrateur
     */
    public function setDatederniervisite($datederniervisite)
    {
        $this->datederniervisite = $datederniervisite;

        return $this;
    }

    /**
     * Get datederniervisite
     *
     * @return \DateTime 
     */
    public function getDatederniervisite()
    {
        return $this->datederniervisite;
    }

    /**
     * Set login
     *
     * @param string $login
     * @return Administrateur
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
     * @return Administrateur
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
