<?php

namespace ContainerZI7rQ7L;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConnectionEventService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Event\ConnectionEvent' shared autowired service.
     *
     * @return \App\Shared\Infrastructure\Event\ConnectionEvent
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Event/ConnectionEvent.php';

        return $container->services['App\\Shared\\Infrastructure\\Event\\ConnectionEvent'] = new \App\Shared\Infrastructure\Event\ConnectionEvent();
    }
}
