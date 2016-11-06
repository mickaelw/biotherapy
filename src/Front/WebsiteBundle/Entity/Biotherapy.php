<?php

namespace Front\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Biotherapy
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Front\WebsiteBundle\Entity\BiotherapyRepository")
 */
class Biotherapy
{
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;
	
	/**
     * @ORM\OneToMany(targetEntity="Card", mappedBy="biotherapy")
     */
    protected $cards;
    
    /**
	 * @ORM\ManyToMany(targetEntity="ClinicalSituation", cascade={"persist"})
	 */
	private $clinicalSituations;
	
	public function __construct()
	{
		$this->cards = new ArrayCollection();
		$this->clinicalSituations = new ArrayCollection();
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
     * Set name
     *
     * @param string $name
     * @return Biotherapy
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add cards
     *
     * @param \Front\WebsiteBundle\Entity\Card $cards
     * @return Biotherapy
     */
    public function addCard(\Front\WebsiteBundle\Entity\Card $cards)
    {
        $this->cards[] = $cards;

        return $this;
    }

    /**
     * Remove cards
     *
     * @param \Front\WebsiteBundle\Entity\Card $cards
     */
    public function removeCard(\Front\WebsiteBundle\Entity\Card $cards)
    {
        $this->cards->removeElement($cards);
    }

    /**
     * Get cards
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCards()
    {
        return $this->cards;
    }

    /**
     * Add clinicalSituations
     *
     * @param \Front\WebsiteBundle\Entity\ClinicalSituation $clinicalSituations
     * @return Biotherapy
     */
    public function addClinicalSituation(\Front\WebsiteBundle\Entity\ClinicalSituation $clinicalSituations)
    {
        $this->clinicalSituations[] = $clinicalSituations;

        return $this;
    }

    /**
     * Remove clinicalSituations
     *
     * @param \Front\WebsiteBundle\Entity\ClinicalSituation $clinicalSituations
     */
    public function removeClinicalSituation(\Front\WebsiteBundle\Entity\ClinicalSituation $clinicalSituations)
    {
        $this->clinicalSituations->removeElement($clinicalSituations);
    }

    /**
     * Get clinicalSituations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getClinicalSituations()
    {
        return $this->clinicalSituations;
    }
}
