<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerIlzcS6t\AcmeKernel15161::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerIlzcS6t/AcmeKernel15161.php') {
    touch(__DIR__.'/ContainerIlzcS6t.legacy');

    return;
}

if (!\class_exists(AcmeKernel15161::class, false)) {
    \class_alias(\ContainerIlzcS6t\AcmeKernel15161::class, AcmeKernel15161::class, false);
}

return new \ContainerIlzcS6t\AcmeKernel15161([
    'container.build_hash' => 'IlzcS6t',
    'container.build_id' => '2ebf133b',
    'container.build_time' => 1738267599,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerIlzcS6t');
