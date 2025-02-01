<?php

namespace ContainerTttukho;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessageDispatcherServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\MessageDispatcher\Infrastructure\Services\MessageDispatcherService' shared autowired service.
     *
     * @return \App\MessageDispatcher\Infrastructure\Services\MessageDispatcherService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/MessageDispatcher/Infrastructure/Services/MessageDispatcherService.php';

        return $container->services['App\\MessageDispatcher\\Infrastructure\\Services\\MessageDispatcherService'] = new \App\MessageDispatcher\Infrastructure\Services\MessageDispatcherService(($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container)));
    }
}
