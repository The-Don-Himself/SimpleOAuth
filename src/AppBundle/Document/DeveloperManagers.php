<?php

namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ODM\Document(repositoryClass="AppBundle\DocumentRepository\DeveloperManagersRepository")
 * @ODM\ShardKey(keys={"_id"="hashed"})
 */
class DeveloperManagers
{
    /**
    * @ODM\Id(strategy="NONE", type="int")
    */
    protected $id;

    /**
    * @ODM\EmbedOne(targetDocument="OrmDevelopers")
    */
    protected $developer;

    /**
    * @ODM\EmbedMany(targetDocument="ProfileManages",strategy="pushAll")
    */
    protected $managers = array();

    public function __construct()
    {
        $this->managers = new ArrayCollection();
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
     * Set developer
     *
     * @param  AppBundle\Document\OrmDevelopers $developer
     * @return $this
     */
    public function setDeveloper(\AppBundle\Document\OrmDevelopers $developer)
    {
        $this->developer = $developer;
        return $this;
    }

    /**
     * Get developer
     *
     * @return AppBundle\Document\OrmDevelopers $developer
     */
    public function getDeveloper()
    {
        return $this->developer;
    }

    /**
     * Add manager
     *
     * @param AppBundle\Document\ProfileManages $manager
     */
    public function addManager(\AppBundle\Document\ProfileManages $manager)
    {
        $this->managers[] = $manager;
    }

    /**
     * Remove manager
     *
     * @param AppBundle\Document\ProfileManages $manager
     */
    public function removeManager(\AppBundle\Document\ProfileManages $manager)
    {
        $this->managers->removeElement($manager);
    }

    /**
     * Get managers
     *
     * @return \Doctrine\Common\Collections\Collection $managers
     */
    public function getManagers()
    {
        return $this->managers;
    }

}
