<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ValoresProduto $valoresProduto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Valores Produto'), ['action' => 'edit', $valoresProduto->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Valores Produto'), ['action' => 'delete', $valoresProduto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $valoresProduto->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Valores Produtos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Valores Produto'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="valoresProdutos view content">
            <h3><?= h($valoresProduto->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($valoresProduto->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Valor') ?></th>
                    <td><?= $valoresProduto->valor === null ? '' : $this->Number->format($valoresProduto->valor) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($valoresProduto->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($valoresProduto->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Produtos') ?></h4>
                <?php if (!empty($valoresProduto->produtos)) : ?>
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
                        <?php foreach ($valoresProduto->produtos as $produtos) : ?>
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
