<?php
namespace App\Controller;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;


class ArticlesController extends AppController
{


    public function isAuthorized($user)
    {
        // return $user['id'] > 0;
        return $this->Auth->user('role') > 2;
    }

    public function initialize()
    {
        parent::initialize(); // TODO: Change the autogenerated stub
        $this->Auth->allow(['home']);
        $this->viewBuilder()->setLayout('client');

    }

    public function home()
    {
        $connection = ConnectionManager::get('default');
        $services = $connection->execute('SELECT * FROM service join service_image on service.Service_id = service_image.Service_id join image on service_image.Image_id = image.Image_id  LIMIT 5')->fetchAll('assoc');
        $this->set('services', $services);

        $blogs = $connection->execute('Select * from blog_post LIMIT 5') ->fetchAll('assoc');
        $this->set('blogs', $blogs);


        // This view doesn't actually need to load any data to pass to the view,
        // because it is all hardcoded in the src/Templates/Articles/home.ctp template.
    }

}
