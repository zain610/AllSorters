<?php
namespace App\Controller\admin;

use App\Controller\AppController;

/**
 * Services Controller
 *
 * @property \App\Model\Table\ServiceTable $Services
 *
 * @method \App\Model\Entity\Service[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ServiceController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function initialize()
    {
        parent::initialize(); // TODO: Change the autogenerated stub
        $this->loadModel('service');
        $this->loadModel('Image');
    }

    public function index()
    {
        $service = $this->paginate($this->Service);
        $this->layout ='admin';
        $this->set(compact('service'));
    }

    /**
     * View method
     *
     * @param string|null $id Services id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->layout ='admin';
        $service = $this->Service->get($id, [
            'contain' => ['Image', 'Job']
        ]);

        $this->set('service', $service);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->layout = 'admin';
        $service = $this->Service->newEntity();

        if ($this->request->is('post')) {
            $data = $this->request->getData('checkbox');
            $formData = $this->request->getData();

            for($i=0;$i<count($data);$i++){
                if($data[$i]!=0){
                   $formData['image']['_ids'][$i] = $data[$i];
                }
            }
            $service = $this->Service->patchEntity($service, $formData);


            if ($this->Service->save($service)) {
                $this->Flash->success(__('The service has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The service could not be saved. Please, try again.'));
        }
        $image = $this->Service->Image->find('list', ['limit' => 200]);
        $img_ob = $this->Service->Image->find('all');

        $job = $this->Service->Job->find('list', ['limit' => 200]);
        $this->set(compact('service', 'image', 'job','img_ob'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Services id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->layout ='admin';
        $service = $this->Service->get($id, [
            'contain' => ['Image', 'Job']
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->request->getData('checkbox');
            $formData = $this->request->getData();

            for($i=0;$i<count($data);$i++){
                if($data[$i]!=0){
                    $formData['image']['_ids'][$i] = $data[$i];
                }
            }
            $service = $this->Service->patchEntity($service, $formData);


            if ($this->Service->save($service)) {
                $this->Flash->success(__('The service has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The service could not be saved. Please, try again.'));
        }
        $image = $this->Service->Image->find('list', ['limit' => 200]);
        $job = $this->Service->Job->find('list', ['limit' => 200]);
        $img_ob = $this->Image->find('all');
        $this->set(compact('service', 'image', 'job','img_ob'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Services id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $this->layout ='admin';
        $service = $this->Service->get($id);
        if ($this->Service->delete($service)) {
            $this->Flash->success(__('The service has been deleted.'));
        } else {
            $this->Flash->error(__('The service could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function simpleSearch()
    {
        // The URL for this simple search is "/articles/simple-search?query=...". We are interested in the "?query=..."
        // part which is the search text entered by the user.
        $queryTerms = $this->getRequest()->getQuery('query');

        // The only thing we need to do to these search terms is to turn them into a wildcard to work correctly with
        // the LIKE clause. Otherwise, it will only search for articles where the title or body is EXACTLY what the
        // user searched, rather than matching articles where the title or body CONTAINS the search terms.
        $queryTermsWithWildCard = '%' . $queryTerms . '%';

        // Note that we are happy for either the title or the body to match.
        // If we were to have used: where(['title LIKE' => ..., 'body LIKE' => ...]) without using another array and
        // the OR keyword, then the default query would ask for articles where BOTH the title AND the body match the
        // search terms, which is typically not what the user expects when performing a search.
        $services = $this->Service->find()->where([
            'OR' => [
                'Service_Title LIKE' => $queryTermsWithWildCard,
                'Service_Description LIKE' => $queryTermsWithWildCard,
                'Service_Detail LIKE' => $queryTermsWithWildCard
            ]
        ]);

        // In a large CMS, this search is likely to return a large number of articles, so the results should be
        // paginated.
        $this->loadComponent('Paginator');
        $paginatedServices = $this->Paginator->paginate($services);
        $this->set('services', $paginatedServices);


        // Pass the query the user asked for to the view, so we can say something like "Results for 'Blah'..." to
        // confirm that we did indeed search what they asked us to. It also means that we can populate the search
        // text input with the string, so the user can perform the search again.
        $this->set('query', $queryTerms);

        $this->viewBuilder()->setLayout('admin');
        $this->viewBuilder()->setTemplate('search');
    }

    public function advanceSearch() {
        $this->loadComponent('Paginator');
        $queryTermsString = $this->getRequest()->getQuery('query');

        // Split the query string based on one or more whitespace characters (\s+).
        // This is done using a "Regular Expression" (regex). They are often difficult to make sense of when starting out
        // building websites, but they do get easier to understand the more you work with them. Proof of this is that
        // when I started my career, I would have had no idea what /\s+/ meant. But after a lot of practice, I'm able
        // to write a regex that does pretty much what I need for simpler tasks like this (Split on all whitespace characters).
        $queryTermsArray = preg_split('/\s+/', $queryTermsString);

        // We want to search for each term independently. If the user provided multiple terms, such as "PHP HTML", then
        // we should find all articles where:
        //  (The title includes "PHP" OR the body includes "PHP")
        //   AND
        //  (The title includes "HTML" OR the body includes "HTML")
        // Notice how for each term, we need to build a condition such as "title LIKE ... OR body LIKE ...".
        // This is what happens in the loop below, we build a collection of these "OR" statements.
        $queryTermConditions = [];
        foreach($queryTermsArray as $term){
            $queryTermConditions[] = ['OR' => [
                'Service.Service_Title LIKE' => "%{$term}%",
                'Service.Service_Description LIKE' => "%{$term}%",
                'Service.Service_Detail LIKE' => "%{$term}%",
            ]];
        }

        // Once we have a collection of or (title LIKE ... OR body LIKE ...) statements, then we need to combine each
        // one using an AND (see comments above for example). By default, if we provide an array of conditions to
        // the where() method, then it will join them all together using AND, which is exactly what we want.
        $serviceQuery = $this->Service->find()->where($queryTermConditions);

        $this->set('services', $this->Paginator->paginate($serviceQuery));

        // Pass the query the user asked for to the view, so we can say something like "Results for 'Blah'..." to
        // confirm that we did indeed search what they asked us to. It also means that we can populate the search
        // text input with the string, so the user can perform the search again.
        $this->set('query', $queryTermsString);

        $this->viewBuilder()->setLayout('admin');
        $this->viewBuilder()->setTemplate('search');

    }
}
