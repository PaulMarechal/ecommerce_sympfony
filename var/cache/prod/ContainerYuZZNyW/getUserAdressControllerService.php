<?php

namespace ContainerYuZZNyW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserAdressControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\UserAdressController' shared autowired service.
     *
     * @return \App\Controller\UserAdressController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\UserAdressController'] = $instance = new \App\Controller\UserAdressController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\UserAdressController', $container));

        return $instance;
    }
}
