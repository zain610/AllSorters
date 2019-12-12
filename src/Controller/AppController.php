<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Datasource\ConnectionManager;
use Cake\Event\Event;



/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');

        /*
         * Enable the following components for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
        //$this->loadComponent('Csrf');
        $this->loadComponent('Auth',[
            'authenticate'=>[
                'Form'=>[
                    'fields'=>[
                        'username'=>'username',
                        'password'=>'password'
                    ],
                    //link to the table we want to reach
                    'userModel' => 'admin'
                ]
            ],
            'loginAction'=>[
                'controller'=>'Admin',
                'action'=>'login'
            ],
            'loginRedirect'=>[
                'controller'=>'Articles',
                'action'=>'home'
            ]
        ]);
    }
    public function beforeFilter(Event $event)
    {
        // We really want the site settings and the current user (if any) to be available in all templates.
        // This achieves that (see https://stackoverflow.com/a/1384697).
        if(!array_key_exists('_serialize',$this->viewVars)&&
            in_array($this->response->getType(),['application/jason','application/xml'])
        ){
            $this->set('_serialize',true);
        }
        $this->set('currentUser', $this->Auth->user());

        //login check
        if ($this->request->getSession()->read('Auth.User')){
            $this->set('loggedIn',true);
        } else{
            $this->set('loggedIn',false);
        }
        //get admin details
        $connection = ConnectionManager::get('default');
        $admin_details = $connection->execute('Select * from admin') ->fetchAll('assoc');
        $this->set('admin', $admin_details);

        $this->Auth->allow(['verification','logout', 'forgotpassword', 'resetpassword']);

        return parent::beforeFilter($event);


    }

}
