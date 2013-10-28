<?php

namespace front4wp\baseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comments
 *
 * @ORM\Table(name="wp_comments")
 * @ORM\Entity(repositoryClass="front4wp\baseBundle\Entity\CommentsRepository")
 */
class Comments
{
    /**
     * @var integer
     *
     * @ORM\Column(name="comment_ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="comment_post_ID", type="bigint")
     */
    private $commentPostID;

    /**
     * @var string
     *
     * @ORM\Column(name="comment_author", type="text")
     */
    private $commentAuthor;

    /**
     * @var string
     *
     * @ORM\Column(name="comment_author_email", type="string", length=100)
     */
    private $commentAuthorEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="comment_author_url", type="string", length=200)
     */
    private $commentAuthorUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="comment_author_IP", type="string", length=100)
     */
    private $commentAuthorIP;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="comment_date", type="datetime")
     */
    private $commentDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="comment_date_gmt", type="datetime")
     */
    private $commentDateGmt;

    /**
     * @var string
     *
     * @ORM\Column(name="comment_content", type="text")
     */
    private $commentContent;

    /**
     * @var integer
     *
     * @ORM\Column(name="comment_karma", type="integer")
     */
    private $commentKarma;

    /**
     * @var string
     *
     * @ORM\Column(name="comment_approved", type="string", length=20)
     */
    private $commentApproved;

    /**
     * @var string
     *
     * @ORM\Column(name="comment_agent", type="string", length=255)
     */
    private $commentAgent;

    /**
     * @var string
     *
     * @ORM\Column(name="comment_type", type="string", length=20)
     */
    private $commentType;

    /**
     * @var integer
     *
     * @ORM\Column(name="comment_parent", type="bigint")
     */
    private $commentParent;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="bigint")
     */
    private $userId;


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
     * Set commentPostID
     *
     * @param integer $commentPostID
     * @return Comments
     */
    public function setCommentPostID($commentPostID)
    {
        $this->commentPostID = $commentPostID;
    
        return $this;
    }

    /**
     * Get commentPostID
     *
     * @return integer 
     */
    public function getCommentPostID()
    {
        return $this->commentPostID;
    }

    /**
     * Set commentAuthor
     *
     * @param string $commentAuthor
     * @return Comments
     */
    public function setCommentAuthor($commentAuthor)
    {
        $this->commentAuthor = $commentAuthor;
    
        return $this;
    }

    /**
     * Get commentAuthor
     *
     * @return string 
     */
    public function getCommentAuthor()
    {
        return $this->commentAuthor;
    }

    /**
     * Set commentAuthorEmail
     *
     * @param string $commentAuthorEmail
     * @return Comments
     */
    public function setCommentAuthorEmail($commentAuthorEmail)
    {
        $this->commentAuthorEmail = $commentAuthorEmail;
    
        return $this;
    }

    /**
     * Get commentAuthorEmail
     *
     * @return string 
     */
    public function getCommentAuthorEmail()
    {
        return $this->commentAuthorEmail;
    }

    /**
     * Set commentAuthorUrl
     *
     * @param string $commentAuthorUrl
     * @return Comments
     */
    public function setCommentAuthorUrl($commentAuthorUrl)
    {
        $this->commentAuthorUrl = $commentAuthorUrl;
    
        return $this;
    }

    /**
     * Get commentAuthorUrl
     *
     * @return string 
     */
    public function getCommentAuthorUrl()
    {
        return $this->commentAuthorUrl;
    }

    /**
     * Set commentAuthorIP
     *
     * @param string $commentAuthorIP
     * @return Comments
     */
    public function setCommentAuthorIP($commentAuthorIP)
    {
        $this->commentAuthorIP = $commentAuthorIP;
    
        return $this;
    }

    /**
     * Get commentAuthorIP
     *
     * @return string 
     */
    public function getCommentAuthorIP()
    {
        return $this->commentAuthorIP;
    }

    /**
     * Set commentDate
     *
     * @param \DateTime $commentDate
     * @return Comments
     */
    public function setCommentDate($commentDate)
    {
        $this->commentDate = $commentDate;
    
        return $this;
    }

    /**
     * Get commentDate
     *
     * @return \DateTime 
     */
    public function getCommentDate()
    {
        return $this->commentDate;
    }

    /**
     * Set commentDateGmt
     *
     * @param \DateTime $commentDateGmt
     * @return Comments
     */
    public function setCommentDateGmt($commentDateGmt)
    {
        $this->commentDateGmt = $commentDateGmt;
    
        return $this;
    }

    /**
     * Get commentDateGmt
     *
     * @return \DateTime 
     */
    public function getCommentDateGmt()
    {
        return $this->commentDateGmt;
    }

    /**
     * Set commentContent
     *
     * @param string $commentContent
     * @return Comments
     */
    public function setCommentContent($commentContent)
    {
        $this->commentContent = $commentContent;
    
        return $this;
    }

    /**
     * Get commentContent
     *
     * @return string 
     */
    public function getCommentContent()
    {
        return $this->commentContent;
    }

    /**
     * Set commentKarma
     *
     * @param integer $commentKarma
     * @return Comments
     */
    public function setCommentKarma($commentKarma)
    {
        $this->commentKarma = $commentKarma;
    
        return $this;
    }

    /**
     * Get commentKarma
     *
     * @return integer 
     */
    public function getCommentKarma()
    {
        return $this->commentKarma;
    }

    /**
     * Set commentApproved
     *
     * @param string $commentApproved
     * @return Comments
     */
    public function setCommentApproved($commentApproved)
    {
        $this->commentApproved = $commentApproved;
    
        return $this;
    }

    /**
     * Get commentApproved
     *
     * @return string 
     */
    public function getCommentApproved()
    {
        return $this->commentApproved;
    }

    /**
     * Set commentAgent
     *
     * @param string $commentAgent
     * @return Comments
     */
    public function setCommentAgent($commentAgent)
    {
        $this->commentAgent = $commentAgent;
    
        return $this;
    }

    /**
     * Get commentAgent
     *
     * @return string 
     */
    public function getCommentAgent()
    {
        return $this->commentAgent;
    }

    /**
     * Set commentType
     *
     * @param string $commentType
     * @return Comments
     */
    public function setCommentType($commentType)
    {
        $this->commentType = $commentType;
    
        return $this;
    }

    /**
     * Get commentType
     *
     * @return string 
     */
    public function getCommentType()
    {
        return $this->commentType;
    }

    /**
     * Set commentParent
     *
     * @param integer $commentParent
     * @return Comments
     */
    public function setCommentParent($commentParent)
    {
        $this->commentParent = $commentParent;
    
        return $this;
    }

    /**
     * Get commentParent
     *
     * @return integer 
     */
    public function getCommentParent()
    {
        return $this->commentParent;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return Comments
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    
        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }
}
