<?php
namespace AppBundle\EventListener;

use Doctrine\Common\EventSubscriber;
use Doctrine\ODM\MongoDB\Event\LifecycleEventArgs;
use Doctrine\ORM\EntityManager;
use AppBundle\Document\OrmApps;
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
class OrmAppsSubscriber implements EventSubscriber
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
        if (!$document instanceof OrmApps) {
            return;
        }

        $ormApp = $document;

        $em = $this->em;
        $dm = $args->getDocumentManager();

        $ormAppReflProp = $dm->getClassMetadata('AppBundle\Document\OrmApps')->reflClass->getProperty('app');
        $ormAppReflProp->setAccessible(true);
        $ormAppReflProp->setValue(
            $ormApp, $em->getReference('AppBundle\Entity\Apps', $ormApp->getAppId())
        );

    }

}
