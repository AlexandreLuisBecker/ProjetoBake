<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\ValoresProduto> $valoresProdutos
 */
?>
<div class="valoresProdutos index content">
    <?= $this->Html->link(__('New Valores Produto'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Valores Produtos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('valor') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($valoresProdutos as $valoresProduto): ?>
                <tr>
                    <td><?= $this->Number->format($valoresProduto->id) ?></td>
                    <td><?= $valoresProduto->valor === null ? '' : $this->Number->format($valoresProduto->valor) ?></td>
                    <td><?= h($valoresProduto->created) ?></td>
                    <td><?= h($valoresProduto->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $valoresProduto->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $valoresProduto->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $valoresProduto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $valoresProduto->id)]) ?>
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
