<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

/**
 * The default class to use for all routes
 *
 * The following route classes are supplied with CakePHP and are appropriate
 * to set as the default:
 *
 * - Route
 * - InflectedRoute
 * - DashedRoute
 *
 * If no call is made to `Router::defaultRouteClass()`, the class used is
 * `Route` (`Cake\Routing\Route\Route`)
 *
 * Note that `Route` does not do any inflections on URLs which will result in
 * inconsistently cased URLs when used with `:plugin`, `:controller` and
 * `:action` markers.
 *
 */
Router::defaultRouteClass(DashedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {
    /**
     * Here, we are connecting '/' (base path) to a controller called 'Pages',
     * its action called 'display', and we pass a param to select the view file
     * to use (in this case, src/Template/Pages/home.ctp)...
     */
    $routes->connect('/', ['controller' => 'Articles', 'action' => 'home']);
    //Catching the login and logout routes for which the functionalities are in AdminController and not to be mistaken for page with Admin prefix
    $routes->connect('/admin/login', ['controller' => 'Admin', 'action' => 'login']);
    $routes->connect('/admin/booking', ['controller' => 'Admin', 'action' => 'booking']);
    $routes->connect('/admin/logout', ['controller' => 'Admin', 'action' => 'logout']);
    $routes->connect('/admin/edit/*', ['prefix' => false, 'controller' => 'Admin', 'action' => 'edit']);
    $routes->connect('/admin/view/*', ['prefix' => false, 'controller' => 'Admin', 'action' => 'view']);
    $routes->connect('/admin/add/*', ['prefix' => false, 'controller' => 'Admin', 'action' => 'add']);
    $routes->connect('/admin/delete/*', ['prefix' => false, 'controller' => 'Admin', 'action' => 'delete']);
    $routes->connect('/webroot/*', ['prefix' => false, 'controller' => 'Admin', 'action' => 'index']);
    $routes->connect('/webroot/admin/image/*', ['prefix' => false, 'controller' => 'Admin', 'action' => 'index']);
    Router::prefix('admin', function($routes) {
        //All Routes here will be prefixed with /admin
        // So all CMS and Dashboard and routes will be placed here

        //Without the following routing, the user who goes to /admin/review/add is being redirected to /admin/admin/login
        //So we catch such routes and remove the prefix and send them to AdminController inside the default dir.
        $routes->connect('/admin/login', ['prefix' => false,'controller' => 'Admin', 'action' => 'login']);
        $routes->connect('/admin/logout', ['prefix' => false, 'controller' => 'Admin', 'action' => 'logout']);


        $routes->connect('/:controller/:action/*');
        $routes->fallbacks(DashedRoute::class);

    });

    /**
     * Connect catchall routes for all controllers.
     *
     * Using the argument `DashedRoute`, the `fallbacks` method is a shortcut for
     *    `$routes->connect('/:controller', ['action' => 'index'], ['routeClass' => 'DashedRoute']);`
     *    `$routes->connect('/:controller/:action/*', [], ['routeClass' => 'DashedRoute']);`
     *
     * Any route class can be used with this method, such as:
     * - DashedRoute
     * - InflectedRoute
     * - Route
     * - Or your own route class
     *
     * You can remove these routes once you've connected the
     * routes you want in your application.
     */
    $routes->fallbacks(DashedRoute::class);
});

/**
 *
 * Load all plugin routes. See the Plugin documentation on
 * how to customize the loading of plugin routes.
 */

