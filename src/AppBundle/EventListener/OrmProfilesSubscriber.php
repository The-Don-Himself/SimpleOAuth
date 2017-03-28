<?php
namespace AppBundle\EventListener;

use Doctrine\Common\EventSubscriber;
use Doctrine\ODM\MongoDB\Event\LifecycleEventArgs;
use Doctrine\ORM\EntityManager;
use AppBundle\Document\OrmProfiles;
use JMS\DiExtraBundle\Annotation\Inject;
use JMS\DiExtraBundle\Annotation\InjectParams;
use JMS\DiExtraBundle\Annotation\DoctrineMongoDBListener;

/**
 * @DoctrineMongoDBListener(
 *     events = {"postLoad"},
 *     connection = "default",
 *     lazy = true,
 *     priority = 0,
 * )
 */
class OrmProfilesSubscriber implements EventSubscriber
{
    protected $em;

    /**
     * @InjectParams({
     *     "em" = @Inject("doctrine.orm.entity_manager")
     * })
     */
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function getSubscribedEvents()
    {
        return array(
         'postLoad',
        );
    }

    public function postLoad(LifecycleEventArgs $args)
    {
        $document = $args->getDocument();
        if (!$document instanceof OrmProfiles) {
            return;
        }

        $ormProfile = $document;

        $em = $this->em;
        $dm = $args->getDocumentManager();

        $ormProfileReflProp = $dm->getClassMetadata('AppBundle\Document\OrmProfiles')->reflClass->getProperty('profile');
        $ormProfileReflProp->setAccessible(true);
        $ormProfileReflProp->setValue(
            $ormProfile, $em->getReference('AppBundle\Entity\Profiles', $ormProfile->getProfileId())
        );

    }

}
