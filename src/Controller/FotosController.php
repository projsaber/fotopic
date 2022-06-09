<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Fotos Controller
 *
 * @property \App\Model\Table\FotosTable $Fotos
 * @method \App\Model\Entity\Foto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FotosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Articles'],
        ];
        $fotos = $this->paginate($this->Fotos);

        $this->set(compact('fotos'));
    }

    /**
     * View method
     *
     * @param string|null $id Foto id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $foto = $this->Fotos->get($id, [
            'contain' => ['Articles'],
        ]);

        $this->set(compact('foto'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $foto = $this->Fotos->newEmptyEntity();
        if ($this->request->is('post')) {
            $foto = $this->Fotos->patchEntity($foto, $this->request->getData());
            if ($this->Fotos->save($foto)) {
                $this->Flash->success(__('The foto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The foto could not be saved. Please, try again.'));
        }
        $articles = $this->Fotos->Articles->find('list', ['limit' => 200])->all();
        $this->set(compact('foto', 'articles'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Foto id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $foto = $this->Fotos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $foto = $this->Fotos->patchEntity($foto, $this->request->getData());
            if ($this->Fotos->save($foto)) {
                $this->Flash->success(__('The foto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The foto could not be saved. Please, try again.'));
        }
        $articles = $this->Fotos->Articles->find('list', ['limit' => 200])->all();
        $this->set(compact('foto', 'articles'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Foto id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $foto = $this->Fotos->get($id);
        if ($this->Fotos->delete($foto)) {
            $this->Flash->success(__('The foto has been deleted.'));
        } else {
            $this->Flash->error(__('The foto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
