<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comments
 *
 * @ORM\Table(name="comments")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CommentsRepository")
 */
class Comments
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
     * @ORM\Column(name="content", type="text", length=4294967295)
     */
    private $content;

    /**
     * @ORM\ManyToOne(targetEntity="Users", inversedBy="comment")
     * @ORM\JoinColumn(name="user_id",referencedColumnName="id", nullable=false)
     */

    private $user_comment_id;

    /**
     * @ORM\ManyToOne(targetEntity="Articles", inversedBy="comment_article")
     * @ORM\JoinColumn(name="article_id",referencedColumnName="id", nullable=false)
     */
    private $article_comment_id;

    /**
     * @ORM\Column(name="active", type="boolean")
     */
    private $active;

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
     * Set content
     *
     * @param string $content
     * @return Comments
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return Comments
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
     * Set user_comment_id
     *
     * @param \AppBundle\Entity\Users $userCommentId
     * @return Comments
     */
    public function setUserCommentId(\AppBundle\Entity\Users $userCommentId)
    {
        $this->user_comment_id = $userCommentId;

        return $this;
    }

    /**
     * Get user_comment_id
     *
     * @return \AppBundle\Entity\Users 
     */
    public function getUserCommentId()
    {
        return $this->user_comment_id;
    }

    /**
     * Set article_comment_id
     *
     * @param \AppBundle\Entity\Articles $articleCommentId
     * @return Comments
     */
    public function setArticleCommentId(\AppBundle\Entity\Articles $articleCommentId)
    {
        $this->article_comment_id = $articleCommentId;

        return $this;
    }

    /**
     * Get article_comment_id
     *
     * @return \AppBundle\Entity\Articles 
     */
    public function getArticleCommentId()
    {
        return $this->article_comment_id;
    }
}
