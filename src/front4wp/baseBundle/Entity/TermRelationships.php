<?php

namespace front4wp\baseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TermRelationships
 *
 * @ORM\Table(name="wp_term_relationships")
 * @ORM\Entity(repositoryClass="front4wp\baseBundle\Entity\TermRelationshipsRepository")
 */
class TermRelationships
{
    /**
     * @var integer
     *
     * @ORM\Column(name="object_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="term_taxonomy_id", type="bigint")
     */
    private $termTaxonomyId;

    /**
     * @var integer
     *
     * @ORM\Column(name="term_order", type="integer")
     */
    private $termOrder;


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
     * Set termTaxonomyId
     *
     * @param integer $termTaxonomyId
     * @return TermRelationships
     */
    public function setTermTaxonomyId($termTaxonomyId)
    {
        $this->termTaxonomyId = $termTaxonomyId;
    
        return $this;
    }

    /**
     * Get termTaxonomyId
     *
     * @return integer 
     */
    public function getTermTaxonomyId()
    {
        return $this->termTaxonomyId;
    }

    /**
     * Set termOrder
     *
     * @param integer $termOrder
     * @return TermRelationships
     */
    public function setTermOrder($termOrder)
    {
        $this->termOrder = $termOrder;
    
        return $this;
    }

    /**
     * Get termOrder
     *
     * @return integer 
     */
    public function getTermOrder()
    {
        return $this->termOrder;
    }
}
