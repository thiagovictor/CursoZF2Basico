<?php

namespace Livraria;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;
use Livraria\Model\CartegoriaTable;

class Module
{
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
    public function getServiceConfig()
    {
        return array(
            'factories' => array(
                'Livraria\Model\CartegoriaService' => function($service){
                    $dbAdapter = $service->get('Zend\Db\Adapter\Adapter');
                    $cartegoriaTable = new CartegoriaTable($dbAdapter);
                    $cartegoriaService = new Model\CartegoriaService($cartegoriaTable);
                    return $cartegoriaService;
                }
            )
        );
    }
}
