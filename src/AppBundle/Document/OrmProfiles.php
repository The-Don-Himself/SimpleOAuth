<?php

namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use AppBundle\Entity\Profiles;

/**
 * @ODM\EmbeddedDocument
 */
class OrmProfiles
{
    /**
     * @ODM\Field(type="int")
     * @ODM\Index(background=true)
     */
    private $profileId;

    /**
     * @var AppBundle\Entity\Profiles
     */
    private $profile;

    public function getProfileId()
    {
        return $this->profileId;
    }

    public function setProfile(Profiles $profile)
    {
        $this->profileId = $profile->getId();
        $this->profile = $profile;
    }

    public function getProfile()
    {
        return $this->profile;
    }


    /**
     * Set profileId
     *
     * @param  int $profileId
     * @return $this
     */
    public function setProfileId($profileId)
    {
        $this->profileId = $profileId;
        return $this;
    }
}
