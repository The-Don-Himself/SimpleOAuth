<?php

namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ODM\Document(repositoryClass="AppBundle\DocumentRepository\ArticleCommentsRepository")
 * @ODM\ShardKey(keys={"_id"="hashed"})
 */
class ArticleComments
{
    /**
    * @ODM\Id(strategy="NONE", type="int")
    */
    protected $id;

    /**
    * @ODM\EmbedMany(targetDocument="Messages",strategy="pushAll")
    */
    protected $messages = array();
    public function __construct()    
    {
        $this->messages = new ArrayCollection();
    
    }


    /**
     * Set id
     *
     * @param  int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Get id
     *
     * @return int $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add message
     *
     * @param AppBundle\Document\Messages $message
     */
    public function addMessage(\AppBundle\Document\Messages $message)
    {
        $this->messages[] = $message;
    }

    /**
     * Remove message
     *
     * @param AppBundle\Document\Messages $message
     */
    public function removeMessage(\AppBundle\Document\Messages $message)
    {
        $this->messages->removeElement($message);
    }

    /**
     * Get messages
     *
     * @return \Doctrine\Common\Collections\Collection $messages
     */
    public function getMessages()
    {
        return $this->messages;
    }

}
