<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * MarcasProdutos Controller
 *
 * @property \App\Model\Table\MarcasProdutosTable $MarcasProdutos
 * @method \App\Model\Entity\MarcasProduto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MarcasProdutosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $marcasProdutos = $this->paginate($this->MarcasProdutos);

        $this->set(compact('marcasProdutos'));
    }

    /**
     * View method
     *
     * @param string|null $id Marcas Produto id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $marcasProduto = $this->MarcasProdutos->get($id, [
            'contain' => ['Produtos'],
        ]);

        $this->set(compact('marcasProduto'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $marcasProduto = $this->MarcasProdutos->newEmptyEntity();
        if ($this->request->is('post')) {
            $marcasProduto = $this->MarcasProdutos->patchEntity($marcasProduto, $this->request->getData());
            if ($this->MarcasProdutos->save($marcasProduto)) {
                $this->Flash->success(__('The marcas produto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The marcas produto could not be saved. Please, try again.'));
        }
        $this->set(compact('marcasProduto'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Marcas Produto id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $marcasProduto = $this->MarcasProdutos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $marcasProduto = $this->MarcasProdutos->patchEntity($marcasProduto, $this->request->getData());
            if ($this->MarcasProdutos->save($marcasProduto)) {
                $this->Flash->success(__('The marcas produto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The marcas produto could not be saved. Please, try again.'));
        }
        $this->set(compact('marcasProduto'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Marcas Produto id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $marcasProduto = $this->MarcasProdutos->get($id);
        if ($this->MarcasProdutos->delete($marcasProduto)) {
            $this->Flash->success(__('The marcas produto has been deleted.'));
        } else {
            $this->Flash->error(__('The marcas produto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
