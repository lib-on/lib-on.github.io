<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * LivroFisico Controller
 *
 * @property \App\Model\Table\LivroFisicoTable $LivroFisico
 */
class LivroFisicoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Livros']
        ];
        $livroFisico = $this->paginate($this->LivroFisico);

        $this->set(compact('livroFisico'));
        $this->set('_serialize', ['livroFisico']);
    }

    /**
     * View method
     *
     * @param string|null $id Livro Fisico id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $livroFisico = $this->LivroFisico->get($id, [
            'contain' => ['Livros']
        ]);

        $this->set('livroFisico', $livroFisico);
        $this->set('_serialize', ['livroFisico']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $livroFisico = $this->LivroFisico->newEntity();
        if ($this->request->is('post')) {
            $livroFisico = $this->LivroFisico->patchEntity($livroFisico, $this->request->getData());
            if ($this->LivroFisico->save($livroFisico)) {
                $this->Flash->success(__('The livro fisico has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The livro fisico could not be saved. Please, try again.'));
        }
        $livros = $this->LivroFisico->Livros->find('list', ['limit' => 200]);
        $this->set(compact('livroFisico', 'livros'));
        $this->set('_serialize', ['livroFisico']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Livro Fisico id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $livroFisico = $this->LivroFisico->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $livroFisico = $this->LivroFisico->patchEntity($livroFisico, $this->request->getData());
            if ($this->LivroFisico->save($livroFisico)) {
                $this->Flash->success(__('The livro fisico has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The livro fisico could not be saved. Please, try again.'));
        }
        $livros = $this->LivroFisico->Livros->find('list', [
            'keyValue' => 'id',
            'valueField' => function($row){
                return $row['titulo'] . ', autor: ' . $row['autor'];
            }]);
        $this->set(compact('livroFisico', 'livros'));
        $this->set('_serialize', ['livroFisico']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Livro Fisico id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $livroFisico = $this->LivroFisico->get($id);
        if ($this->LivroFisico->delete($livroFisico)) {
            $this->Flash->success(__('The livro fisico has been deleted.'));
        } else {
            $this->Flash->error(__('The livro fisico could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
