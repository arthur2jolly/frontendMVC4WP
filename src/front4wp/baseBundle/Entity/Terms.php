<?php

namespace front4wp\baseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Terms
 *
 * @ORM\Table(name="wp_terms")
 * @ORM\Entity(repositoryClass="front4wp\baseBundle\Entity\TermsRepository")
 */
class Terms
{
    /**
     * @var integer
     *
     * @ORM\Column(name="term_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=200)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=200)
     */
    private $slug;

    /**
     * @var integer
     *
     * @ORM\Column(name="term_group", type="bigint")
     */
    private $termGroup;


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
     * @return Terms
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
     * Set slug
     *
     * @param string $slug
     * @return Terms
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    
        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set termGroup
     *
     * @param integer $termGroup
     * @return Terms
     */
    public function setTermGroup($termGroup)
    {
        $this->termGroup = $termGroup;
    
        return $this;
    }

    /**
     * Get termGroup
     *
     * @return integer 
     */
    public function getTermGroup()
    {
        return $this->termGroup;
    }
}
