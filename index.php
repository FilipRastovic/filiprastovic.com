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
    '/'     => ['view' => 'home',       'title' => 'Filip Rastovic – Shopify Developer'],
    '/blog' => ['view' => 'blog.index', 'title' => 'Blog – Filip Rastovic'],

    '/blog/dtc-ecommerce-cro' => [
        'view'  => 'blog.dtc-ecommerce-cro',
        'title' => 'DTC E-Commerce Conversion Optimization – Usability | Filip Rastovic',
        'articleMeta' => [
            'description' => 'How an e-commerce UI can be redesigned for greater usability — increasing conversion rates and lowering cost per acquisition without increasing ad spend.',
            'date'        => '2024-03-01',
            'modified'    => '2026-05-20',
            'image'       => '/images/blog/dtc-landing-1.png',
            'tags'        => ['CRO', 'Design', 'Usability', 'E-commerce', 'Shopify'],
            'type'        => 'BlogPosting',
        ],
    ],
    '/blog/structure-3d-abstract' => [
        'view'  => 'blog.structure-3d-abstract',
        'title' => 'Structure – 3D Abstract Geometric Composition | Filip Rastovic',
        'articleMeta' => [
            'description' => '9 abstract geometric 3D renders made in Cinema 4D and Octane Render in 2022.',
            'date'        => '2022-01-01',
            'modified'    => '2026-05-20',
            'image'       => '/images/blog/structure-3d-1.png',
            'tags'        => ['3D Art', 'Cinema 4D', 'Octane Render', 'Abstract', 'Design'],
            'type'        => 'BlogPosting',
        ],
    ],
    '/blog/scifi-pi-enclosure' => [
        'view'  => 'blog.scifi-pi-enclosure',
        'title' => 'Sci-Fi Raspberry Pi Enclosure – 3D CAD | Filip Rastovic',
        'articleMeta' => [
            'description' => 'A sci-fi Raspberry Pi enclosure — my take on CAD modeling in Cinema 4D.',
            'date'        => '2024-01-01',
            'modified'    => '2026-05-20',
            'image'       => '/images/blog/scifi-pi-1.jpg',
            'tags'        => ['3D Modeling', 'CAD', 'Cinema 4D', 'Design', 'Raspberry Pi'],
            'type'        => 'BlogPosting',
        ],
    ],
    '/blog/funky-town' => [
        'view'  => 'blog.funky-town',
        'title' => 'Funky Town – 3D Stylized House City | Filip Rastovic',
        'articleMeta' => [
            'description' => '18 3D renders of a stylized house city — personal project modeled in Cinema 4D and rendered in Octane Render.',
            'date'        => '2024-01-01',
            'modified'    => '2026-05-20',
            'image'       => '/images/blog/funky-town-1.jpg',
            'tags'        => ['3D Art', 'Cinema 4D', 'Octane Render', 'Design', 'Architecture'],
            'type'        => 'BlogPosting',
        ],
    ],
    '/blog/isometric-houses' => [
        'view'  => 'blog.isometric-houses',
        'title' => 'Isometric Houses 3D Art | Filip Rastovic',
        'articleMeta' => [
            'description' => 'Isometric 3D house renders made in Cinema 4D.',
            'date'        => '2024-01-01',
            'modified'    => '2026-05-20',
            'image'       => '/images/blog/iso-houses-1.png',
            'tags'        => ['3D Art', 'Isometric', 'Cinema 4D', 'Architecture', 'Design'],
            'type'        => 'BlogPosting',
        ],
    ],
    '/blog/silvermoon-town' => [
        'view'  => 'blog.silvermoon-town',
        'title' => 'Silvermoon Town – Abstract 3D Compositions | Filip Rastovic',
        'articleMeta' => [
            'description' => '3D abstract composition renders inspired by Peter Tarka and Omar Aqil — made in Cinema 4D.',
            'date'        => '2024-01-01',
            'modified'    => '2026-05-20',
            'image'       => '/images/blog/silvermoon-1.jpg',
            'tags'        => ['3D Art', 'Cinema 4D', 'Abstract', 'Design', 'Octane Render'],
            'type'        => 'BlogPosting',
        ],
    ],
    '/blog/retro-loop' => [
        'view'  => 'blog.retro-loop',
        'title' => 'Retro Loop Music Visual – Cinema 4D | Filip Rastovic',
        'articleMeta' => [
            'description' => 'Retro Loop Music Visual — made in Cinema 4D and Octane Render following the course from Kidmograph.',
            'date'        => '2024-01-01',
            'modified'    => '2026-05-20',
            'image'       => null,
            'tags'        => ['Motion Graphics', 'Cinema 4D', 'Octane Render', 'Music Visual', '3D'],
            'type'        => 'BlogPosting',
        ],
    ],
    '/blog/daily-ui' => [
        'view'  => 'blog.daily-ui',
        'title' => '100 Daily UI Challenge | Filip Rastovic',
        'articleMeta' => [
            'description' => '100 Daily UI Challenge — a collection of daily UI design exercises.',
            'date'        => '2024-01-01',
            'modified'    => '2026-05-20',
            'image'       => '/images/blog/daily-ui-1.png',
            'tags'        => ['UI Design', 'Design', 'Daily UI', 'UX'],
            'type'        => 'BlogPosting',
        ],
    ],
    '/blog/bootstrap-resume-tutorial' => [
        'view'  => 'blog.bootstrap-resume-tutorial',
        'title' => 'Resume Portfolio Bootstrap 4 – Code-Along Tutorial | Filip Rastovic',
        'articleMeta' => [
            'description' => 'Resume/Portfolio website code-along tutorial in Bootstrap 4, HTML, SCSS and JavaScript.',
            'date'        => '2024-03-01',
            'modified'    => '2026-05-20',
            'image'       => null,
            'tags'        => ['Tutorial', 'Bootstrap', 'HTML', 'CSS', 'SCSS', 'JavaScript', 'Web Development'],
            'type'        => 'HowTo',
        ],
    ],
    '/blog/bootstrap-chat-tutorial' => [
        'view'  => 'blog.bootstrap-chat-tutorial',
        'title' => 'Bootstrap Chat App UI – Code-Along Tutorial | Filip Rastovic',
        'articleMeta' => [
            'description' => 'Bootstrap Chat App UI code-along tutorial in HTML, CSS and SCSS.',
            'date'        => '2019-06-30',
            'modified'    => '2026-05-20',
            'image'       => null,
            'tags'        => ['Tutorial', 'Bootstrap', 'HTML', 'CSS', 'SCSS', 'Web Development'],
            'type'        => 'HowTo',
        ],
    ],
    '/blog/perlin-flow' => [
        'view'  => 'blog.perlin-flow',
        'title' => 'Generative Perlin Flow – Programmer Art | Filip Rastovic',
        'articleMeta' => [
            'description' => 'Generative Perlin Flow programmer art — one of my old Processing sketches.',
            'date'        => '2024-01-01',
            'modified'    => '2026-05-20',
            'image'       => null,
            'tags'        => ['Generative Art', 'Processing', 'Creative Code', 'Programming'],
            'type'        => 'BlogPosting',
        ],
    ],
    '/blog/trial-and-terror' => [
        'view'  => 'blog.trial-and-terror',
        'title' => 'Trial And Terror – Puzzle-Platformer Video Game | Filip Rastovic',
        'articleMeta' => [
            'description' => 'Trial And Terror — a puzzle-platformer 2D video game co-developed and self-published on Steam, Newgrounds and Armor Games.',
            'date'        => '2019-01-01',
            'modified'    => '2026-05-20',
            'image'       => null,
            'tags'        => ['Game Development', 'Unity', 'Steam', 'Newgrounds', 'Indie Game'],
            'type'        => 'BlogPosting',
        ],
    ],
    '/blog/generative-animation' => [
        'view'  => 'blog.generative-animation',
        'title' => 'Generative Animation Unity 2D | Filip Rastovic',
        'articleMeta' => [
            'description' => 'A generative animation done in Unity 2D using the tools we developed for the game Trial and Terror.',
            'date'        => '2024-01-01',
            'modified'    => '2026-05-20',
            'image'       => null,
            'tags'        => ['Generative Art', 'Unity', 'Creative Code', 'Animation'],
            'type'        => 'BlogPosting',
        ],
    ],
    '/blog/leap-of-faith' => [
        'view'  => 'blog.leap-of-faith',
        'title' => 'Leap of Faith – Minimalist 2D Puzzle Game | Filip Rastovic',
        'articleMeta' => [
            'description' => 'Leap of Faith — a minimalist 2D memory puzzle game, self-published in 2016.',
            'date'        => '2016-01-01',
            'modified'    => '2026-05-20',
            'image'       => null,
            'tags'        => ['Game Development', 'Unity', 'Puzzle Game', 'Indie Game'],
            'type'        => 'BlogPosting',
        ],
    ],
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
    'articleMeta' => $route['articleMeta'] ?? null,
])->render();
