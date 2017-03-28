<?php

namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use AppBundle\Entity\Apps;

/**
 * @ODM\EmbeddedDocument
 */
class OrmApps
{
    /**
     * @ODM\Field(type="int")
     * @ODM\Index(background=true)
     */
    private $appId;

    /**
     * @var AppBundle\Entity\Apps
     */
    private $app;

    public function getAppId()
    {
        return $this->appId;
    }

    public function setApp(Apps $app)
    {
        $this->appId = $app->getId();
        $this->app = $app;
    }

    public function getApp()
    {
        return $this->app;
    }


    /**
* 
     * Set appId
     *
     *
     * @param  int $appId
     * @return $this
     */
    public function setAppId($appId)
    {
        $this->appId = $appId;
        return $this;
    }
}
