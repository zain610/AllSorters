<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Review Controller
 *
 *
 * @method \App\Model\Entity\Review[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ReviewController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {

        $review = $this->paginate($this->Review);
        $this->layout ='admin';
        $this->set(compact('review'));
    }

    /**
     * View method
     *
     * @param string|null $id Review id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->layout ='admin';

        $review = $this->Review->get($id, [
            'contain' => []
        ]);

        $this->set('review', $review);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->layout = 'admin';
        $review = $this->Review->newEntity();
        if ($this->request->is('post')) {
            $review = $this->Review->patchEntity($review, $this->request->getData());
            $review->Month_Year = time();
            if ($this->Review->save($review)) {
                $this->Flash->success(__('The review has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The review could not be saved. Please, try again.'));
        }
        $this->set(compact('review'));

    }

    /**
     * Edit method
     *
     * @param string|null $id Review id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->layout = 'admin';
        $review = $this->Review->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $review = $this->Review->patchEntity($review, $this->request->getData());
            if ($this->Review->save($review)) {
                $this->Flash->success(__('The review has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The review could not be saved. Please, try again.'));
        }
        $this->set(compact('review'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Review id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $review = $this->Review->get($id);
        if ($this->Review->delete($review)) {
            $this->Flash->success(__('The review has been deleted.'));
        } else {
            $this->Flash->error(__('The review could not be deleted. Please, try again.'));
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
        $reviews = $this->Review->find()->where([
            'OR' => [
                'Client_Name LIKE' => $queryTermsWithWildCard,
                'Suburb LIKE' => $queryTermsWithWildCard,
                'Review_Details LIKE' => $queryTermsWithWildCard
            ]
        ]);

        // In a large CMS, this search is likely to return a large number of articles, so the results should be
        // paginated.
        $this->loadComponent('Paginator');
        $paginatedReviews = $this->Paginator->paginate($reviews);
        $this->set('reviews', $paginatedReviews);


        // Pass the query the user asked for to the view, so we can say something like "Results for 'Blah'..." to
        // confirm that we did indeed search what they asked us to. It also means that we can populate the search
        // text input with the string, so the user can perform the search again.
        $this->set('query', $queryTerms);

        $this->viewBuilder()->setLayout('admin');
        $this->viewBuilder()->setTemplate('search');
    }
}
