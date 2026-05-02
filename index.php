<?php

require_once __DIR__ . '/vendor/autoload.php';

use Illuminate\Container\Container;
use Illuminate\Events\Dispatcher;
use Illuminate\Filesystem\Filesystem;
use Illuminate\View\Compilers\BladeCompiler;
use Illuminate\View\Engines\CompilerEngine;
use Illuminate\View\Engines\EngineResolver;
use Illuminate\View\Engines\PhpEngine;
use Illuminate\View\Factory;
use Illuminate\View\FileViewFinder;

$views = [__DIR__ . '/resources/views'];
$cache = __DIR__ . '/storage/cache';

$filesystem = new Filesystem();
$compiler   = new BladeCompiler($filesystem, $cache);
$resolver   = new EngineResolver();

$resolver->register('php',   fn () => new PhpEngine($filesystem));
$resolver->register('blade', fn () => new CompilerEngine($compiler, $filesystem));

$finder  = new FileViewFinder($filesystem, $views);
$factory = new Factory($resolver, $finder, new Dispatcher(new Container()));

$uri = rtrim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/') ?: '/';

$routes = [
    '/'                                => ['view' => 'home',                          'title' => 'Filip Rastovic – Shopify Developer'],
    '/blog'                            => ['view' => 'blog.index',                    'title' => 'Blog – Filip Rastovic'],
    '/blog/dtc-ecommerce-cro'          => ['view' => 'blog.dtc-ecommerce-cro',         'title' => 'DTC E-Commerce CRO – Filip Rastovic'],
    '/blog/structure-3d-abstract'      => ['view' => 'blog.structure-3d-abstract',     'title' => 'Structure 3D – Filip Rastovic'],
    '/blog/scifi-pi-enclosure'         => ['view' => 'blog.scifi-pi-enclosure',        'title' => 'Sci-Fi Raspberry Pi Enclosure – Filip Rastovic'],
    '/blog/funky-town'                 => ['view' => 'blog.funky-town',                'title' => 'Funky Town 3D – Filip Rastovic'],
    '/blog/isometric-houses'           => ['view' => 'blog.isometric-houses',          'title' => 'Isometric Houses 3D – Filip Rastovic'],
    '/blog/silvermoon-town'            => ['view' => 'blog.silvermoon-town',           'title' => 'Silvermoon Town – Filip Rastovic'],
    '/blog/retro-loop'                 => ['view' => 'blog.retro-loop',                'title' => 'Retro Loop Music Visual – Filip Rastovic'],
    '/blog/daily-ui'                   => ['view' => 'blog.daily-ui',                  'title' => '100 Daily UI Challenge – Filip Rastovic'],
    '/blog/bootstrap-resume-tutorial'  => ['view' => 'blog.bootstrap-resume-tutorial', 'title' => 'Bootstrap Resume Tutorial – Filip Rastovic'],
    '/blog/bootstrap-chat-tutorial'    => ['view' => 'blog.bootstrap-chat-tutorial',   'title' => 'Bootstrap Chat Tutorial – Filip Rastovic'],
    '/blog/perlin-flow'                => ['view' => 'blog.perlin-flow',               'title' => 'Perlin Flow Art – Filip Rastovic'],
    '/blog/trial-and-terror'           => ['view' => 'blog.trial-and-terror',          'title' => 'Trial And Terror – Filip Rastovic'],
    '/blog/generative-animation'       => ['view' => 'blog.generative-animation',      'title' => 'Generative Animation – Filip Rastovic'],
    '/blog/leap-of-faith'              => ['view' => 'blog.leap-of-faith',             'title' => 'Leap of Faith – Filip Rastovic'],
];

if (!isset($routes[$uri])) {
    http_response_code(404);
    $route = $routes['/'];
} else {
    $route = $routes[$uri];
}

echo $factory->make($route['view'], [
    'title'       => $route['title'],
    'currentPath' => $uri,
])->render();
