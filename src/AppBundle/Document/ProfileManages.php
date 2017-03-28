<?php

namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
* @ODM\EmbeddedDocument
*/
class ProfileManages
{
    /**
     * @ODM\Id(strategy="NONE", type="int")
     * @ODM\Index(background=true)
     */
    protected $id;

    /**
    * @ODM\EmbedOne(targetDocument="OrmProfiles")
    */
    protected $managed_by;

    /**
    * @ODM\Field(type="date")
    * @ODM\Index(background=true)
    */
    protected $managed_on;

    /**
     * @ODM\Field(type="int")
     * @ODM\Index(background=true)
    */
    protected $status;

    /**
    * @ODM\Field(type="date")
    * @ODM\Index(background=true)
    */
    protected $unmanaged_on;

    /**
    * @ODM\Field(type="string")
    * @ODM\Index(background=true)
    */
    protected $department;

    /**
    * @ODM\Field(type="string")
    * @ODM\Index(background=true)
    */
    protected $slackchannel;

    /**
    * @ODM\Field(type="string")
    */
    protected $botuserid;

    /**
    * @ODM\Field(type="string")
    */
    protected $botaccesstoken;

    /**
    * @ODM\EmbedOne(targetDocument="OrmProfiles")
    */
    protected $added_by;

    /**
    * @ODM\EmbedOne(targetDocument="OrmProfiles")
    */
    protected $removed_by;

    /**
     * @ODM\EmbedOne(targetDocument="OrmApps")
    */
    protected $via_app;


    /**
* 
     * Set id
     *
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
* 
     * Get id
     *
     *
     * @return int $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
* 
     * Set managedBy
     *
     *
     * @param  AppBundle\Document\OrmProfiles $managedBy
     * @return $this
     */
    public function setManagedBy(\AppBundle\Document\OrmProfiles $managedBy)
    {
        $this->managed_by = $managedBy;
        return $this;
    }

    /**
* 
     * Get managedBy
     *
     *
     * @return AppBundle\Document\OrmProfiles $managedBy
     */
    public function getManagedBy()
    {
        return $this->managed_by;
    }

    /**
* 
     * Set managedOn
     *
     *
     * @param  date $managedOn
     * @return $this
     */
    public function setManagedOn($managedOn)
    {
        $this->managed_on = $managedOn;
        return $this;
    }

    /**
* 
     * Get managedOn
     *
     *
     * @return date $managedOn
     */
    public function getManagedOn()
    {
        return $this->managed_on;
    }

    /**
* 
     * Set status
     *
     *
     * @param  int $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
* 
     * Get status
     *
     *
     * @return int $status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
* 
     * Set unmanagedOn
     *
     *
     * @param  date $unmanagedOn
     * @return $this
     */
    public function setUnmanagedOn($unmanagedOn)
    {
        $this->unmanaged_on = $unmanagedOn;
        return $this;
    }

    /**
* 
     * Get unmanagedOn
     *
     *
     * @return date $unmanagedOn
     */
    public function getUnmanagedOn()
    {
        return $this->unmanaged_on;
    }

    /**
* 
     * Set department
     *
     *
     * @param  string $department
     * @return $this
     */
    public function setDepartment($department)
    {
        $this->department = $department;
        return $this;
    }

    /**
* 
     * Get department
     *
     *
     * @return string $department
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
* 
     * Set slackchannel
     *
     *
     * @param  string $slackchannel
     * @return $this
     */
    public function setSlackchannel($slackchannel)
    {
        $this->slackchannel = $slackchannel;
        return $this;
    }

    /**
* 
     * Get slackchannel
     *
     *
     * @return string $slackchannel
     */
    public function getSlackchannel()
    {
        return $this->slackchannel;
    }

    /**
* 
     * Set botuserid
     *
     *
     * @param  string $botuserid
     * @return $this
     */
    public function setBotuserid($botuserid)
    {
        $this->botuserid = $botuserid;
        return $this;
    }

    /**
* 
     * Get botuserid
     *
     *
     * @return string $botuserid
     */
    public function getBotuserid()
    {
        return $this->botuserid;
    }

    /**
* 
     * Set botaccesstoken
     *
     *
     * @param  string $botaccesstoken
     * @return $this
     */
    public function setBotaccesstoken($botaccesstoken)
    {
        $this->botaccesstoken = $botaccesstoken;
        return $this;
    }

    /**
* 
     * Get botaccesstoken
     *
     *
     * @return string $botaccesstoken
     */
    public function getBotaccesstoken()
    {
        return $this->botaccesstoken;
    }

    /**
* 
     * Set addedBy
     *
     *
     * @param  AppBundle\Document\OrmProfiles $addedBy
     * @return $this
     */
    public function setAddedBy(\AppBundle\Document\OrmProfiles $addedBy)
    {
        $this->added_by = $addedBy;
        return $this;
    }

    /**
* 
     * Get addedBy
     *
     *
     * @return AppBundle\Document\OrmProfiles $addedBy
     */
    public function getAddedBy()
    {
        return $this->added_by;
    }

    /**
* 
     * Set removedBy
     *
     *
     * @param  AppBundle\Document\OrmProfiles $removedBy
     * @return $this
     */
    public function setRemovedBy(\AppBundle\Document\OrmProfiles $removedBy)
    {
        $this->removed_by = $removedBy;
        return $this;
    }

    /**
* 
     * Get removedBy
     *
     *
     * @return AppBundle\Document\OrmProfiles $removedBy
     */
    public function getRemovedBy()
    {
        return $this->removed_by;
    }

    /**
* 
     * Set viaApp
     *
     *
     * @param  AppBundle\Document\OrmApps $viaApp
     * @return $this
     */
    public function setViaApp(\AppBundle\Document\OrmApps $viaApp)
    {
        $this->via_app = $viaApp;
        return $this;
    }

    /**
* 
     * Get viaApp
     *
     *
     * @return AppBundle\Document\OrmApps $viaApp
     */
    public function getViaApp()
    {
        return $this->via_app;
    }
}
