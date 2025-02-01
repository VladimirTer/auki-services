<?php

namespace ContainerTttukho;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConnectionEventService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Shared\Infrastructure\Event\ConnectionEvent' shared autowired service.
     *
     * @return \App\Shared\Infrastructure\Event\ConnectionEvent
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Shared/Infrastructure/Event/ConnectionEvent.php';

        return $container->services['App\\Shared\\Infrastructure\\Event\\ConnectionEvent'] = new \App\Shared\Infrastructure\Event\ConnectionEvent();
    }
}
