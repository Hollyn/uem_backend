<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Engagements Controller
 *
 * @property \App\Model\Table\EngagementsTable $Engagements
 *
 * @method \App\Model\Entity\Engagement[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EngagementsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Events']
        ];
        $engagements = $this->paginate($this->Engagements);

        $this->set(compact('engagements'));
    }

    /**
     * View method
     *
     * @param string|null $id Engagement id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $engagement = $this->Engagements->get($id, [
            'contain' => ['Users', 'Events']
        ]);

        $this->set('engagement', $engagement);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $engagement = $this->Engagements->newEntity();
        if ($this->request->is('post')) {
            $engagement = $this->Engagements->patchEntity($engagement, $this->request->getData());
            if ($this->Engagements->save($engagement)) {
                $this->Flash->success(__('The engagement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The engagement could not be saved. Please, try again.'));
        }
        $users = $this->Engagements->Users->find('list', ['limit' => 200]);
        $events = $this->Engagements->Events->find('list', ['limit' => 200]);
        $this->set(compact('engagement', 'users', 'events'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Engagement id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $engagement = $this->Engagements->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $engagement = $this->Engagements->patchEntity($engagement, $this->request->getData());
            if ($this->Engagements->save($engagement)) {
                $this->Flash->success(__('The engagement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The engagement could not be saved. Please, try again.'));
        }
        $users = $this->Engagements->Users->find('list', ['limit' => 200]);
        $events = $this->Engagements->Events->find('list', ['limit' => 200]);
        $this->set(compact('engagement', 'users', 'events'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Engagement id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $engagement = $this->Engagements->get($id);
        if ($this->Engagements->delete($engagement)) {
            $this->Flash->success(__('The engagement has been deleted.'));
        } else {
            $this->Flash->error(__('The engagement could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
