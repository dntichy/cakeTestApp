<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UsersRoles Controller
 *
 * @property \App\Model\Table\UsersRolesTable $UsersRoles
 *
 * @method \App\Model\Entity\UsersRole[] paginate($object = null, array $settings = [])
 */
class UsersRolesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $usersRoles = $this->paginate($this->UsersRoles);

        $this->set(compact('usersRoles'));
        $this->set('_serialize', ['usersRoles']);
    }

    /**
     * View method
     *
     * @param string|null $id Users Role id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usersRole = $this->UsersRoles->get($id, [
            'contain' => []
        ]);

        $this->set('usersRole', $usersRole);
        $this->set('_serialize', ['usersRole']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usersRole = $this->UsersRoles->newEntity();
        if ($this->request->is('post')) {
            $usersRole = $this->UsersRoles->patchEntity($usersRole, $this->request->getData());
var_dump($usersRole);

//            if ($this->UsersRoles->save($usersRole)) {
//                $this->Flash->success(__('The users role has been saved.'));
//
//                return $this->redirect(['action' => 'index']);
//            }
            $this->Flash->error(__('The users role could not be saved. Please, try again.'));
        }

        $users = $this->loadModel('Users')->find('list', ['keyField' => 'id',
            'valueField' => function ($users) {
                return $users->get('label');
            }, 'limit' => 200]);
        $users->toArray();


        $roles = $this->loadModel('Roles')->find('list', ['keyField' => 'id',
            'valueField' => function ($roles) {
                return $roles->get('label');
            }, 'limit' => 200]);
        $roles->toArray();


        $this->set(compact('usersRole', 'users', 'roles'));
        $this->set('_serialize', ['usersRole']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Users Role id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usersRole = $this->UsersRoles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usersRole = $this->UsersRoles->patchEntity($usersRole, $this->request->getData());
            if ($this->UsersRoles->save($usersRole)) {
                $this->Flash->success(__('The users role has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The users role could not be saved. Please, try again.'));
        }
        $this->set(compact('usersRole'));
        $this->set('_serialize', ['usersRole']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Users Role id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usersRole = $this->UsersRoles->get($id);
        if ($this->UsersRoles->delete($usersRole)) {
            $this->Flash->success(__('The users role has been deleted.'));
        } else {
            $this->Flash->error(__('The users role could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    public function isAuthorized($user)
    {
        return true;
        return parent::isAuthorized($user);
    }
}
