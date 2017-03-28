<?php
namespace AppBundle\EventListener;

use Doctrine\Common\EventSubscriber;
use Doctrine\ODM\MongoDB\Event\LifecycleEventArgs;
use Doctrine\ORM\EntityManager;
use AppBundle\Document\OrmDevelopers;
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
class OrmDevelopersSubscriber implements EventSubscriber
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
        if (!$document instanceof OrmDevelopers) {
            return;
        }

        $ormDeveloper = $document;

        $em = $this->em;
        $dm = $args->getDocumentManager();

        $ormDeveloperReflProp = $dm->getClassMetadata('AppBundle\Document\OrmDevelopers')->reflClass->getProperty('developer');
        $ormDeveloperReflProp->setAccessible(true);
        $ormDeveloperReflProp->setValue(
            $ormDeveloper, $em->getReference('AppBundle\Entity\Developers', $ormDeveloper->getDeveloperId())
        );

    }

}
