<?php

namespace ContainerDhOtYZP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHomeControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\HomeController' shared autowired service.
     *
     * @return \App\Controller\HomeController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Controller/HomeController.php';

        return $container->services['App\\Controller\\HomeController'] = new \App\Controller\HomeController(($container->services['.container.private.twig'] ?? $container->load('get_Container_Private_TwigService')));
    }
}
