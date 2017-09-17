<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Photoalbums Controller
 *
 * @property \App\Model\Table\PhotoalbumsTable $Photoalbums
 *
 * @method \App\Model\Entity\Photoalbum[] paginate($object = null, array $settings = [])
 */
class PhotoalbumsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $photoalbums = $this->paginate($this->Photoalbums);

        $this->set(compact('photoalbums'));
        $this->set('_serialize', ['photoalbums']);
    }

    /**
     * View method
     *
     * @param string|null $id Photoalbum id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $photoalbum = $this->Photoalbums->get($id, [
            'contain' => []
        ]);

        $this->set('photoalbum', $photoalbum);
        $this->set('_serialize', ['photoalbum']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $photoalbum = $this->Photoalbums->newEntity();
        if ($this->request->is('post')) {
            $photoalbum = $this->Photoalbums->patchEntity($photoalbum, $this->request->getData());
            if ($this->Photoalbums->save($photoalbum)) {
                $this->Flash->success(__('The photoalbum has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The photoalbum could not be saved. Please, try again.'));
        }
        $this->set(compact('photoalbum'));
        $this->set('_serialize', ['photoalbum']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Photoalbum id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $photoalbum = $this->Photoalbums->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $photoalbum = $this->Photoalbums->patchEntity($photoalbum, $this->request->getData());
            if ($this->Photoalbums->save($photoalbum)) {
                $this->Flash->success(__('The photoalbum has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The photoalbum could not be saved. Please, try again.'));
        }
        $this->set(compact('photoalbum'));
        $this->set('_serialize', ['photoalbum']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Photoalbum id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $photoalbum = $this->Photoalbums->get($id);
        if ($this->Photoalbums->delete($photoalbum)) {
            $this->Flash->success(__('The photoalbum has been deleted.'));
        } else {
            $this->Flash->error(__('The photoalbum could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
