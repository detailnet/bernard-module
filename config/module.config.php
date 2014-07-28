<?php

return array(
    'service_manager' => array(
        'abstract_factories' => array(
        ),
        'aliases' => array(
        ),
        'invokables' => array(
            'Bernard\Middleware\MiddlewareBuilder' => 'Bernard\Middleware\MiddlewareBuilder',
            'Bernard\Serializer\SimpleSerializer'  => 'Bernard\Serializer\SimpleSerializer',
            /** @todo Add support for JMSSerializer and SymfonySerializer */
        ),
        'factories' => array(
            'Detail\Bernard\Options\ModuleOptions' => 'Detail\Bernard\Factory\ModuleOptionsFactory',
            'Bernard\Driver\FlatFileDriver'        => 'Detail\Bernard\Factory\Driver\FlatFileDriverFactory',
            'Bernard\Driver\IronMqDriver'          => 'Detail\Bernard\Factory\Driver\IronMqDriverFactory',
            'Bernard\Queue\InMemoryQueue'          => 'Detail\Bernard\Factory\Queue\InMemoryQueueFactory',
            'Bernard\Queue\PersistentQueue'        => 'Detail\Bernard\Factory\Queue\PersistentQueueFactory',
            'Bernard\Router\SimpleRouter'          => 'Detail\Bernard\Factory\Router\SimpleRouterFactory',
            'Bernard\Consumer'                     => 'Detail\Bernard\Factory\ConsumerFactory',
            'Bernard\Producer'                     => 'Detail\Bernard\Factory\ProducerFactory',
        ),
        'initializers' => array(
        ),
        'shared' => array(
            // The Consumer's options are only configured once when Consumer::consume() is called.
            // This is why we're fetching a new instance each time the Consumer is requested.
            'Bernard\Consumer' => false,
        ),
    ),
    'controllers' => array(
        'factories' => array(
            'Detail\Bernard\Controller\Consumer' => 'Detail\Bernard\Factory\Controller\ConsumerControllerFactory',
        ),
    ),
    'console' => array(
        'router' => array(
            'routes' => array(
                'bernard-consume' => array(
                    'options' => array(
                        'route'    => 'bernard consume [--verbose|-v] <queue>',
                        'defaults' => array(
                            'controller' => 'Detail\Bernard\Controller\Consumer',
                            'action'     => 'consume',
                        ),
                    ),
                ),
            ),
        ),
    ),
    'bernard' => array(
        'driver'     => 'Bernard\Driver\FlatFileDriver',
        'serializer' => 'Bernard\Serializer\SimpleSerializer',
        'queue'      => 'Bernard\Queue\InMemoryQueue',
        'prefetch'   => null,
        'directory'  => __DIR__ . '/../../../../data/queues',
        'services'   => array(),
    ),
);
