<?php
namespace HelloWorld\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\ApiRouter;
use Plenty\Plugin\Routing\Router;

/**
 * Class HelloWorldRouteServiceProvider
 * @package HelloWorld\Providers
 */
class HelloWorldRouteServiceProvider extends RouteServiceProvider
{
	/**
	 * @param Router $router
	 */
	public function map(Router $router,ApiRouter $apiRouter)
    {
        $apiRouter->version(['v1'], ['namespace' => 'HelloWorld\Controllers', 'middleware' => 'oauth'],
            function($apiRouter)
            {
                //Basic settings
                $apiRouter->get('TestPlugin/load', 'ContentController@load');
            });
            // $router->get('ShippingStates/deleteAll', 'ShippingStates\Controllers\SettingsController@deleteAll');


    }

}