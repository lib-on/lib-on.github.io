<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Emprestimos Controller
 *
 * @property \App\Model\Table\EmprestimosTable $Emprestimos
 */
class EmprestimosController extends AppController
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
        $emprestimos = $this->paginate($this->Emprestimos);

        $this->set(compact('emprestimos'));
        $this->set('_serialize', ['emprestimos']);
    }

    /**
     * View method
     *
     * @param string|null $id Emprestimo id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $emprestimo = $this->Emprestimos->get($id, [
            'contain' => ['Livros']
        ]);

        $this->set('emprestimo', $emprestimo);
        $this->set('_serialize', ['emprestimo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $emprestimo = $this->Emprestimos->newEntity();
        if ($this->request->is('post')) {
            $emprestimo = $this->Emprestimos->patchEntity($emprestimo, $this->request->getData());
            if ($this->Emprestimos->save($emprestimo)) {
                $this->Flash->success(__('The emprestimo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The emprestimo could not be saved. Please, try again.'));
        }
        $livros = $this->Emprestimos->Livros->find('list',[ 
            'keyField' => 'id',
            'valueField' => function($row){
                return 'título: ' . $row['titulo'] . ' Autor: ' . $row['autor'];
            }]);
        $users;
        $acervo;
        $this->set(compact('emprestimo', 'livros'));
        $this->set('_serialize', ['emprestimo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Emprestimo id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $emprestimo = $this->Emprestimos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $emprestimo = $this->Emprestimos->patchEntity($emprestimo, $this->request->getData());
            if ($this->Emprestimos->save($emprestimo)) {
                $this->Flash->success(__('The emprestimo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The emprestimo could not be saved. Please, try again.'));
        }
        $livros = $this->Emprestimos->Livros->find('list', ['limit' => 200]);
        $this->set(compact('emprestimo', 'livros'));
        $this->set('_serialize', ['emprestimo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Emprestimo id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $emprestimo = $this->Emprestimos->get($id);
        if ($this->Emprestimos->delete($emprestimo)) {
            $this->Flash->success(__('The emprestimo has been deleted.'));
        } else {
            $this->Flash->error(__('The emprestimo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
