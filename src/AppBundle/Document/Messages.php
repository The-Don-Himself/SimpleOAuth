<?php

namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Doctrine\Common\Collections\ArrayCollection;

/**
* @ODM\EmbeddedDocument
*/
class Messages
{
    /**
     * @ODM\Id(strategy="NONE", type="int")
     * @ODM\Index(background=true)
     */
    protected $id;

    /**
     * @ODM\Field(type="string")
    */
    protected $title;

    /**
     * @ODM\Field(type="string")
    */
    protected $message;

    /**
    * @ODM\EmbedOne(targetDocument="OrmProfiles")
    */
    protected $sent_by;

    /**
    * @ODM\Field(type="date")
    * @ODM\Index(background=true)
    */
    protected $sent_on;

    /**
    * @ODM\Field(type="date")
    * @ODM\Index(background=true)
    */
    protected $edited_on;

    /**
    * @ODM\Field(type="int")
    * @ODM\Index(background=true)
    */
    protected $status = 0;

    /**
     * @ODM\EmbedOne(targetDocument="OrmApps")
    */
    protected $via_app;

    /**
     * @ODM\Field(type="int", strategy="increment")
     * @ODM\Index(background=true)
    */
    protected $active_replies;

    /**
     * @ODM\Field(type="int", strategy="increment")
     * @ODM\Index(background=true)
    */
    protected $total_replies;

    /**
    * @ODM\EmbedMany(targetDocument="Messages")
    */
    protected $replies = array();

    public function __construct()
    {
        $this->replies = new ArrayCollection();
    }



    /**
     * Set id
     *
     * @param int $id
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
     * Set title
     *
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Get title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return $this
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * Get message
     *
     * @return string $message
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set sentBy
     *
     * @param AppBundle\Document\OrmProfiles $sentBy
     * @return $this
     */
    public function setSentBy(\AppBundle\Document\OrmProfiles $sentBy)
    {
        $this->sent_by = $sentBy;
        return $this;
    }

    /**
     * Get sentBy
     *
     * @return AppBundle\Document\OrmProfiles $sentBy
     */
    public function getSentBy()
    {
        return $this->sent_by;
    }

    /**
     * Set sentOn
     *
     * @param date $sentOn
     * @return $this
     */
    public function setSentOn($sentOn)
    {
        $this->sent_on = $sentOn;
        return $this;
    }

    /**
     * Get sentOn
     *
     * @return date $sentOn
     */
    public function getSentOn()
    {
        return $this->sent_on;
    }

    /**
     * Set editedOn
     *
     * @param date $editedOn
     * @return $this
     */
    public function setEditedOn($editedOn)
    {
        $this->edited_on = $editedOn;
        return $this;
    }

    /**
     * Get editedOn
     *
     * @return date $editedOn
     */
    public function getEditedOn()
    {
        return $this->edited_on;
    }

    /**
     * Set status
     *
     * @param int $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Get status
     *
     * @return int $status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set viaApp
     *
     * @param AppBundle\Document\OrmApps $viaApp
     * @return $this
     */
    public function setViaApp(\AppBundle\Document\OrmApps $viaApp)
    {
        $this->via_app = $viaApp;
        return $this;
    }

    /**
     * Get viaApp
     *
     * @return AppBundle\Document\OrmApps $viaApp
     */
    public function getViaApp()
    {
        return $this->via_app;
    }

    /**
     * Set activeReplies
     *
     * @param int $activeReplies
     * @return $this
     */
    public function setActiveReplies($activeReplies)
    {
        $this->active_replies = $activeReplies;
        return $this;
    }

    /**
     * Get activeReplies
     *
     * @return int $activeReplies
     */
    public function getActiveReplies()
    {
        return $this->active_replies;
    }

    /**
     * Set totalReplies
     *
     * @param int $totalReplies
     * @return $this
     */
    public function setTotalReplies($totalReplies)
    {
        $this->total_replies = $totalReplies;
        return $this;
    }

    /**
     * Get totalReplies
     *
     * @return int $totalReplies
     */
    public function getTotalReplies()
    {
        return $this->total_replies;
    }

    /**
     * Add reply
     *
     * @param AppBundle\Document\Messages $reply
     */
    public function addReply(\AppBundle\Document\Messages $reply)
    {
        $this->replies[] = $reply;
    }

    /**
     * Remove reply
     *
     * @param AppBundle\Document\Messages $reply
     */
    public function removeReply(\AppBundle\Document\Messages $reply)
    {
        $this->replies->removeElement($reply);
    }

    /**
     * Get replies
     *
     * @return \Doctrine\Common\Collections\Collection $replies
     */
    public function getReplies()
    {
        return $this->replies;
    }
}
