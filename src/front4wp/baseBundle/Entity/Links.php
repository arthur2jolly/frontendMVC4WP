<?php

namespace front4wp\baseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Links
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="front4wp\baseBundle\Entity\LinksRepository")
 */
class Links
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
     * @ORM\Column(name="link_url", type="string", length=255)
     */
    private $linkUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="link_name", type="string", length=255)
     */
    private $linkName;

    /**
     * @var string
     *
     * @ORM\Column(name="link_image", type="string", length=255)
     */
    private $linkImage;

    /**
     * @var string
     *
     * @ORM\Column(name="link_target", type="string", length=25)
     */
    private $linkTarget;

    /**
     * @var string
     *
     * @ORM\Column(name="link_description", type="string", length=255)
     */
    private $linkDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="link_visible", type="string", length=20)
     */
    private $linkVisible;

    /**
     * @var integer
     *
     * @ORM\Column(name="link_owner", type="bigint")
     */
    private $linkOwner;

    /**
     * @var integer
     *
     * @ORM\Column(name="link_rating", type="integer")
     */
    private $linkRating;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="link_updated", type="datetime")
     */
    private $linkUpdated;

    /**
     * @var string
     *
     * @ORM\Column(name="link_rel", type="string", length=255)
     */
    private $linkRel;

    /**
     * @var string
     *
     * @ORM\Column(name="link_notes", type="text")
     */
    private $linkNotes;

    /**
     * @var string
     *
     * @ORM\Column(name="link_rss", type="string", length=255)
     */
    private $linkRss;


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
     * Set linkUrl
     *
     * @param string $linkUrl
     * @return Links
     */
    public function setLinkUrl($linkUrl)
    {
        $this->linkUrl = $linkUrl;
    
        return $this;
    }

    /**
     * Get linkUrl
     *
     * @return string 
     */
    public function getLinkUrl()
    {
        return $this->linkUrl;
    }

    /**
     * Set linkName
     *
     * @param string $linkName
     * @return Links
     */
    public function setLinkName($linkName)
    {
        $this->linkName = $linkName;
    
        return $this;
    }

    /**
     * Get linkName
     *
     * @return string 
     */
    public function getLinkName()
    {
        return $this->linkName;
    }

    /**
     * Set linkImage
     *
     * @param string $linkImage
     * @return Links
     */
    public function setLinkImage($linkImage)
    {
        $this->linkImage = $linkImage;
    
        return $this;
    }

    /**
     * Get linkImage
     *
     * @return string 
     */
    public function getLinkImage()
    {
        return $this->linkImage;
    }

    /**
     * Set linkTarget
     *
     * @param string $linkTarget
     * @return Links
     */
    public function setLinkTarget($linkTarget)
    {
        $this->linkTarget = $linkTarget;
    
        return $this;
    }

    /**
     * Get linkTarget
     *
     * @return string 
     */
    public function getLinkTarget()
    {
        return $this->linkTarget;
    }

    /**
     * Set linkDescription
     *
     * @param string $linkDescription
     * @return Links
     */
    public function setLinkDescription($linkDescription)
    {
        $this->linkDescription = $linkDescription;
    
        return $this;
    }

    /**
     * Get linkDescription
     *
     * @return string 
     */
    public function getLinkDescription()
    {
        return $this->linkDescription;
    }

    /**
     * Set linkVisible
     *
     * @param string $linkVisible
     * @return Links
     */
    public function setLinkVisible($linkVisible)
    {
        $this->linkVisible = $linkVisible;
    
        return $this;
    }

    /**
     * Get linkVisible
     *
     * @return string 
     */
    public function getLinkVisible()
    {
        return $this->linkVisible;
    }

    /**
     * Set linkOwner
     *
     * @param integer $linkOwner
     * @return Links
     */
    public function setLinkOwner($linkOwner)
    {
        $this->linkOwner = $linkOwner;
    
        return $this;
    }

    /**
     * Get linkOwner
     *
     * @return integer 
     */
    public function getLinkOwner()
    {
        return $this->linkOwner;
    }

    /**
     * Set linkRating
     *
     * @param integer $linkRating
     * @return Links
     */
    public function setLinkRating($linkRating)
    {
        $this->linkRating = $linkRating;
    
        return $this;
    }

    /**
     * Get linkRating
     *
     * @return integer 
     */
    public function getLinkRating()
    {
        return $this->linkRating;
    }

    /**
     * Set linkUpdated
     *
     * @param \DateTime $linkUpdated
     * @return Links
     */
    public function setLinkUpdated($linkUpdated)
    {
        $this->linkUpdated = $linkUpdated;
    
        return $this;
    }

    /**
     * Get linkUpdated
     *
     * @return \DateTime 
     */
    public function getLinkUpdated()
    {
        return $this->linkUpdated;
    }

    /**
     * Set linkRel
     *
     * @param string $linkRel
     * @return Links
     */
    public function setLinkRel($linkRel)
    {
        $this->linkRel = $linkRel;
    
        return $this;
    }

    /**
     * Get linkRel
     *
     * @return string 
     */
    public function getLinkRel()
    {
        return $this->linkRel;
    }

    /**
     * Set linkNotes
     *
     * @param string $linkNotes
     * @return Links
     */
    public function setLinkNotes($linkNotes)
    {
        $this->linkNotes = $linkNotes;
    
        return $this;
    }

    /**
     * Get linkNotes
     *
     * @return string 
     */
    public function getLinkNotes()
    {
        return $this->linkNotes;
    }

    /**
     * Set linkRss
     *
     * @param string $linkRss
     * @return Links
     */
    public function setLinkRss($linkRss)
    {
        $this->linkRss = $linkRss;
    
        return $this;
    }

    /**
     * Get linkRss
     *
     * @return string 
     */
    public function getLinkRss()
    {
        return $this->linkRss;
    }
}
