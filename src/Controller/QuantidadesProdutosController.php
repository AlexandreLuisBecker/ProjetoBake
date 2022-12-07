<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * QuantidadesProdutos Controller
 *
 * @property \App\Model\Table\QuantidadesProdutosTable $QuantidadesProdutos
 * @method \App\Model\Entity\QuantidadesProduto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class QuantidadesProdutosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $quantidadesProdutos = $this->paginate($this->QuantidadesProdutos);

        $this->set(compact('quantidadesProdutos'));
    }

    /**
     * View method
     *
     * @param string|null $id Quantidades Produto id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $quantidadesProduto = $this->QuantidadesProdutos->get($id, [
            'contain' => ['Produtos'],
        ]);

        $this->set(compact('quantidadesProduto'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $quantidadesProduto = $this->QuantidadesProdutos->newEmptyEntity();
        if ($this->request->is('post')) {
            $quantidadesProduto = $this->QuantidadesProdutos->patchEntity($quantidadesProduto, $this->request->getData());
            if ($this->QuantidadesProdutos->save($quantidadesProduto)) {
                $this->Flash->success(__('The quantidades produto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The quantidades produto could not be saved. Please, try again.'));
        }
        $this->set(compact('quantidadesProduto'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Quantidades Produto id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $quantidadesProduto = $this->QuantidadesProdutos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $quantidadesProduto = $this->QuantidadesProdutos->patchEntity($quantidadesProduto, $this->request->getData());
            if ($this->QuantidadesProdutos->save($quantidadesProduto)) {
                $this->Flash->success(__('The quantidades produto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The quantidades produto could not be saved. Please, try again.'));
        }
        $this->set(compact('quantidadesProduto'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Quantidades Produto id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $quantidadesProduto = $this->QuantidadesProdutos->get($id);
        if ($this->QuantidadesProdutos->delete($quantidadesProduto)) {
            $this->Flash->success(__('The quantidades produto has been deleted.'));
        } else {
            $this->Flash->error(__('The quantidades produto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
