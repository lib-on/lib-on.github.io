<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Livro Controller
 *
 * @property \App\Model\Table\LivroTable $Livro
 */
class LivroController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $livro = $this->paginate($this->Livro);

        $this->set(compact('livro'));
        $this->set('_serialize', ['livro']);
    }

    /**
     * View method
     *
     * @param string|null $id Livro id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $livro = $this->Livro->get($id, [
            'contain' => []
        ]);

        $this->set('livro', $livro);
        $this->set('_serialize', ['livro']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $livro = $this->Livro->newEntity();
        if ($this->request->is('post')) {
            $livro = $this->Livro->patchEntity($livro, $this->request->getData());
            if ($this->Livro->save($livro)) {
                $this->Flash->success(__('The livro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The livro could not be saved. Please, try again.'));
        }
        $this->set(compact('livro'));
        $this->set('_serialize', ['livro']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Livro id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $livro = $this->Livro->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $livro = $this->Livro->patchEntity($livro, $this->request->getData());
            if ($this->Livro->save($livro)) {
                $this->Flash->success(__('The livro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The livro could not be saved. Please, try again.'));
        }
        $this->set(compact('livro'));
        $this->set('_serialize', ['livro']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Livro id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $livro = $this->Livro->get($id);
        if ($this->Livro->delete($livro)) {
            $this->Flash->success(__('The livro has been deleted.'));
        } else {
            $this->Flash->error(__('The livro could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
