<?php
return array(
    // Register controllers in the service manager
    'controllers' => array(
        'invokables' => array(
            'Room\Controller\Room' => 'Room\Controller\RoomController',
        ),
    ),

    // Route configuration
    'router' => array(
        'routes' => array(
            'room' => array(
                'type'    => 'Zend\Mvc\Router\Http\Segment',
                'options' => array(
                    'route'    => '/room[/:id]',
                    'constraints' => array(
                        'id' => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Room\Controller\Room',
                        'action'     => 'index',
                        'id' => null,   // Default room ID if not provided
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
