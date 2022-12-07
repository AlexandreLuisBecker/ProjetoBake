<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ValoresProdutos Controller
 *
 * @property \App\Model\Table\ValoresProdutosTable $ValoresProdutos
 * @method \App\Model\Entity\ValoresProduto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ValoresProdutosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $valoresProdutos = $this->paginate($this->ValoresProdutos);

        $this->set(compact('valoresProdutos'));
    }

    /**
     * View method
     *
     * @param string|null $id Valores Produto id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $valoresProduto = $this->ValoresProdutos->get($id, [
            'contain' => ['Produtos'],
        ]);

        $this->set(compact('valoresProduto'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $valoresProduto = $this->ValoresProdutos->newEmptyEntity();
        if ($this->request->is('post')) {
            $valoresProduto = $this->ValoresProdutos->patchEntity($valoresProduto, $this->request->getData());
            if ($this->ValoresProdutos->save($valoresProduto)) {
                $this->Flash->success(__('The valores produto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The valores produto could not be saved. Please, try again.'));
        }
        $this->set(compact('valoresProduto'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Valores Produto id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $valoresProduto = $this->ValoresProdutos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $valoresProduto = $this->ValoresProdutos->patchEntity($valoresProduto, $this->request->getData());
            if ($this->ValoresProdutos->save($valoresProduto)) {
                $this->Flash->success(__('The valores produto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The valores produto could not be saved. Please, try again.'));
        }
        $this->set(compact('valoresProduto'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Valores Produto id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $valoresProduto = $this->ValoresProdutos->get($id);
        if ($this->ValoresProdutos->delete($valoresProduto)) {
            $this->Flash->success(__('The valores produto has been deleted.'));
        } else {
            $this->Flash->error(__('The valores produto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
