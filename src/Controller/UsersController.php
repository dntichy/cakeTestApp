<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[] paginate($object = null, array $settings = [])
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
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
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
            'contain' => []
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
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
            $user = $this->Users->patchEntity($user, $this->request->getData());
    var_dump($user);
            // potrebné pre uloženie blobu do db
            $photo =  $this->request->getData()['avatar'];
            $fileData = fread(fopen($photo["tmp_name"],"r"),$photo["size"]);
//            $user['avatar'] = $fileData;//to iste co pod tym
            $user->avatar = $fileData;
            ///////////////////////////////
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);

            }

            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);

    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
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
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
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

    public function login()
    {
//var_dump($this->request->getData()["email"]);

        if ($this->request->is('post')) {
            $user = $this->Auth->identify(); //ak je true
//            var_dump($user);
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl(['controller' => 'users', 'action' => 'profile']));
            }

            $this->Flash->error(__("Your name or password is incorrect"));

        }

    }

    public function logout()
    {
        $this->Flash->success('You are logged out');
        return $this->redirect($this->Auth->logout());
    }

    public function profile()
    {
        $user = $this->Users->find()->where(['id' => $this->Auth->user("id")]);

        $this->set('userProfile', $this ->Auth -> user(),$user->first());
        $this->set('usr',$user->first());


    }

    public function register()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());

            //figure out gender from combo box
switch ($this->request->getData()['gender']){
    case 0:
        $result = "none";
        break;
    case 1:
        $result = "male";
        break;
    case 2:
        $result = "female";
        break;
}
            $user->gender = $result; //set gender

            if ($this->Users->save($user)) {
                $this->Flash->success('You are successfuly registred, you can log in');
                return $this->redirect(['action' => 'login']);
            } else {
                $this->Flash->error('You are not registred');
            }
        }
        $this->set(compact('user'));
        $this->set('_serialzie', ['user']);
    }


    public function isAuthorized($user)
    {
        return true;
        return parent::isAuthorized($user);
    }


}
