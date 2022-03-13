<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;

/**
 * Events Controller
 *
 * @property \App\Model\Table\EventsTable $Events
 *
 * @method \App\Model\Entity\Event[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EventsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $array_engagement_event_id = [];
        $user_id = $this->request->session()->read('Auth.User.id');
        $group_id = $this->request->session()->read('Auth.User')['group_id'];
        if ($group_id == 1) {
            $event = $this->Events->find()->order(['Events.created' => 'DESC']);
        } else if( $group_id ==2) {
            $array_engagement = TableRegistry::getTableLocator()->get('Engagements')
                ->find()
                ->select(['event_id'])
                ->where([
                    'user_id' => $user_id
                ])->toArray();


            foreach ($array_engagement as $id) {
                array_push($array_engagement_event_id, $id->event_id);
            }

            $event = $this->Events->find()->order(['Events.created' => 'DESC']);

        } else if( $group_id ==3)  {
            $event = $this->Events
                ->find()
                ->where([
                    'user_id' => $this->request->session()->read('Auth.User.id')
                ])
                ->order(['Events.created' => 'DESC']);
        }
        $this->paginate = [
            'contain' => ['Users' => 'Departments']
        ];


        $events = $this->paginate($event);

        $this->set(compact('events', 'array_engagement_event_id'));
    }

    /**
     * View method
     *
     * @param string|null $id Event id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $event = $this->Events->get($id, [
            'contain' => ['Users', 'Comments', 'Engagements', 'Likes']
        ]);

        $this->set('event', $event);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
//    public function add()
//    {
//        $event = $this->Events->newEntity();
//        if ($this->request->is('post')) {
//            if ($event->photo_path == null || empty($event->photo_path) || $event->photo_path == "")
//                $event->photo_path = 1;
//            $event = $this->Events->patchEntity($event, $this->request->getData());
//            if ($this->Events->save($event)) {
//                $this->Flash->success(__('The event has been saved.'));
//
//                return $this->redirect(['action' => 'index']);
//            }
//            $this->Flash->error(__('The event could not be saved. Please, try again.'));
//        }
//        // $photos = $this->Events->Photos->find('list', ['limit' => 200]);
//        $users = $this->Events->Users->find('list', ['limit' => 200]);
//        $this->set(compact('event', 'users'));
//    }

    /**
     * Edit method
     *
     * @param string|null $id Event id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $event = $this->Events->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $event = $this->Events->patchEntity($event, $this->request->getData());
            if ($this->Events->save($event)) {
                $this->Flash->success(__('The event has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The event could not be saved. Please, try again.'));
        }
        // $photos = $this->Events->Photos->find('list', ['limit' => 200]);
        $users = $this->Events->Users->find('list', ['limit' => 200]);
        $this->set(compact('event', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Event id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $event = $this->Events->get($id);
        if ($this->Events->delete($event)) {
            $this->Flash->success(__('The event has been deleted.'));
        } else {
            $this->Flash->error(__('The event could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function add() {
        $event = $this->Events->newEntity();
        if ($this->request->is('post')) {
//            $this->Events->create();
//            $event = $this->Events->patchEntity($event, $this->request->getData());
//            if ($this->Events->save($event)) {
//                //$this->Session->setFlash(__('The event has been saved.'));
//                return $this->redirect(array('action' => 'index'));
//            } else {
//                //$this->Session->setFlash(__('The event could not be saved. Please, try again.'));
//            }

            if(!empty($this->request->getData()))
            {
                $data = $this->request->getData();
                //Check if image has been uploaded
                if(!empty($data['photo_path']['name']))
                {
                    $file = $data['photo_path']; //put the data into a var for easy use

                    $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
                    $arr_ext = array('png','jpg', 'jpeg', 'gif'); //set allowed extensions


                    //only process if the extension is valid
                    if(in_array($ext, $arr_ext))
                    {
                        // rename the file
                        $file['name'] =  time() . '.' . $ext;
                        //do the actual uploading of the file. First arg is the tmp name, second arg is
                        //where we are putting it
                        move_uploaded_file($file['tmp_name'], WWW_ROOT  . 'img/' .$file['name']);

                        //prepare the filename for database entry
                        $data['photo_path'] = $file['name'];
                    }
                }

                //now do the save
                $data = $this->Events->patchEntity($event, $data);
                if($this->Events->save($data)) {
                    return $this->redirect(array('action' => 'index'));
                }
            }
        }

        //// $photos = $this->Events->Photos->find('list', ['limit' => 200]);
        $users = $this->Events->Users->find('list', ['limit' => 200]);
        $this->set(compact('event', 'users'));
    }

    public function going(){


        $user = $this->request->session()->read('Auth.User');
        $group_id = $user['group_id'];

        if ($group_id == 1 or $group_id ==2) {

            $connection = ConnectionManager::get('default');
            $events = $connection->execute('SELECT * from events, users, engagements WHERE users.id = engagements.user_id AND events.id = engagements.event_id AND engagements.engagement = 1 ORDER BY events.created DESC')->fetchAll('assoc');

        }

        $this->set(compact('events'));
    }
}
