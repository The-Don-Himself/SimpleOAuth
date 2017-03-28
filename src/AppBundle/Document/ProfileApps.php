<?php

namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
* @ODM\EmbeddedDocument
*/
class ProfileApps
{
    /**
     * @ODM\Id(strategy="NONE", type="int")
     * @ODM\Index(background=true)
     */
    protected $id;

    /**
    * @ODM\EmbedOne(targetDocument="OrmProfiles")
    */
    protected $installed_by;

    /**
    * @ODM\Field(type="date")
    * @ODM\Index(background=true)
    */
    protected $installed_on;

    /**
     * @ODM\Field(type="int")
     * @ODM\Index(background=true)
    */
    protected $status;

    /**
     * @ODM\Field(type="int")
     * @ODM\Index(background=true)
    */
    protected $appversion;

    /**
    * @ODM\Field(type="boolean")
    * @ODM\Index(background=true)
    */
    protected $autoupdate;

    /**
    * @ODM\Field(type="date")
    * @ODM\Index(background=true)
    */
    protected $uninstalled_on;

    /**
     * @ODM\EmbedOne(targetDocument="OrmApps")
    */
    protected $via_app;



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
     * Set installedBy
     *
     * @param AppBundle\Document\OrmProfiles $installedBy
     * @return $this
     */
    public function setInstalledBy(\AppBundle\Document\OrmProfiles $installedBy)
    {
        $this->installed_by = $installedBy;
        return $this;
    }

    /**
     * Get installedBy
     *
     * @return AppBundle\Document\OrmProfiles $installedBy
     */
    public function getInstalledBy()
    {
        return $this->installed_by;
    }

    /**
     * Set installedOn
     *
     * @param date $installedOn
     * @return $this
     */
    public function setInstalledOn($installedOn)
    {
        $this->installed_on = $installedOn;
        return $this;
    }

    /**
     * Get installedOn
     *
     * @return date $installedOn
     */
    public function getInstalledOn()
    {
        return $this->installed_on;
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
     * Set appversion
     *
     * @param int $appversion
     * @return $this
     */
    public function setAppversion($appversion)
    {
        $this->appversion = $appversion;
        return $this;
    }

    /**
     * Get appversion
     *
     * @return int $appversion
     */
    public function getAppversion()
    {
        return $this->appversion;
    }

    /**
     * Set autoupdate
     *
     * @param boolean $autoupdate
     * @return $this
     */
    public function setAutoupdate($autoupdate)
    {
        $this->autoupdate = $autoupdate;
        return $this;
    }

    /**
     * Get autoupdate
     *
     * @return boolean $autoupdate
     */
    public function getAutoupdate()
    {
        return $this->autoupdate;
    }

    /**
     * Set uninstalledOn
     *
     * @param date $uninstalledOn
     * @return $this
     */
    public function setUninstalledOn($uninstalledOn)
    {
        $this->uninstalled_on = $uninstalledOn;
        return $this;
    }

    /**
     * Get uninstalledOn
     *
     * @return date $uninstalledOn
     */
    public function getUninstalledOn()
    {
        return $this->uninstalled_on;
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
}
