<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Alunos Controller
 *
 * @property \App\Model\Table\AlunosTable $Alunos
 */
class AlunosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $alunos = $this->paginate($this->Alunos);

        $this->set(compact('alunos'));
        $this->set('_serialize', ['alunos']);
    }

    /**
     * View method
     *
     * @param string|null $id Aluno id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $aluno = $this->Alunos->get($id, [
            'contain' => []
        ]);

        $this->set('aluno', $aluno);
        $this->set('_serialize', ['aluno']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $aluno = $this->Alunos->newEntity();
        if ($this->request->is('post')) {
            $aluno = $this->Alunos->patchEntity($aluno, $this->request->getData());
            if ($this->Alunos->save($aluno)) {
                $this->Flash->success(__('The aluno has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aluno could not be saved. Please, try again.'));
        }
        $this->set(compact('aluno'));
        $this->set('_serialize', ['aluno']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Aluno id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $aluno = $this->Alunos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $aluno = $this->Alunos->patchEntity($aluno, $this->request->getData());
            if ($this->Alunos->save($aluno)) {
                $this->Flash->success(__('The aluno has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aluno could not be saved. Please, try again.'));
        }
        $this->set(compact('aluno'));
        $this->set('_serialize', ['aluno']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Aluno id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aluno = $this->Alunos->get($id);
        if ($this->Alunos->delete($aluno)) {
            $this->Flash->success(__('The aluno has been deleted.'));
        } else {
            $this->Flash->error(__('The aluno could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
