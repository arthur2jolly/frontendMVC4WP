<?php

namespace front4wp\baseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="wp_users")
 * @ORM\Entity(repositoryClass="front4wp\baseBundle\Entity\UsersRepository")
 */
class Users
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="user_login", type="string", length=60)
     */
    private $userLogin;

    /**
     * @var string
     *
     * @ORM\Column(name="user_pass", type="string", length=64)
     */
    private $userPass;

    /**
     * @var string
     *
     * @ORM\Column(name="user_nicename", type="string", length=50)
     */
    private $userNicename;

    /**
     * @var string
     *
     * @ORM\Column(name="user_email", type="string", length=100)
     */
    private $userEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="user_url", type="string", length=100)
     */
    private $userUrl;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="user_registred", type="datetime")
     */
    private $userRegistred;

    /**
     * @var string
     *
     * @ORM\Column(name="user_activation_key", type="string", length=60)
     */
    private $userActivationKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="user�_status", type="integer")
     */
    private $user�Status;

    /**
     * @var string
     *
     * @ORM\Column(name="display�_name", type="string", length=250)
     */
    private $display�Name;


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
     * Set userLogin
     *
     * @param string $userLogin
     * @return Users
     */
    public function setUserLogin($userLogin)
    {
        $this->userLogin = $userLogin;
    
        return $this;
    }

    /**
     * Get userLogin
     *
     * @return string 
     */
    public function getUserLogin()
    {
        return $this->userLogin;
    }

    /**
     * Set userPass
     *
     * @param string $userPass
     * @return Users
     */
    public function setUserPass($userPass)
    {
        $this->userPass = $userPass;
    
        return $this;
    }

    /**
     * Get userPass
     *
     * @return string 
     */
    public function getUserPass()
    {
        return $this->userPass;
    }

    /**
     * Set userNicename
     *
     * @param string $userNicename
     * @return Users
     */
    public function setUserNicename($userNicename)
    {
        $this->userNicename = $userNicename;
    
        return $this;
    }

    /**
     * Get userNicename
     *
     * @return string 
     */
    public function getUserNicename()
    {
        return $this->userNicename;
    }

    /**
     * Set userEmail
     *
     * @param string $userEmail
     * @return Users
     */
    public function setUserEmail($userEmail)
    {
        $this->userEmail = $userEmail;
    
        return $this;
    }

    /**
     * Get userEmail
     *
     * @return string 
     */
    public function getUserEmail()
    {
        return $this->userEmail;
    }

    /**
     * Set userUrl
     *
     * @param string $userUrl
     * @return Users
     */
    public function setUserUrl($userUrl)
    {
        $this->userUrl = $userUrl;
    
        return $this;
    }

    /**
     * Get userUrl
     *
     * @return string 
     */
    public function getUserUrl()
    {
        return $this->userUrl;
    }

    /**
     * Set userRegistred
     *
     * @param \DateTime $userRegistred
     * @return Users
     */
    public function setUserRegistred($userRegistred)
    {
        $this->userRegistred = $userRegistred;
    
        return $this;
    }

    /**
     * Get userRegistred
     *
     * @return \DateTime 
     */
    public function getUserRegistred()
    {
        return $this->userRegistred;
    }

    /**
     * Set userActivationKey
     *
     * @param string $userActivationKey
     * @return Users
     */
    public function setUserActivationKey($userActivationKey)
    {
        $this->userActivationKey = $userActivationKey;
    
        return $this;
    }

    /**
     * Get userActivationKey
     *
     * @return string 
     */
    public function getUserActivationKey()
    {
        return $this->userActivationKey;
    }

    /**
     * Set user�Status
     *
     * @param integer $user�Status
     * @return Users
     */
    public function setUser�Status($user�Status)
    {
        $this->user�Status = $user�Status;
    
        return $this;
    }

    /**
     * Get user�Status
     *
     * @return integer 
     */
    public function getUser�Status()
    {
        return $this->user�Status;
    }

    /**
     * Set display�Name
     *
     * @param string $display�Name
     * @return Users
     */
    public function setDisplay�Name($display�Name)
    {
        $this->display�Name = $display�Name;
    
        return $this;
    }

    /**
     * Get display�Name
     *
     * @return string 
     */
    public function getDisplay�Name()
    {
        return $this->display�Name;
    }
}
