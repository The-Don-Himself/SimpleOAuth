<?php

namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
* @ODM\EmbeddedDocument
*/
class AppVersionsDetails
{
    /**
     * @ODM\Id(strategy="NONE", type="int")
     * @ODM\Index(background=true)
     */
    protected $id;

    /**
     * @ODM\Field(type="float")
     * @ODM\Index(background=true)
    */
    protected $appprice;

    /**
     * @ODM\Field(type="int")
     * @ODM\Index(background=true)
    */
    protected $apppriceperiod;

    /**
     * @ODM\Field(type="collection")
    */
    protected $events = array();



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
     * Set appprice
     *
     * @param float $appprice
     * @return $this
     */
    public function setAppprice($appprice)
    {
        $this->appprice = $appprice;
        return $this;
    }

    /**
     * Get appprice
     *
     * @return float $appprice
     */
    public function getAppprice()
    {
        return $this->appprice;
    }

    /**
     * Set apppriceperiod
     *
     * @param int $apppriceperiod
     * @return $this
     */
    public function setApppriceperiod($apppriceperiod)
    {
        $this->apppriceperiod = $apppriceperiod;
        return $this;
    }

    /**
     * Get apppriceperiod
     *
     * @return int $apppriceperiod
     */
    public function getApppriceperiod()
    {
        return $this->apppriceperiod;
    }

    /**
     * Set events
     *
     * @param collection $events
     * @return $this
     */
    public function setEvents($events)
    {
        $this->events = $events;
        return $this;
    }

    /**
     * Get events
     *
     * @return collection $events
     */
    public function getEvents()
    {
        return $this->events;
    }
}
