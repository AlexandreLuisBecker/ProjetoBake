<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Produto> $produtos
 */
?>
<div class="produtos index content">
    <?= $this->Html->link(__('New Produto'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Produtos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome_produto') ?></th>
                    <th><?= $this->Paginator->sort('categorias_produto_id') ?></th>
                    <th><?= $this->Paginator->sort('marcas_produto_id') ?></th>
                    <th><?= $this->Paginator->sort('fornecedores_produto_id') ?></th>
                    <th><?= $this->Paginator->sort('quantidades_produto_id') ?></th>
                    <th><?= $this->Paginator->sort('valores_produto_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($produtos as $produto): ?>
                <tr>
                    <td><?= $this->Number->format($produto->id) ?></td>
                    <td><?= h($produto->nome_produto) ?></td>
                    <td><?= $produto->has('categorias_produto') ? $this->Html->link($produto->categorias_produto->nome_categoria, ['controller' => 'CategoriasProdutos', 'action' => 'view', $produto->categorias_produto->id]) : '' ?></td>
                    <td><?= $produto->has('marcas_produto') ? $this->Html->link($produto->marcas_produto->nome_marca, ['controller' => 'MarcasProdutos', 'action' => 'view', $produto->marcas_produto->id]) : '' ?></td>
                    <td><?= $produto->has('fornecedores_produto') ? $this->Html->link($produto->fornecedores_produto->nome_fornecedor, ['controller' => 'FornecedoresProdutos', 'action' => 'view', $produto->fornecedores_produto->id]) : '' ?></td>
                    <td><?= $produto->has('quantidades_produto') ? $this->Html->link($produto->quantidades_produto->quantidade, ['controller' => 'QuantidadesProdutos', 'action' => 'view', $produto->quantidades_produto->id]) : '' ?></td>
                    <td><?= $produto->has('valores_produto') ? $this->Html->link($produto->valores_produto->valor, ['controller' => 'ValoresProdutos', 'action' => 'view', $produto->valores_produto->id]) : '' ?></td>
                    <td><?= h($produto->created) ?></td>
                    <td><?= h($produto->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $produto->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $produto->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $produto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $produto->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
