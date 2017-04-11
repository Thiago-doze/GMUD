<?php

namespace GMUD;

return array(
    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route' => '/categoria',
                    'defaults' => array(
                        'controller' => 'GMUD\Controller\Index',
                        'action' => 'index',
                    ),
                ),
            ),
            'application' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/GMUD',
                    'defaults' => array(
                        '__NAMESPACE__' => 'GMUD\Controller',
                        'controller' => 'Index',
                        'action' => 'index',
                        ),
                    ),
                    'may_terminate' => true,
                    'child_routes' => array(
                        'defaults' => array(
                            'type' => 'Segment',
                            'options' => array(
                                'route' => '/[:controller[/:action]]',
                                'constraints' => array(
                                    'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                    'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                ),
                                'defaults' => array(
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        ),
        'controllers' => array(
            'invokables' => array(
                'GMUD\Controller\Index' => 'GMUD\Controller\IndexController'
            ),
        ),
        'view_manager' => array(
            'display_not_found_reason' => true,
            'display_exceptions' => true,
            'doctype' => 'HTML5',
            'not_found_template' => 'error/404',
            'exception_template' => 'error/index',
            'template_map' => array(
                'layout/layout' => __DIR__ . '/../../Base/view/layout/layout.phtml',
                'error/404' => __DIR__ . '/../../Base/view/error/404.phtml',
                'error/index' => __DIR__ . '/../../Base/view/error/index.phtml',
            ),
            'template_path_stack' => array(
                __DIR__ . '/../view',
            ),
        ),
);
