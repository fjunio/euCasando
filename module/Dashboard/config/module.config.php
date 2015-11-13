<?php
namespace Dashboard;

/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

return array(
    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        'controller' => 'Dashboard\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
            ),
            // The following is a route to simplify getting started creating
            // new controllers and actions without needing to create a new
            // module. Simply drop new controllers in, and you can access them
            // using the path /application/:controller/:action
            'dashboard' => array(
                'type'    => 'Segment',
                'options' => array(
                    'route'    => '[]',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Dashboard\Controller',
                        'controller'    => 'Index',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
            'route1' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/lista-de-convidados/[:action]/[:id][/]',
                    'defaults' => [
                        '__NAMESPACE__' => 'Dashboard\Controller',
                        'controller'    => 'lista-de-convidados'
                    ]
                ]
            ],
            'route2' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/planejador-financeiro/[:action]/[:id][/]',
                    'defaults' => [
                        '__NAMESPACE__' => 'Dashboard\Controller',
                        'controller'    => 'planejador-financeiro'
                    ]
                ]
            ]
        ),
    ),
    'service_manager' => array(
        'services' => array(
        ),
        'initializers' => [
        ],
        
        'invokables' => array(                                    
        ),
        'abstract_factories' => array(
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
        ),
        'factories' => array(
            'translator' => 'Zend\Mvc\Service\TranslatorServiceFactory',
//            Services
            'ConvidadoServiceFactory' => 'Dashboard\Service\Factory\ConvidadoServiceFactory',
            'CasamentoServiceFactory' => 'Dashboard\Service\Factory\CasamentoServiceFactory',
            'PlanejadorFinanceiroServiceFactory' => 'Dashboard\Service\Factory\PlanejadorFinanceiroServiceFactory',
//            DAOs
            'ConvidadoDAOFactory' => 'Dashboard\DAO\Factory\ConvidadoDAOFactory',
            'CasamentoDAOFactory' => 'Dashboard\DAO\Factory\CasamentoDAOFactory',
            'PlanejadorFinanceiroDAOFactory' => 'Dashboard\DAO\Factory\PlanejadorFinanceiroDAOFactory',
        ),
    ),
    'translator' => array(
        'locale' => 'en_US',
        'translation_file_patterns' => array(
            array(
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Dashboard\Controller\Index' => 'Dashboard\Controller\IndexController',
            'Dashboard\Controller\EspacoDisponivel' => 'Dashboard\Controller\EspacoDisponivelController',
            'Dashboard\Controller\ListaDeConvidados' => 'Dashboard\Controller\ListaDeConvidadosController',
            'Dashboard\Controller\ProtecaoSenha' => 'Dashboard\Controller\ProtecaoSenhaController',
            'Dashboard\Controller\MensagensRecebidas' => 'Dashboard\Controller\MensagensRecebidasController',
            'Dashboard\Controller\PlanejadorFinanceiro' => 'Dashboard\Controller\PlanejadorFinanceiroController'
        ),
    ),
     'controller_plugins' => array(
        'invokables' => array(
            'PluginsFuncoes' => 'Dashboard\Controller\Plugin\PluginsFuncoes',
        )
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'layout/layout-secundario'           => __DIR__ . '/../view/layout/layout-secundario.phtml',
            'dashboard/index/index' => __DIR__ . '/../view/dashboard/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    
   /*'view_helpers' => array(
      'invokables' => array(
         'Util' => 'Application\View\Helper\Util',
      ),
   ),*/

    // Placeholder for console routes
    'console' => array(
        'router' => array(
            'routes' => array(
            ),
        ),
    ),
    
    // Doctrine config
    'doctrine' => array(
        'driver' => array(
            'dashboard_entities' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(__DIR__ . '/../src/Dashboard/Entity')
            ),
            'orm_default' => array(
                'drivers' => array(
                    'Dashboard\Entity' => 'dashboard_entities',
                ),
            ),
        )
    ),
);

