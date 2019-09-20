<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Utility\Security;
/**
 * Image Controller
 *
 * @property \App\Model\Table\ImageTable $Image
 *
 * @method \App\Model\Entity\Image[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ImageController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $image = $this->paginate($this->Image);

        $this->set(compact('image'));
//      $image = $this->Image->find('all');
//        $this->set('image', $image);
    }

    /**
     * View method
     *
     * @param string|null $id Image id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
//    public function view($id = null)
//    {
//        $image = $this->Image->get($id, [
//            'contain' => ['BlogPost', 'GalleryPage', 'Service']
//        ]);
//
//        $this->set('image', $image);
//    }

    public function view(){
        $image = $this->Image->find('all');
        $this->set('image', $image);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function upload()
    {
        if ($this->request->is('post')) {
            $image = $this->Image->newEntity();
            $myname = $this->request->getData()['image']['name'];
            $mytmp = $this->request->getData()['image']['tmp_name'];
            $myext = substr(strrchr($myname, "."), 1);
            $arr_ext = array('jpg', 'jpeg', 'png');
            $check_md5 = md5_file($mytmp);
            foreach ($image as $image){
                $flag = $image->Image_Content;
                if($flag === $check_md5){
                    $this->Flash->error("cannot upload the same image");
                    return $this->redirect(['action'=>'upload']);
                }
            }
            if(!empty($this->request->getData()['image']['name'])){
                if(in_array($myext, $arr_ext)){
                    $mypath = '/admin/image/upload/'.Security::hash($myname).".".$myext;
                    $md5_value = md5_file($mytmp);
//            $image = $this->Image->patchEntity($image, $this->request->getData());
                    $image->Image_Content = $md5_value;
                    $image->name = $myname;
                    $image->path = $mypath;
                    $image->created_at = date('Y-m-d H:i:s');
                    if(move_uploaded_file($mytmp, WWW_ROOT.$mypath)){
                        $this->Image->save($image);
                        return $this->redirect(['action'=>'index']);
                    }
                } else {
                    $this->Flash->error("Please upload a image file e.g. jpg, jpeg and png");
                }
            } else{
                $this->Flash->error(__('The image could not be saved. Please, try again.'));
            }
        }
//        $blogPost = $this->Image->BlogPost->find('list', ['limit' => 200]);
//        $galleryPage = $this->Image->GalleryPage->find('list', ['limit' => 200]);
//        $service = $this->Image->Service->find('list', ['limit' => 200]);
//        $this->set(compact('image', 'blogPost', 'galleryPage', 'service'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Image id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $image = $this->Image->get($id, [
            'contain' => ['BlogPost', 'GalleryPage', 'Service']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $image = $this->Image->patchEntity($image, $this->request->getData());
            if ($this->Image->save($image)) {
                $this->Flash->success(__('The image has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The image could not be saved. Please, try again.'));
        }
        $blogPost = $this->Image->BlogPost->find('list', ['limit' => 200]);
        $galleryPage = $this->Image->GalleryPage->find('list', ['limit' => 200]);
        $service = $this->Image->Service->find('list', ['limit' => 200]);
        $this->set(compact('image', 'blogPost', 'galleryPage', 'service'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Image id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $image = $this->Image->get($id);
        if ($this->Image->delete($image)) {
            $this->Flash->success(__('The image has been deleted.'));
        } else {
            $this->Flash->error(__('The image could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
