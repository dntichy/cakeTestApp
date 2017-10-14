<?php
namespace App\Controller;

use App\Controller\AppController;


/**
 * News Controller
 *
 * @property \App\Model\Table\NewsTable $News
 *
 * @method \App\Model\Entity\News[] paginate($object = null, array $settings = [])
 */
class NewsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $news = $this->paginate($this->News);

        $this->set(compact('news'));
        $this->set('_serialize', ['news']);
    }

    /**
     * View method
     *
     * @param string|null $id News id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $news = $this->News->get($id, [
            'contain' => []
        ]);

        $this->set('news', $news);
        $this->set('_serialize', ['news']);

    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {


        $categs_db = $this->loadModel('Categories')->find('all', ['fields' => ['title']]);
        $categs_db = $categs_db->toArray();
        $categs=[];

        for ($i = 0; $i < sizeof($categs_db); $i++) {
        //    echo $categs_db[$i]['title'] . "<br>";
            array_push($categs, $categs_db[$i]['title']);
        }


        $news = $this->News->newEntity();
        if ($this->request->is('post')) {
            $news = $this->News->patchEntity($news, $this->request->getData());

            //potrebné pre uloženie blobu do db
            if ($this->request->getData()['picture']['tmp_name'] != "") {
                $photo = $this->request->getData()['picture'];
                $fileData = fread(fopen($photo["tmp_name"], "r"), $photo["size"]);
                $news->picture = $fileData;
            } else {
                $news->picture = null; //potrebné aby nebol error pri save()
            }
            ///////////////////////////////

            $news->id_users= $this->Auth->user('id'); //idcko aktualneho uzivatela
            $news->id_categories = $this->request->getData()['categories'] + 1; //daj mi sem id zvolenej kategorie

            if ($this->News->save($news)) {
                $this->Flash->success(__('The news has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The news could not be saved. Please, try again.'));
        }
        $this->set(compact('news','categs'));
        $this->set('_serialize', ['news']);
    }

    /**
     * Edit method
     *
     * @param string|null $id News id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $news = $this->News->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $news = $this->News->patchEntity($news, $this->request->getData());
            if ($this->News->save($news)) {
                $this->Flash->success(__('The news has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The news could not be saved. Please, try again.'));
        }
        $this->set(compact('news'));
        $this->set('_serialize', ['news']);
    }

    /**
     * Delete method
     *
     * @param string|null $id News id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $news = $this->News->get($id);
        if ($this->News->delete($news)) {
            $this->Flash->success(__('The news has been deleted.'));
        } else {
            $this->Flash->error(__('The news could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    public function show(){
        //todo PATRIK
        //select z DB find('all')
        //na view pošli objekt z databazy set()
        $news = $this->News->find('all');
        //var_dump($news);
        $this->set(compact("news"));
    }

    public function isAuthorized($user)
    {
        return true;
        return parent::isAuthorized($user );
    }

}
