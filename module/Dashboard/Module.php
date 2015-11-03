<?php

namespace Dashboard;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;

class Module {

    public function onBootstrap(MvcEvent $e) {
        $eventManager = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);


        //Utilizar plugin no layout
        /* $app = $e->getApplication();
          $sm = $app->getServiceManager();
          $plugins = $sm->get('ControllerPluginManager');
          $plugin  = $plugins->get('PluginsFuncoes');

          $events = $app->getEventManager();
          $events->attach(
          MvcEvent::EVENT_RENDER,
          function($e) use ($plugin) {
          $viewModel = $e->getViewModel();
          $viewModel->controllerNome = $plugin->retornaNomeCtrAct('1');
          },
          100
          ); */

        $app = $e->getApplication();
        $app->getEventManager()->attach(
                'dispatch', function($e) {
            $routeMatch = $e->getRouteMatch();
            $viewModel = $e->getViewModel();

            $controllerNome = $routeMatch->getParam('controller');
            $actionNome = $routeMatch->getParam('action');

            $aux = explode("\\", $controllerNome);
            $controllerNome = $aux[2];

            $viewModel->setVariable('controllerNome', $controllerNome);
            $viewModel->setVariable('actionNome', $actionNome);
        }, -100
        );
    }

    public function getConfig() {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig() {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

}
