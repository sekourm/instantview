<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invitations
 *
 * @ORM\Table(name="invitations")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\InvitationsRepository")
 */
class Invitations
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Users", inversedBy="sender")
     * @ORM\JoinColumn(name="user_invit_sender", referencedColumnName="id", nullable=false)
     */
    private $user_invit_sender;

    /**
     * @ORM\ManyToOne(targetEntity="Users", inversedBy="recever")
     * @ORM\JoinColumn(name="user_invit_recever", referencedColumnName="id", nullable=false)
     */
    private $user_invit_recever;

    /**
     * @ORM\Column(name="response", type="text", length=20 )
     */
    private $response;

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
     * Set sender
     *
     * @param integer $sender
     * @return Invitations
     */
    public function setSender($sender)
    {
        $this->sender = $sender;

        return $this;
    }

    /**
     * Get sender
     *
     * @return integer
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * Set recever
     *
     * @param integer $recever
     * @return Invitations
     */
    public function setRecever($recever)
    {
        $this->recever = $recever;

        return $this;
    }

    /**
     * Get recever
     *
     * @return integer
     */
    public function getRecever()
    {
        return $this->recever;
    }

    /**
     * Set response
     *
     * @param string $response
     * @return Invitations
     */
    public function setResponse($response)
    {
        $this->response = $response;

        return $this;
    }

    /**
     * Get response
     *
     * @return string
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Set user_invit_sender
     *
     * @param \AppBundle\Entity\Users $userInvitSender
     * @return Invitations
     */
    public function setUserInvitSender(\AppBundle\Entity\Users $userInvitSender)
    {
        $this->user_invit_sender = $userInvitSender;

        return $this;
    }

    /**
     * Get user_invit_sender
     *
     * @return \AppBundle\Entity\Users 
     */
    public function getUserInvitSender()
    {
        return $this->user_invit_sender;
    }

    /**
     * Set user_invit_recever
     *
     * @param \AppBundle\Entity\Users $userInvitRecever
     * @return Invitations
     */
    public function setUserInvitRecever(\AppBundle\Entity\Users $userInvitRecever)
    {
        $this->user_invit_recever = $userInvitRecever;

        return $this;
    }

    /**
     * Get user_invit_recever
     *
     * @return \AppBundle\Entity\Users 
     */
    public function getUserInvitRecever()
    {
        return $this->user_invit_recever;
    }
}
