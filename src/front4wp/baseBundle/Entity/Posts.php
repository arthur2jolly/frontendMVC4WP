<?php

namespace front4wp\baseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Posts
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="front4wp\baseBundle\Entity\PostsRepository")
 */
class Posts
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
     * @var integer
     *
     * @ORM\Column(name="post_author", type="bigint")
     */
    private $postAuthor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="post_date", type="datetime")
     */
    private $postDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="post_date_gmt", type="datetime")
     */
    private $postDateGmt;

    /**
     * @var string
     *
     * @ORM\Column(name="post_content", type="text")
     */
    private $postContent;

    /**
     * @var string
     *
     * @ORM\Column(name="post_title", type="text")
     */
    private $postTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="post_excerpt", type="text")
     */
    private $postExcerpt;

    /**
     * @var string
     *
     * @ORM\Column(name="post_status", type="string", length=20)
     */
    private $postStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="comment_status", type="string", length=20)
     */
    private $commentStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="ping_status", type="string", length=20)
     */
    private $pingStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="post_password", type="string", length=20)
     */
    private $postPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="post_name", type="string", length=200)
     */
    private $postName;

    /**
     * @var string
     *
     * @ORM\Column(name="to_ping", type="text")
     */
    private $toPing;

    /**
     * @var string
     *
     * @ORM\Column(name="pinged", type="text")
     */
    private $pinged;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="post_modified", type="datetime")
     */
    private $postModified;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="post_modified_gmt", type="datetime")
     */
    private $postModifiedGmt;

    /**
     * @var string
     *
     * @ORM\Column(name="post_content_filtered", type="text")
     */
    private $postContentFiltered;

    /**
     * @var integer
     *
     * @ORM\Column(name="post_parent", type="bigint")
     */
    private $postParent;

    /**
     * @var string
     *
     * @ORM\Column(name="guid", type="string", length=255)
     */
    private $guid;

    /**
     * @var integer
     *
     * @ORM\Column(name="menu_order", type="integer")
     */
    private $menuOrder;

    /**
     * @var string
     *
     * @ORM\Column(name="post_type", type="string", length=20)
     */
    private $postType;

    /**
     * @var string
     *
     * @ORM\Column(name="post_mime_type", type="string", length=100)
     */
    private $postMimeType;

    /**
     * @var integer
     *
     * @ORM\Column(name="comment_count", type="bigint")
     */
    private $commentCount;


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
     * Set postAuthor
     *
     * @param integer $postAuthor
     * @return Posts
     */
    public function setPostAuthor($postAuthor)
    {
        $this->postAuthor = $postAuthor;
    
        return $this;
    }

    /**
     * Get postAuthor
     *
     * @return integer 
     */
    public function getPostAuthor()
    {
        return $this->postAuthor;
    }

    /**
     * Set postDate
     *
     * @param \DateTime $postDate
     * @return Posts
     */
    public function setPostDate($postDate)
    {
        $this->postDate = $postDate;
    
        return $this;
    }

    /**
     * Get postDate
     *
     * @return \DateTime 
     */
    public function getPostDate()
    {
        return $this->postDate;
    }

    /**
     * Set postDateGmt
     *
     * @param \DateTime $postDateGmt
     * @return Posts
     */
    public function setPostDateGmt($postDateGmt)
    {
        $this->postDateGmt = $postDateGmt;
    
        return $this;
    }

    /**
     * Get postDateGmt
     *
     * @return \DateTime 
     */
    public function getPostDateGmt()
    {
        return $this->postDateGmt;
    }

    /**
     * Set postContent
     *
     * @param string $postContent
     * @return Posts
     */
    public function setPostContent($postContent)
    {
        $this->postContent = $postContent;
    
        return $this;
    }

    /**
     * Get postContent
     *
     * @return string 
     */
    public function getPostContent()
    {
        return $this->postContent;
    }

    /**
     * Set postTitle
     *
     * @param string $postTitle
     * @return Posts
     */
    public function setPostTitle($postTitle)
    {
        $this->postTitle = $postTitle;
    
        return $this;
    }

    /**
     * Get postTitle
     *
     * @return string 
     */
    public function getPostTitle()
    {
        return $this->postTitle;
    }

    /**
     * Set postExcerpt
     *
     * @param string $postExcerpt
     * @return Posts
     */
    public function setPostExcerpt($postExcerpt)
    {
        $this->postExcerpt = $postExcerpt;
    
        return $this;
    }

    /**
     * Get postExcerpt
     *
     * @return string 
     */
    public function getPostExcerpt()
    {
        return $this->postExcerpt;
    }

    /**
     * Set postStatus
     *
     * @param string $postStatus
     * @return Posts
     */
    public function setPostStatus($postStatus)
    {
        $this->postStatus = $postStatus;
    
        return $this;
    }

    /**
     * Get postStatus
     *
     * @return string 
     */
    public function getPostStatus()
    {
        return $this->postStatus;
    }

    /**
     * Set commentStatus
     *
     * @param string $commentStatus
     * @return Posts
     */
    public function setCommentStatus($commentStatus)
    {
        $this->commentStatus = $commentStatus;
    
        return $this;
    }

    /**
     * Get commentStatus
     *
     * @return string 
     */
    public function getCommentStatus()
    {
        return $this->commentStatus;
    }

    /**
     * Set pingStatus
     *
     * @param string $pingStatus
     * @return Posts
     */
    public function setPingStatus($pingStatus)
    {
        $this->pingStatus = $pingStatus;
    
        return $this;
    }

    /**
     * Get pingStatus
     *
     * @return string 
     */
    public function getPingStatus()
    {
        return $this->pingStatus;
    }

    /**
     * Set postPassword
     *
     * @param string $postPassword
     * @return Posts
     */
    public function setPostPassword($postPassword)
    {
        $this->postPassword = $postPassword;
    
        return $this;
    }

    /**
     * Get postPassword
     *
     * @return string 
     */
    public function getPostPassword()
    {
        return $this->postPassword;
    }

    /**
     * Set postName
     *
     * @param string $postName
     * @return Posts
     */
    public function setPostName($postName)
    {
        $this->postName = $postName;
    
        return $this;
    }

    /**
     * Get postName
     *
     * @return string 
     */
    public function getPostName()
    {
        return $this->postName;
    }

    /**
     * Set toPing
     *
     * @param string $toPing
     * @return Posts
     */
    public function setToPing($toPing)
    {
        $this->toPing = $toPing;
    
        return $this;
    }

    /**
     * Get toPing
     *
     * @return string 
     */
    public function getToPing()
    {
        return $this->toPing;
    }

    /**
     * Set pinged
     *
     * @param string $pinged
     * @return Posts
     */
    public function setPinged($pinged)
    {
        $this->pinged = $pinged;
    
        return $this;
    }

    /**
     * Get pinged
     *
     * @return string 
     */
    public function getPinged()
    {
        return $this->pinged;
    }

    /**
     * Set postModified
     *
     * @param \DateTime $postModified
     * @return Posts
     */
    public function setPostModified($postModified)
    {
        $this->postModified = $postModified;
    
        return $this;
    }

    /**
     * Get postModified
     *
     * @return \DateTime 
     */
    public function getPostModified()
    {
        return $this->postModified;
    }

    /**
     * Set postModifiedGmt
     *
     * @param \DateTime $postModifiedGmt
     * @return Posts
     */
    public function setPostModifiedGmt($postModifiedGmt)
    {
        $this->postModifiedGmt = $postModifiedGmt;
    
        return $this;
    }

    /**
     * Get postModifiedGmt
     *
     * @return \DateTime 
     */
    public function getPostModifiedGmt()
    {
        return $this->postModifiedGmt;
    }

    /**
     * Set postContentFiltered
     *
     * @param string $postContentFiltered
     * @return Posts
     */
    public function setPostContentFiltered($postContentFiltered)
    {
        $this->postContentFiltered = $postContentFiltered;
    
        return $this;
    }

    /**
     * Get postContentFiltered
     *
     * @return string 
     */
    public function getPostContentFiltered()
    {
        return $this->postContentFiltered;
    }

    /**
     * Set postParent
     *
     * @param integer $postParent
     * @return Posts
     */
    public function setPostParent($postParent)
    {
        $this->postParent = $postParent;
    
        return $this;
    }

    /**
     * Get postParent
     *
     * @return integer 
     */
    public function getPostParent()
    {
        return $this->postParent;
    }

    /**
     * Set guid
     *
     * @param string $guid
     * @return Posts
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;
    
        return $this;
    }

    /**
     * Get guid
     *
     * @return string 
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * Set menuOrder
     *
     * @param integer $menuOrder
     * @return Posts
     */
    public function setMenuOrder($menuOrder)
    {
        $this->menuOrder = $menuOrder;
    
        return $this;
    }

    /**
     * Get menuOrder
     *
     * @return integer 
     */
    public function getMenuOrder()
    {
        return $this->menuOrder;
    }

    /**
     * Set postType
     *
     * @param string $postType
     * @return Posts
     */
    public function setPostType($postType)
    {
        $this->postType = $postType;
    
        return $this;
    }

    /**
     * Get postType
     *
     * @return string 
     */
    public function getPostType()
    {
        return $this->postType;
    }

    /**
     * Set postMimeType
     *
     * @param string $postMimeType
     * @return Posts
     */
    public function setPostMimeType($postMimeType)
    {
        $this->postMimeType = $postMimeType;
    
        return $this;
    }

    /**
     * Get postMimeType
     *
     * @return string 
     */
    public function getPostMimeType()
    {
        return $this->postMimeType;
    }

    /**
     * Set commentCount
     *
     * @param integer $commentCount
     * @return Posts
     */
    public function setCommentCount($commentCount)
    {
        $this->commentCount = $commentCount;
    
        return $this;
    }

    /**
     * Get commentCount
     *
     * @return integer 
     */
    public function getCommentCount()
    {
        return $this->commentCount;
    }
}
