<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Lids Controller
 *
 * @property \App\Model\Table\LidsTable $Lids
 * @method \App\Model\Entity\Lid[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LidsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $lids = $this->paginate($this->Lids);

        $this->set(compact('lids'));
    }

    /**
     * View method
     *
     * @param string|null $id Lid id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lid = $this->Lids->get($id, [
            'contain' => ['Articles'],
        ]);

        $this->set(compact('lid'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lid = $this->Lids->newEmptyEntity();
        if ($this->request->is('post')) {
            $lid = $this->Lids->patchEntity($lid, $this->request->getData());
            if ($this->Lids->save($lid)) {
                $this->Flash->success(__('The lid has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lid could not be saved. Please, try again.'));
        }
        $this->set(compact('lid'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Lid id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lid = $this->Lids->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lid = $this->Lids->patchEntity($lid, $this->request->getData());
            if ($this->Lids->save($lid)) {
                $this->Flash->success(__('The lid has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lid could not be saved. Please, try again.'));
        }
        $this->set(compact('lid'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Lid id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lid = $this->Lids->get($id);
        if ($this->Lids->delete($lid)) {
            $this->Flash->success(__('The lid has been deleted.'));
        } else {
            $this->Flash->error(__('The lid could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
