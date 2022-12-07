<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\MarcasProduto> $marcasProdutos
 */
?>
<div class="marcasProdutos index content">
    <?= $this->Html->link(__('New Marcas Produto'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Marcas Produtos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome_marca') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($marcasProdutos as $marcasProduto): ?>
                <tr>
                    <td><?= $this->Number->format($marcasProduto->id) ?></td>
                    <td><?= h($marcasProduto->nome_marca) ?></td>
                    <td><?= h($marcasProduto->created) ?></td>
                    <td><?= h($marcasProduto->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $marcasProduto->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $marcasProduto->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $marcasProduto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $marcasProduto->id)]) ?>
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
