<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Groups', 'Departments'],
            'limit' => 5
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    public function profile(){

    }

    public function login() {
        // layout login
        $this->viewBuilder()->setLayout('login_layout');
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                if ($user['group_id'] == 2)
                    return $this->redirect(['controller' => 'events','action' => 'index']);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Your email or password was incorrect.'));
        }
    }

    public function logout() {
        //Leave empty for now.
        $this->Flash->success(__('Good-Bye'));
        $this->redirect($this->Auth->logout());
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Groups', 'Departments', 'Comments', 'Engagements', 'Events', 'Likes']
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {


        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            // start saving photo
           /* if (!empty($this->request->getData()[‘photo’][‘name’])){
                $filename =$this->request->getData[‘photo’][‘name’];
                $uploadPath = ‘img/‘;
                $uploadFile = $uploadPath . $filename;
                if(move_uploaded_file($this->request->getData[‘photo’][‘tmp_name’], $uploadFile)){
                    $this->request->getData[‘photo’] = $filename;
                }
            }*/
            // end saving photo
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $groups = $this->Users->Groups->find('list', ['limit' => 200]);
        $departments = $this->Users->Departments->find('list', ['limit' => 200]);
        $this->set(compact('user', 'groups', 'departments'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $groups = $this->Users->Groups->find('list', ['limit' => 200]);
        $departments = $this->Users->Departments->find('list', ['limit' => 200]);
        $this->set(compact('user', 'groups', 'departments'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
