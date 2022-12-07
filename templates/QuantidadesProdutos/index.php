<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\QuantidadesProduto> $quantidadesProdutos
 */
?>
<div class="quantidadesProdutos index content">
    <?= $this->Html->link(__('New Quantidades Produto'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Quantidades Produtos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('quantidade') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($quantidadesProdutos as $quantidadesProduto): ?>
                <tr>
                    <td><?= $this->Number->format($quantidadesProduto->id) ?></td>
                    <td><?= $quantidadesProduto->quantidade === null ? '' : $this->Number->format($quantidadesProduto->quantidade) ?></td>
                    <td><?= h($quantidadesProduto->created) ?></td>
                    <td><?= h($quantidadesProduto->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $quantidadesProduto->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $quantidadesProduto->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $quantidadesProduto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quantidadesProduto->id)]) ?>
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
