<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Product Controller
 *
 * @property \App\Model\Table\ProductTable $Product
 *
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductController extends AppController
{

    public function initialize()
    {
        parent::initialize(); // TODO: Change the autogenerated stub
        $this->layout = 'client';
        $this->Auth->allow(['index']);

    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {

        $this->paginate = [
            'contain' => ['Image']
        ];
        $products = $this->paginate($this->Product->find('all'));

        $this->set(compact('products'));

    }
}