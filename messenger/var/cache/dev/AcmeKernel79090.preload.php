<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg', 'embed'], true)) {
    return;
}

require dirname(__DIR__, 3).'/vendor/autoload.php';
(require __DIR__.'/AcmeKernel79090.php')->set(\ContainerPZ7ds32\AcmeKernel79090::class, null);

$classes = [];
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';

$preloaded = Preloader::preload($classes);
