<?php

namespace ContainerZI7rQ7L;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConnectionEventListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Listeners\ConnectionEventListener' shared autowired service.
     *
     * @return \App\Shared\Infrastructure\Listeners\ConnectionEventListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Listeners/ConnectionEventListener.php';

        return $container->services['App\\Shared\\Infrastructure\\Listeners\\ConnectionEventListener'] = new \App\Shared\Infrastructure\Listeners\ConnectionEventListener();
    }
}
