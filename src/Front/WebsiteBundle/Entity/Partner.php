<?php

namespace Front\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Partner
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Front\WebsiteBundle\Entity\PartnerRepository")
 */
class Partner
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
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

	/**
	 * @ORM\OneToOne(targetEntity="Media", cascade={"persist"})
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $media;

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
     * @return Partner
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
     * Set url
     *
     * @param string $url
     * @return Partner
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set media
     *
     * @param \Front\WebsiteBundle\Entity\Media $media
     * @return Partner
     */
    public function setMedia(\Front\WebsiteBundle\Entity\Media $media)
    {
        $this->media = $media;

        return $this;
    }

    /**
     * Get media
     *
     * @return \Front\WebsiteBundle\Entity\Media 
     */
    public function getMedia()
    {
        return $this->media;
    }
}
