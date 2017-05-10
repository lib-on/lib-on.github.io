<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Editoras Controller
 *
 * @property \App\Model\Table\EditorasTable $Editoras
 */
class EditorasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $editoras = $this->paginate($this->Editoras);

        $this->set(compact('editoras'));
        $this->set('_serialize', ['editoras']);
    }

    /**
     * View method
     *
     * @param string|null $id Editora id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $editora = $this->Editoras->get($id, [
            'contain' => ['Livros']
        ]);

        $this->set('editora', $editora);
        $this->set('_serialize', ['editora']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $editora = $this->Editoras->newEntity();
        if ($this->request->is('post')) {
            $editora = $this->Editoras->patchEntity($editora, $this->request->getData());
            if ($this->Editoras->save($editora)) {
                $this->Flash->success(__('The editora has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The editora could not be saved. Please, try again.'));
        }
        $this->set(compact('editora'));
        $this->set('_serialize', ['editora']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Editora id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $editora = $this->Editoras->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $editora = $this->Editoras->patchEntity($editora, $this->request->getData());
            if ($this->Editoras->save($editora)) {
                $this->Flash->success(__('The editora has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The editora could not be saved. Please, try again.'));
        }
        $this->set(compact('editora'));
        $this->set('_serialize', ['editora']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Editora id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $editora = $this->Editoras->get($id);
        if ($this->Editoras->delete($editora)) {
            $this->Flash->success(__('The editora has been deleted.'));
        } else {
            $this->Flash->error(__('The editora could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
