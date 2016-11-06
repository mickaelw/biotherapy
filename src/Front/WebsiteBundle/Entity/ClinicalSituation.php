<?php

namespace Front\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * ClinicalSituation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Front\WebsiteBundle\Entity\ClinicalSituationRepository")
 */
class ClinicalSituation
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
     * @ORM\OneToMany(targetEntity="Card", mappedBy="clinicalSituation")
     */
    protected $cards;
    
    /**
     * @ORM\OneToMany(targetEntity="Card", mappedBy="clinicalSituation2")
     */
    protected $cards2;
    
    /**
     * @ORM\ManyToOne(targetEntity="ClinicalSituation", inversedBy="clinicalSituations")
     * @ORM\JoinColumn(name="parent", referencedColumnName="id")
     */
    protected $parent;
    /**
     * @ORM\OneToMany(targetEntity="clinicalSituation", mappedBy="parent")
     */
    protected $clinicalSituations;
	
	
	public function __construct()
	{
		$this->cards = new ArrayCollection();
		$this->cards2 = new ArrayCollection();
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
     * @return ClinicalSituation
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
     * @return ClinicalSituation
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
     * Add cards2
     *
     * @param \Front\WebsiteBundle\Entity\Card $cards2
     * @return ClinicalSituation
     */
    public function addCards2(\Front\WebsiteBundle\Entity\Card $cards2)
    {
        $this->cards2[] = $cards2;

        return $this;
    }

    /**
     * Remove cards2
     *
     * @param \Front\WebsiteBundle\Entity\Card $cards2
     */
    public function removeCards2(\Front\WebsiteBundle\Entity\Card $cards2)
    {
        $this->cards2->removeElement($cards2);
    }

    /**
     * Get cards2
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCards2()
    {
        return $this->cards2;
    }

    /**
     * Set parent
     *
     * @param \Front\WebsiteBundle\Entity\ClinicalSituation $parent
     * @return ClinicalSituation
     */
    public function setParent(\Front\WebsiteBundle\Entity\ClinicalSituation $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \Front\WebsiteBundle\Entity\ClinicalSituation 
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Add clinicalSituations
     *
     * @param \Front\WebsiteBundle\Entity\clinicalSituation $clinicalSituations
     * @return ClinicalSituation
     */
    public function addClinicalSituation(\Front\WebsiteBundle\Entity\clinicalSituation $clinicalSituations)
    {
        $this->clinicalSituations[] = $clinicalSituations;

        return $this;
    }

    /**
     * Remove clinicalSituations
     *
     * @param \Front\WebsiteBundle\Entity\clinicalSituation $clinicalSituations
     */
    public function removeClinicalSituation(\Front\WebsiteBundle\Entity\clinicalSituation $clinicalSituations)
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
