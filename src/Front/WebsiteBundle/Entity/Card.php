<?php

namespace Front\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Card
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Front\WebsiteBundle\Entity\CardRepository")
 */
class Card
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
     * @var string
     *
     * @ORM\Column(name="text_patient", type="text")
     */
    private $textPatient;

    /**
     * @var string
     *
     * @ORM\Column(name="text_MD_short", type="text")
     */
    private $textMDShort;

    /**
     * @var string
     *
     * @ORM\Column(name="text_MD_full", type="text")
     */
    private $textMDFull;
    
    /**
     * @var string
     *
     * @ORM\Column(name="text_Ref", type="text")
     */
    private $textRef;
	
	/**
     * @var datetime
     *
     * @ORM\Column(name="created_time", type="datetime")
     */
    private $createdTime;
	
	/**
     * @var datetime
     *
     * @ORM\Column(name="modified_time", type="datetime")
     */
    private $modifiedTime;
	
	/**
     * @ORM\ManyToOne(targetEntity="Biotherapy", inversedBy="cards")
     * @ORM\JoinColumn(name="biotherapy_id", referencedColumnName="id")
     */
    protected $biotherapy;
    
    /**
     * @ORM\ManyToOne(targetEntity="ClinicalSituation", inversedBy="cards")
     * @ORM\JoinColumn(name="clinicalSituation_id", referencedColumnName="id")
     */
    protected $clinicalSituation;
    
    /**
     * @ORM\ManyToOne(targetEntity="ClinicalSituation", inversedBy="cards")
     * @ORM\JoinColumn(name="clinicalSituation2_id", referencedColumnName="id")
     */
    protected $clinicalSituation2;
	
	/**
	 * @ORM\ManyToMany(targetEntity="Tag", cascade={"persist"})
	 */
	private $tags;
	
	public function __construct()
	{
		$this->createdTime = new Datetime();
		$this->modifiedTime = new Datetime();
		$this->references = new ArrayCollection();
		$this->tags = new ArrayCollection();
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
     * @return Card
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
     * Set textPatient
     *
     * @param string $textPatient
     * @return Card
     */
    public function setTextPatient($textPatient)
    {
        $this->textPatient = $textPatient;

        return $this;
    }

    /**
     * Get textPatient
     *
     * @return string 
     */
    public function getTextPatient()
    {
        return $this->textPatient;
    }

    /**
     * Set textMDShort
     *
     * @param string $textMDShort
     * @return Card
     */
    public function setTextMDShort($textMDShort)
    {
        $this->textMDShort = $textMDShort;

        return $this;
    }

    /**
     * Get textMDShort
     *
     * @return string 
     */
    public function getTextMDShort()
    {
        return $this->textMDShort;
    }

    /**
     * Set textMDFull
     *
     * @param string $textMDFull
     * @return Card
     */
    public function setTextMDFull($textMDFull)
    {
        $this->textMDFull = $textMDFull;

        return $this;
    }

    /**
     * Get textMDFull
     *
     * @return string 
     */
    public function getTextMDFull()
    {
        return $this->textMDFull;
    }

    /**
     * Set biotherapy
     *
     * @param \Front\WebsiteBundle\Entity\Biotherapy $biotherapy
     * @return Card
     */
    public function setBiotherapy(\Front\WebsiteBundle\Entity\Biotherapy $biotherapy = null)
    {
        $this->biotherapy = $biotherapy;

        return $this;
    }

    /**
     * Get biotherapy
     *
     * @return \Front\WebsiteBundle\Entity\Biotherapy 
     */
    public function getBiotherapy()
    {
        return $this->biotherapy;
    }

    /**
     * Add tags
     *
     * @param \Front\WebsiteBundle\Entity\Tag $tags
     * @return Card
     */
    public function addTag(\Front\WebsiteBundle\Entity\Tag $tags)
    {
        $this->tags[] = $tags;

        return $this;
    }

    /**
     * Remove tags
     *
     * @param \Front\WebsiteBundle\Entity\Tag $tags
     */
    public function removeTag(\Front\WebsiteBundle\Entity\Tag $tags)
    {
        $this->tags->removeElement($tags);
    }

    /**
     * Get tags
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set user_created
     *
     * @param \Back\UserBundle\User $userCreated
     * @return Card
     */
    public function setUserCreated(\Back\UserBundle\Entity\User $userCreated)
    {
        $this->user_created = $userCreated;

        return $this;
    }

    /**
     * Get user_created
     *
     * @return \Back\UserBundle\User 
     */
    public function getUserCreated()
    {
        return $this->user_created;
    }

    /**
     * Set user_modified
     *
     * @param \Back\UserBundle\User $userModified
     * @return Card
     */
    public function setUserModified(\Back\UserBundle\Entity\User $userModified)
    {
        $this->user_modified = $userModified;

        return $this;
    }

    /**
     * Get user_modified
     *
     * @return \Back\UserBundle\User 
     */
    public function getUserModified()
    {
        return $this->user_modified;
    }

    /**
     * Set createdTime
     *
     * @param \DateTime $createdTime
     * @return Card
     */
    public function setCreatedTime($createdTime)
    {
        $this->createdTime = $createdTime;

        return $this;
    }

    /**
     * Get createdTime
     *
     * @return \DateTime 
     */
    public function getCreatedTime()
    {
        return $this->createdTime;
    }

    /**
     * Set modifiedTime
     *
     * @param \DateTime $modifiedTime
     * @return Card
     */
    public function setModifiedTime($modifiedTime)
    {
        $this->modifiedTime = $modifiedTime;

        return $this;
    }

    /**
     * Get modifiedTime
     *
     * @return \DateTime 
     */
    public function getModifiedTime()
    {
        return $this->modifiedTime;
    }

    /**
     * Set clinicalSituation
     *
     * @param \Front\WebsiteBundle\Entity\ClinicalSituation $clinicalSituation
     * @return Card
     */
    public function setClinicalSituation(\Front\WebsiteBundle\Entity\ClinicalSituation $clinicalSituation = null)
    {
        $this->clinicalSituation = $clinicalSituation;

        return $this;
    }

    /**
     * Get clinicalSituation
     *
     * @return \Front\WebsiteBundle\Entity\ClinicalSituation 
     */
    public function getClinicalSituation()
    {
        return $this->clinicalSituation;
    }

    /**
     * Set clinicalSituation2
     *
     * @param \Front\WebsiteBundle\Entity\ClinicalSituation $clinicalSituation2
     * @return Card
     */
    public function setClinicalSituation2(\Front\WebsiteBundle\Entity\ClinicalSituation $clinicalSituation2 = null)
    {
        $this->clinicalSituation2 = $clinicalSituation2;

        return $this;
    }

    /**
     * Get clinicalSituation2
     *
     * @return \Front\WebsiteBundle\Entity\ClinicalSituation 
     */
    public function getClinicalSituation2()
    {
        return $this->clinicalSituation2;
    }

    /**
     * Set textRef
     *
     * @param string $textRef
     * @return Card
     */
    public function setTextRef($textRef)
    {
        $this->textRef = $textRef;

        return $this;
    }

    /**
     * Get textRef
     *
     * @return string 
     */
    public function getTextRef()
    {
        return $this->textRef;
    }
}
