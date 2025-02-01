<?php

namespace ContainerIlzcS6t;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\ParameterNotFoundException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class AcmeKernel15161 extends Container
{
    protected $targetDir;
    protected $parameters = [];

    public function __construct(private array $buildParameters = [], protected string $containerDir = __DIR__)
    {
        $this->targetDir = \dirname($containerDir);
        $this->parameters = $this->getDefaultParameters();

        $this->services = $this->privates = [];

        $this->aliases = [];
    }

    public function compile(): void
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled(): bool
    {
        return true;
    }

    protected function load($file, $lazyLoad = true): mixed
    {
        if (class_exists($class = __NAMESPACE__.'\\'.$file, false)) {
            return $class::do($this, $lazyLoad);
        }

        if ('.' === $file[-4]) {
            $class = substr($class, 0, -4);
        } else {
            $file .= '.php';
        }

        $service = require $this->containerDir.\DIRECTORY_SEPARATOR.$file;

        return class_exists($class, false) ? $class::do($this, $lazyLoad) : $service;
    }

    public function getParameter(string $name): array|bool|string|int|float|\UnitEnum|null
    {
        if (isset($this->buildParameters[$name])) {
            return $this->buildParameters[$name];
        }

        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || \array_key_exists($name, $this->parameters))) {
            throw new ParameterNotFoundException($name);
        }

        if (isset($this->loadedDynamicParameters[$name])) {
            $value = $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        } else {
            $value = $this->parameters[$name];
        }

        return $value;
    }

    public function hasParameter(string $name): bool
    {
        if (isset($this->buildParameters[$name])) {
            return true;
        }

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || \array_key_exists($name, $this->parameters);
    }

    public function setParameter(string $name, $value): void
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag(): ParameterBagInterface
    {
        if (!isset($this->parameterBag)) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            foreach ($this->buildParameters as $name => $value) {
                $parameters[$name] = $value;
            }
            $this->parameterBag = new FrozenParameterBag($parameters, []);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [
        'kernel.runtime_environment' => false,
        'kernel.runtime_mode' => false,
        'kernel.runtime_mode.web' => false,
        'kernel.runtime_mode.cli' => false,
        'kernel.runtime_mode.worker' => false,
        'kernel.build_dir' => false,
        'kernel.cache_dir' => false,
    ];
    private $dynamicParameters = [];

    private function getDynamicParameter(string $name)
    {
        $container = $this;
        $value = match ($name) {
            'kernel.runtime_environment' => $container->getEnv('default:kernel.environment:APP_RUNTIME_ENV'),
            'kernel.runtime_mode' => $container->getEnv('query_string:default:container.runtime_mode:APP_RUNTIME_MODE'),
            'kernel.runtime_mode.web' => $container->getEnv('bool:default::key:web:default:kernel.runtime_mode:'),
            'kernel.runtime_mode.cli' => $container->getEnv('not:default:kernel.runtime_mode.web:'),
            'kernel.runtime_mode.worker' => $container->getEnv('bool:default::key:worker:default:kernel.runtime_mode:'),
            'kernel.build_dir' => $container->targetDir.'',
            'kernel.cache_dir' => $container->targetDir.'',
            default => throw new ParameterNotFoundException($name),
        };
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    protected function getDefaultParameters(): array
    {
        return [
            'kernel.project_dir' => \dirname(__DIR__, 4),
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.logs_dir' => (\dirname(__DIR__, 3).'/log'),
            'kernel.bundles' => [

            ],
            'kernel.bundles_metadata' => [

            ],
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'AcmeKernel10240',
        ];
    }
}
