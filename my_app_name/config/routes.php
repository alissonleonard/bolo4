<?php
use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

$routes->setRouteClass(DashedRoute::class);

$routes->scope('/', function (RouteBuilder $builder) {
    $builder->connect('/', ['controller' => 'Pages', 'action' => 'display', 'home']);
    $builder->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);

    // Add this
    // New route we're adding for our tagged action.
    // The trailing `*` tells CakePHP that this action has
    // passed parameters.
    $builder->scope('/consoles', function (RouteBuilder $builder) {
        $builder->connect('/tagged/*', ['controller' => 'Consoles', 'action' => 'tags']);
    });

    $builder->fallbacks();

    $builder->scope('/consoles', function (RouteBuilder $builder) {
        $builder->connect('/tagged/*', ['controller' => 'Consoles', 'action' => 'tags']);
    });

    $builder->fallbacks();


});