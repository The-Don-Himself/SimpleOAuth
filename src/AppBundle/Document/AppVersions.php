<?php

namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ODM\Document(repositoryClass="AppBundle\DocumentRepository\AppVersionsRepository")
 * @ODM\ShardKey(keys={"_id"="hashed"})
 */
class AppVersions
{
    /**
    * @ODM\Id(strategy="NONE", type="int")
    */
    protected $id;

    /**
    * @ODM\EmbedOne(targetDocument="OrmApps")
    */
    protected $app;

    /**
    * @ODM\EmbedMany(targetDocument="AppVersionsDetails",strategy="pushAll")
    */
    protected $versions = array();
    public function __construct()    
    {
        $this->versions = new ArrayCollection();
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
     * Set app
     *
     * @param AppBundle\Document\OrmApps $app
     * @return $this
     */
    public function setApp(\AppBundle\Document\OrmApps $app)
    {
        $this->app = $app;
        return $this;
    }

    /**
     * Get app
     *
     * @return AppBundle\Document\OrmApps $app
     */
    public function getApp()
    {
        return $this->app;
    }

    /**
     * Add version
     *
     * @param AppBundle\Document\AppVersionsDetails $version
     */
    public function addVersion(\AppBundle\Document\AppVersionsDetails $version)
    {
        $this->versions[] = $version;
    }

    /**
     * Remove version
     *
     * @param AppBundle\Document\AppVersionsDetails $version
     */
    public function removeVersion(\AppBundle\Document\AppVersionsDetails $version)
    {
        $this->versions->removeElement($version);
    }

    /**
     * Get versions
     *
     * @return \Doctrine\Common\Collections\Collection $versions
     */
    public function getVersions()
    {
        return $this->versions;
    }
}
