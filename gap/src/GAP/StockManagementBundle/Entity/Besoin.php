<?php

namespace GAP\StockManagementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Besoin
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GAP\StockManagementBundle\Entity\BesoinRepository")
 */
class Besoin {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="quantite", type="string", length=255)
     */
    private $quantite;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string 
     *
     * @ORM\Column(name="dosage", type="string", length=255)
     */
    private $dosage;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;
    /**
     * @var boolean
     *
     * @ORM\Column(name="valid", type="boolean", nullable=true)
     */
    private $valid;

    
    /**
     * @ORM\ManyToOne(targetEntity="Service", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $service;

    /**
     * @ORM\ManyToOne(targetEntity="Molecule", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $molecule;

    /**
     * @ORM\ManyToONe(targetEntity="GAP\UserBundle\Entity\User", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $user;



    public function __construct() {
        $this->date = new \DateTime();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set quantite
     *
     * @param string $quantite
     * @return Besoin
     */
    public function setQuantite($quantite) {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return string 
     */
    public function getQuantite() {
        return $this->quantite;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Besoin
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Besoin
     */
    public function setDate($date) {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * Set produit
     */

    /**
     * Set service
     *
     * @param \GAP\StockManagementBundle\Entity\Service $service
     * @return Besoin
     */
    public function setService(\GAP\StockManagementBundle\Entity\Service $service) {
        $this->service = $service;

        return $this;
    }

    /**
     * Get service
     *
     * @return \GAP\StockManagementBundle\Entity\Service 
     */
    public function getService() {
        return $this->service;
    }

    /**
     * Set molecule
     *
     * @param \GAP\StockManagementBundle\Entity\Molecule $molecule
     * @return Besoin
     */
    public function setMolecule(\GAP\StockManagementBundle\Entity\Molecule $molecule) {
        $this->molecule = $molecule;

        return $this;
    }

    /**
     * Get molecule
     *
     * @return \GAP\StockManagementBundle\Entity\Molecule 
     */
    public function getMolecule() {
        return $this->molecule;
    }

    /**
     * Set commande
     *
     * @param \GAP\StockManagementBundle\Entity\commande $commande
     * @return Besoin
     */
    public function setCommande(\GAP\StockManagementBundle\Entity\commande $commande) {
        $this->commande = $commande;

        return $this;
    }

    /**
     * Get commande
     *
     * @return \GAP\StockManagementBundle\Entity\commande 
     */
    public function getCommande() {
        return $this->commande;
    }


    /**
     * Set dosage
     *
     * @param string $dosage
     * @return Besoin
     */
    public function setDosage($dosage)
    {
        $this->dosage = $dosage;

        return $this;
    }

    /**
     * Get dosage
     *
     * @return string 
     */
    public function getDosage()
    {
        return $this->dosage;
    }

    /**
     * Set user
     *
     * @param \GAP\UserBundle\Entity\User $user
     * @return Besoin
     */
    public function setUser(\GAP\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \GAP\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set valid
     *
     * @param boolean $valid
     * @return Besoin
     */
    public function setValid($valid)
    {
        $this->valid = $valid;

        return $this;
    }

    /**
     * Get valid
     *
     * @return boolean 
     */
    public function getValid()
    {
        return $this->valid;
    }
}
