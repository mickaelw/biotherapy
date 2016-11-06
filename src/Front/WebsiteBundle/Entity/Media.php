<?php

namespace Front\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Media
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Front\WebsiteBundle\Entity\MediaRepository")
 */
class Media
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
     * @Assert\File(maxSize="6000000")
     */
    public $file;
    private $tempFilename;
    
    /**
     * @var string
     *
     * @ORM\Column(name="url_preview", type="string", length=255)
     */
    private $urlPreview;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;
    
    /**
     * @var boolean 
     *
     * @ORM\Column(name="download", type="boolean")
     */
    private $download;


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
     * @return Media
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
     * @return Media
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
     * Set type
     *
     * @param string $type
     * @return Media
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set urlPreview
     *
     * @param string $urlPreview
     * @return Media
     */
    public function setUrlPreview($urlPreview)
    {
        $this->urlPreview = $urlPreview;

        return $this;
    }

    /**
     * Get urlPreview
     *
     * @return string 
     */
    public function getUrlPreview()
    {
        return $this->urlPreview;
    }
    
    /**
     * Method for upload
     */
	/**
	 * @ORM\PostPersist()
	 * @ORM\PostUpdate()
	 */
    public function upload()
	{
		if (null === $this->file)
		  return;

		$name = $this->file->getClientOriginalName();
		$this->file->move($this->getUploadRootDir(), $name);
		$this->url = $this->getUploadDir().'/'.$name;
		$this->urlPreview = $this->getPreviewDir().'/'.$name;
		$this->type = $this->file->guessExtension();
	}
    
    /*public function getAbsoluteUrl()
    {
        return null === $this->url ? null : $this->getUploadRootDir().'/'.$this->path;
    }

    public function getWebUrl()
    {
        return null === $this->url ? null : $this->getUploadDir().'/'.$this->path;
    }*/

    protected function getUploadRootDir()
    {
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        return 'misc/medias/others';
    }
    protected function getPreviewDir()
    {
        return 'misc/medias/preview';
    }

    /**
     * Set download
     *
     * @param boolean $download
     * @return Media
     */
    public function setDownload($download)
    {
        $this->download = $download;

        return $this;
    }

    /**
     * Get download
     *
     * @return boolean
     */
    public function getDownload()
    {
        return $this->download;
    }
}
