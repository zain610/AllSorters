<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Entity\Role;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Mailer\Email;
use Cake\Mailer\TransportFactory;
use Cake\Utility\Security;
use Cake\ORM\TableRegistry;

/**
 * Admin Controller
 *
 * @property \App\Model\Table\AdminTable $Admin
 *
 * @method \App\Model\Entity\Admin[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AdminController extends AppController
{
    public function initialize()
    {
        parent::initialize(); // TODO: Change the autogenerated stub
        $this->loadModel('Admin');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $admin = $this->paginate($this->Admin);
        $this->layout ='admin';
        $this->set(compact('admin'));

    }

    /**
     * View method
     *
     * @param string|null $id Admin id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $admin = $this->Admin->get($id, [
            'contain' => []
        ]);
//        $admin = $this->paginate($this->Admin);

        $this->set('admin', $admin);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $admin = $this->Admin->newEntity();
        if ($this->request->is('post')) {
            $admin = $this->Admin->patchEntity($admin, $this->request->getData());
            if ($this->Admin->save($admin)) {
                $this->Flash->success(__('The admin has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The admin could not be saved. Please, try again.'));
        }

        $this->set(compact('admin'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Admin id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->layout ='admin';
        $admin = $this->Admin->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $admin = $this->Admin->patchEntity($admin, $this->request->getData());
            if ($this->Admin->save($admin)) {
                $this->Flash->success(__('The admin has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The admin could not be saved. Please, try again.'));
        }

        $this->set(compact('admin'));
    }
    public function changepassword($id = null)
    {
        $this->layout ='admin';
        $admin = $this->Admin->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $admin = $this->Admin->patchEntity($admin, $this->request->getData());
            if ($this->Admin->save($admin)) {
                $this->Flash->success(__('The admin has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The admin could not be saved. Please, try again.'));
        }

        $this->set(compact('admin'));
    }
    /**
     * Delete method
     *
     * @param string|null $id Admin id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $admin = $this->Admin->get($id);
        if ($this->Admin->delete($admin)) {
            $this->Flash->success(__('The admin has been deleted.'));
        } else {
            $this->Flash->error(__('The admin could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function forgotpassword(){
        if($this->request->is('post')){
            $myemail = $this->request->getData('email');
            $mytoken = '/'.Security::hash(Security::randomBytes(25));

            $adminTable = TableRegistry::get('admin');
            $admin = $adminTable->find('all')->where(['email'=>$myemail])->first();
            $admin->password = '';
            $admin->token = $mytoken;
            if($adminTable->save($admin)){
                $this->Flash->success('Reset password link has been sent to your email ('.$myemail.'), please check your index');

                $email = new Email('default');
                $email->setFrom(['allsortMary@gmail.com' => 'All Sorters'])
                    ->setTo($myemail)
                    ->setTemplate('default')
                    ->setViewVars(['title' => "Reset Password", 'content'=> 'Hello '.$myemail.' Please click link below to reset your password: http://localhost:8765/admin/resetpassword'.$mytoken])
                    ->setSubject("Please confirm your reset password");
                $email->send();
            }
        }
    }

    public function resetpassword($token){
        debug($token);
//        if($this->request->is('post')){
////            $hasher = new DefaultPasswordHasher();
//            $mypass = $this->request->getData('password');
//            $adminTable = TableRegistry::get('admin');
//            $admin = $adminTable->find('all')->where(['token'=>$token])->first();
//            $admin->password=$mypass;
//            if($adminTable->save($admin)){
//                return $this->redirect(['action'=>'login']);
//            }
//        }
            $adminTable = TableRegistry::get('admin');
            $admin = $adminTable->find('all')->where(['token'=>'/'.$token])->first();
            debug($admin);
            $this->request->is('post');
            $mypass = $this->request->getData('password');
            debug($mypass);
            $admin->password = $mypass;
            $adminTable->save($admin);
    }


    public function login(){
        if($this->request->is('post')){
            if($this->request->getData('username')==''){
                $this->set('usernameError','User name cannot be empty.');
            }
            if($this->request->getData('password')==''){
                $this->set('passwordError','Password cannot be empty.');
            }

            $user= $this->Auth->identify();
            if($user){
                $this->Auth->setUser($user);
                //if the user is logged in, display the admin homepage
                return $this->redirect(['controller' => 'Admin', 'action' => 'index']);
                $this->Flash->error("Incorrect username or password");
            }
        }
    }
    public function logout(){
        $this->Flash->success('You are logged out');
        $this->Auth->logout();
        return $this->redirect(['controller' => 'Admin', 'action' => 'login']);
    }
    public function booking(){
        $admin = $this->paginate($this->Admin);
        $this->loadModel('Booking');
        $this->layout ='admin';
        $this->set(compact('admin'));
        if($this->request->is('post')){
            $booking = $this->Booking->newEntity();
            $booking->title=$this->request->getData()['title'];
            $booking->start=$this->request->getData()['start'];
            $booking->adminID=$this->Auth->user('id');
            //var_dump($booking);
            $this->Booking->save($booking);
            return $this->redirect(['controller' => 'Admin', 'action' => 'booking']);
        }
        $allBooking=$this->Booking->find('all',['conditions'=>['adminID'=>$this->Auth->user('id')]])->toList();
        $this->set(compact('allBooking'));

    }
    public function bookingdelete($id=null){
        $this->loadModel('Booking');

        $booking = $this->Booking->get($id);

        if ($this->Booking->delete($booking)) {
            $this->Flash->success(__('The booking has been deleted.'));
        } else {
            $this->Flash->error(__('The booking could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'booking']);
    }

}
