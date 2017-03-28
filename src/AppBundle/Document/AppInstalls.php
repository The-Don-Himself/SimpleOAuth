<?php

namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ODM\Document(repositoryClass="AppBundle\DocumentRepository\AppInstallsRepository")
 * @ODM\ShardKey(keys={"_id"="hashed"})
 */
class AppInstalls
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
    * @ODM\EmbedMany
    */
    protected $installs = array();

    public function __construct()
    {
        $this->installs = new ArrayCollection();
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
     * Set app
     *
     * @param  AppBundle\Document\OrmApps $app
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
     * Add install
     *
     * @param $install
     */
    public function addInstall($install)
    {
        $this->installs[] = $install;
    }

    /**
     * Remove install
     *
     * @param $install
     */
    public function removeInstall($install)
    {
        $this->installs->removeElement($install);
    }

    /**
     * Get installs
     *
     * @return \Doctrine\Common\Collections\Collection $installs
     */
    public function getInstalls()
    {
        return $this->installs;
    }

}
