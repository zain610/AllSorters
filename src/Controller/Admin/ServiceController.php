<?php
namespace App\Controller\admin;

use App\Controller\AppController;

/**
 * Service Controller
 *
 * @property \App\Model\Table\ServiceTable $Service
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
    public function index()
    {
        $service = $this->paginate($this->Service);
        $this->layout ='admin';
        $this->set(compact('service'));
    }

    /**
     * View method
     *
     * @param string|null $id Service id.
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
            $service = $this->Service->patchEntity($service, $this->request->getData());
            if ($this->Service->save($service)) {
                $this->Flash->success(__('The service has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The service could not be saved. Please, try again.'));
        }
        $image = $this->Service->Image->find('list', ['limit' => 200]);
        $job = $this->Service->Job->find('list', ['limit' => 200]);
        $this->set(compact('service', 'image', 'job'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Service id.
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
            $service = $this->Service->patchEntity($service, $this->request->getData());
            if ($this->Service->save($service)) {
                $this->Flash->success(__('The service has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The service could not be saved. Please, try again.'));
        }
        $image = $this->Service->Image->find('list', ['limit' => 200]);
        $job = $this->Service->Job->find('list', ['limit' => 200]);
        $this->set(compact('service', 'image', 'job'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Service id.
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
}
