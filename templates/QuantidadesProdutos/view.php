<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\QuantidadesProduto $quantidadesProduto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Quantidades Produto'), ['action' => 'edit', $quantidadesProduto->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Quantidades Produto'), ['action' => 'delete', $quantidadesProduto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quantidadesProduto->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Quantidades Produtos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Quantidades Produto'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="quantidadesProdutos view content">
            <h3><?= h($quantidadesProduto->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($quantidadesProduto->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantidade') ?></th>
                    <td><?= $quantidadesProduto->quantidade === null ? '' : $this->Number->format($quantidadesProduto->quantidade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($quantidadesProduto->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($quantidadesProduto->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Produtos') ?></h4>
                <?php if (!empty($quantidadesProduto->produtos)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Nome Produto') ?></th>
                            <th><?= __('Categorias Produto Id') ?></th>
                            <th><?= __('Marcas Produto Id') ?></th>
                            <th><?= __('Fornecedores Produto Id') ?></th>
                            <th><?= __('Quantidades Produto Id') ?></th>
                            <th><?= __('Valores Produto Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($quantidadesProduto->produtos as $produtos) : ?>
                        <tr>
                            <td><?= h($produtos->id) ?></td>
                            <td><?= h($produtos->nome_produto) ?></td>
                            <td><?= h($produtos->categorias_produto_id) ?></td>
                            <td><?= h($produtos->marcas_produto_id) ?></td>
                            <td><?= h($produtos->fornecedores_produto_id) ?></td>
                            <td><?= h($produtos->quantidades_produto_id) ?></td>
                            <td><?= h($produtos->valores_produto_id) ?></td>
                            <td><?= h($produtos->created) ?></td>
                            <td><?= h($produtos->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Produtos', 'action' => 'view', $produtos->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Produtos', 'action' => 'edit', $produtos->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Produtos', 'action' => 'delete', $produtos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $produtos->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
