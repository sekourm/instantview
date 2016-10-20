<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use \Doctrine\Common\Collections\ArrayCollection;

/**
 * Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UsersRepository")
 * @UniqueEntity(fields={"email"}, message="Email est déjà utilisée")
 * @UniqueEntity(fields={"username"}, message="Username est déjà utilisé")
 */

class Users
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="Articles", mappedBy="users")
     */
    private $articles;

    /**
     * @ORM\OneToMany(targetEntity="Album_profil", mappedBy="users")
     */
    private $album_profil;

    /**
     * @ORM\OneToMany(targetEntity="Album_couverture", mappedBy="users")
     */
    private $album_couverture;

    /**
     * @ORM\OneToOne(targetEntity="Photos", mappedBy="photo")
     */

    private $user_photo;

    /**
     * @ORM\OneToMany(targetEntity="Friends", mappedBy="user_friend_one")
     */
    private $friend_one;

    /**
     * @ORM\OneToMany(targetEntity="Friends", mappedBy="user_friend_two")
     */
    private $friend_two;









    /**
     * @ORM\OneToMany(targetEntity="Invitations", mappedBy="users")
     */
    private $sender;

    /**
     * @ORM\OneToMany(targetEntity="Invitations", mappedBy="users")
     */
    private $recever;















    /**
     *
     * @Assert\Length(
     *      min = 4,
     *      max = 50,
     *      minMessage = "Username minimum: {{ limit }} characters",
     *      maxMessage = "Username maximum: {{ limit }} characters"
     * )
     *
     * @ORM\Column(name="username", type="string" , length=50, unique=true)
     */
    private $username;

    /**
     *
     * @Assert\Length(
     *      min = 3,
     *      max = 15,
     *      minMessage = "Prénom minimum {{ limit }} characters",
     *      maxMessage = "Prénom maximum {{ limit }} characters"
     * )
     *
     * @ORM\Column(name="name", type="string")
     */
    private $name;

    /**
     *
     * @Assert\Length(
     *      min = 3,
     *      max = 15,
     *      minMessage = "Nom minimum {{ limit }} characters",
     *      maxMessage = "Nom maximum {{ limit }} characters"
     * )
     *
     * @ORM\Column(name="lastname", type="string")
     */
    private $lastname;

    /**
     *
     * @Assert\Length(
     *      min = 6,
     *      minMessage = "Mot de passe minimum {{ limit }} characters",
     * )
     *
     * @ORM\Column(name="password", type="string")
     */
    private $password;

    /**
     *
     * @Assert\Email(
     *     message = "Cette email : '{{ value }}' n'est pas une adresse email valide.",
     *     checkMX = true
     * )
     *
     *
     * @ORM\Column(name="email", type="string", unique=true)
     */
    private $email;

    /**
     *
     * @ORM\Column(name="salt", type="string")
     */

    private $salt;



    /**
     *
     * @ORM\Column(name="role", type="boolean")
     */

    private $role;



    /**
     *
     * @ORM\Column(name="is_connect", type="boolean")
     */

    private $is_connect;



    /**
     * @ORM\Column(name="last_connexion", type="datetime")
     */

    private $last_connexion;

    /**
     * @ORM\Column(name="created_at", type="datetime")
     */

    private $created_at;

    /**
     * @ORM\Column(name="updated_at", type="datetime")
     */

    private $updated_at;

    /**
     * @ORM\Column(name="active", type="boolean")
     */

    private $active;

    /**
     * @ORM\Column(name="private_key", type="string")
     */

    private $private_key;

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
     * Set username
     *
     * @param string $username
     * @return Users
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Users
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Users
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set salt
     *
     * @param string $salt
     * @return Users
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return Users
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Users
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
     * Set lastname
     *
     * @param string $lastname
     * @return Users
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set private_key
     *
     * @param string $privateKey
     * @return Users
     */
    public function setPrivateKey($privateKey)
    {
        $this->private_key = $privateKey;

        return $this;
    }

    /**
     * Get private_key
     *
     * @return string
     */
    public function getPrivateKey()
    {
        return $this->private_key;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->articles = new ArrayCollection();
    }

    /**
     * Add articles
     *
     * @param \AppBundle\Entity\Articles $articles
     * @return Users
     */
    public function addArticle(\AppBundle\Entity\Articles $articles)
    {
        $this->articles[] = $articles;

        return $this;
    }

    /**
     * Remove articles
     *
     * @param \AppBundle\Entity\Articles $articles
     */
    public function removeArticle(\AppBundle\Entity\Articles $articles)
    {
        $this->articles->removeElement($articles);
    }

    /**
     * Get articles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArticles()
    {
        return $this->articles;
    }

    /**
     * Set role
     *
     * @param boolean $role
     * @return Users
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return boolean
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set is_connect
     *
     * @param boolean $isConnect
     * @return Users
     */
    public function setIsConnect($isConnect)
    {
        $this->is_connect = $isConnect;

        return $this;
    }

    /**
     * Get is_connect
     *
     * @return boolean
     */
    public function getIsConnect()
    {
        return $this->is_connect;
    }

    /**
     * Set last_connexion
     *
     * @param \DateTime $lastConnexion
     * @return Users
     */
    public function setLastConnexion($lastConnexion)
    {
        $this->last_connexion = $lastConnexion;

        return $this;
    }

    /**
     * Get last_connexion
     *
     * @return \DateTime
     */
    public function getLastConnexion()
    {
        return $this->last_connexion;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Users
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set updated_at
     *
     * @param \DateTime $updatedAt
     * @return Users
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;

        return $this;
    }

    /**
     * Get updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Add album_profil
     *
     * @param \AppBundle\Entity\Album_profil $albumProfil
     * @return Users
     */
    public function addAlbumProfil(\AppBundle\Entity\Album_profil $albumProfil)
    {
        $this->album_profil[] = $albumProfil;

        return $this;
    }

    /**
     * Remove album_profil
     *
     * @param \AppBundle\Entity\Album_profil $albumProfil
     */
    public function removeAlbumProfil(\AppBundle\Entity\Album_profil $albumProfil)
    {
        $this->album_profil->removeElement($albumProfil);
    }

    /**
     * Get album_profil
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAlbumProfil()
    {
        return $this->album_profil;
    }

    /**
     * Add album_couverture
     *
     * @param \AppBundle\Entity\Album_couverture $albumCouverture
     * @return Users
     */
    public function addAlbumCouverture(\AppBundle\Entity\Album_couverture $albumCouverture)
    {
        $this->album_couverture[] = $albumCouverture;

        return $this;
    }

    /**
     * Remove album_couverture
     *
     * @param \AppBundle\Entity\Album_couverture $albumCouverture
     */
    public function removeAlbumCouverture(\AppBundle\Entity\Album_couverture $albumCouverture)
    {
        $this->album_couverture->removeElement($albumCouverture);
    }

    /**
     * Get album_couverture
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAlbumCouverture()
    {
        return $this->album_couverture;
    }

    /**
     * Set user_photo
     *
     * @param \AppBundle\Entity\Photos $userPhoto
     * @return Users
     */
    public function setUserPhoto(\AppBundle\Entity\Photos $userPhoto = null)
    {
        $this->user_photo = $userPhoto;

        return $this;
    }

    /**
     * Get user_photo
     *
     * @return \AppBundle\Entity\Photos
     */
    public function getUserPhoto()
    {
        return $this->user_photo;
    }

    /**
     * Add friend_one
     *
     * @param \AppBundle\Entity\Friends $friendOne
     * @return Users
     */
    public function addFriendOne(\AppBundle\Entity\Friends $friendOne)
    {
        $this->friend_one[] = $friendOne;

        return $this;
    }

    /**
     * Remove friend_one
     *
     * @param \AppBundle\Entity\Friends $friendOne
     */
    public function removeFriendOne(\AppBundle\Entity\Friends $friendOne)
    {
        $this->friend_one->removeElement($friendOne);
    }

    /**
     * Get friend_one
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFriendOne()
    {
        return $this->friend_one;
    }

    /**
     * Add friend_two
     *
     * @param \AppBundle\Entity\Friends $friendTwo
     * @return Users
     */
    public function addFriendTwo(\AppBundle\Entity\Friends $friendTwo)
    {
        $this->friend_two[] = $friendTwo;

        return $this;
    }

    /**
     * Remove friend_two
     *
     * @param \AppBundle\Entity\Friends $friendTwo
     */
    public function removeFriendTwo(\AppBundle\Entity\Friends $friendTwo)
    {
        $this->friend_two->removeElement($friendTwo);
    }

    /**
     * Get friend_two
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFriendTwo()
    {
        return $this->friend_two;
    }

    /**
     * Add sender
     *
     * @param \AppBundle\Entity\Invitations $sender
     * @return Users
     */
    public function addSender(\AppBundle\Entity\Invitations $sender)
    {
        $this->sender[] = $sender;

        return $this;
    }

    /**
     * Remove sender
     *
     * @param \AppBundle\Entity\Invitations $sender
     */
    public function removeSender(\AppBundle\Entity\Invitations $sender)
    {
        $this->sender->removeElement($sender);
    }

    /**
     * Get sender
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * Add recever
     *
     * @param \AppBundle\Entity\Invitations $recever
     * @return Users
     */
    public function addRecever(\AppBundle\Entity\Invitations $recever)
    {
        $this->recever[] = $recever;

        return $this;
    }

    /**
     * Remove recever
     *
     * @param \AppBundle\Entity\Invitations $recever
     */
    public function removeRecever(\AppBundle\Entity\Invitations $recever)
    {
        $this->recever->removeElement($recever);
    }

    /**
     * Get recever
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRecever()
    {
        return $this->recever;
    }
}
