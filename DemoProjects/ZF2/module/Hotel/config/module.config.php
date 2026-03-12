<?php

use Zend\Mvc\Router\Http\Literal;

return array(
    // Register controllers in the service manager
    'controllers' => array(
        'invokables' => array(
            'Hotel\Controller\Hotel' => 'Hotel\Controller\HotelController',
        ),
    ),

    // Route configuration
    'router' => array(
        'routes' => array(
            'hotels' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/hotels',
                    'defaults' => array(
                        'controller' => 'Hotel\Controller\Hotel',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),

    // View manager configuration
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);
