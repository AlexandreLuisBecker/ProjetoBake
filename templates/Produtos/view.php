<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produto $produto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Produto'), ['action' => 'edit', $produto->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Produto'), ['action' => 'delete', $produto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $produto->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Produtos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Produto'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="produtos view content">
            <h3><?= h($produto->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome Produto') ?></th>
                    <td><?= h($produto->nome_produto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Categorias Produto') ?></th>
                    <td><?= $produto->has('categorias_produto') ? $this->Html->link($produto->categorias_produto->nome_categoria, ['controller' => 'CategoriasProdutos', 'action' => 'view', $produto->categorias_produto->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Marcas Produto') ?></th>
                    <td><?= $produto->has('marcas_produto') ? $this->Html->link($produto->marcas_produto->nome_marca, ['controller' => 'MarcasProdutos', 'action' => 'view', $produto->marcas_produto->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Fornecedores Produto') ?></th>
                    <td><?= $produto->has('fornecedores_produto') ? $this->Html->link($produto->fornecedores_produto->nome_fornecedor, ['controller' => 'FornecedoresProdutos', 'action' => 'view', $produto->fornecedores_produto->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantidades Produto') ?></th>
                    <td><?= $produto->has('quantidades_produto') ? $this->Html->link($produto->quantidades_produto->quantidade, ['controller' => 'QuantidadesProdutos', 'action' => 'view', $produto->quantidades_produto->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Valores Produto') ?></th>
                    <td><?= $produto->has('valores_produto') ? $this->Html->link($produto->valores_produto->valor, ['controller' => 'ValoresProdutos', 'action' => 'view', $produto->valores_produto->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($produto->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($produto->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($produto->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
