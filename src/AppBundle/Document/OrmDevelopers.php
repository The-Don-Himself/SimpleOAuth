<?php

namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use AppBundle\Entity\Developers;

/**
 * @ODM\EmbeddedDocument
 */
class OrmDevelopers
{
    /**
     * @ODM\Field(type="int")
     * @ODM\Index(background=true)
     */
    private $developerId;

    /**
     * @var AppBundle\Entity\Developers
     */
    private $developer;

    public function getDeveloperId()
    {
        return $this->developerId;
    }

    public function setDeveloper(Developers $developer)
    {
        $this->developerId = $developer->getId();
        $this->developer = $developer;
    }

    public function getDeveloper()
    {
        return $this->developer;
    }


    /**
     * 
     * Set developerId
     *
     *
     * @param  int $developerId
     * @return $this
     */
    public function setDeveloperId($developerId)
    {
        $this->developerId = $developerId;
        return $this;
    }
}
