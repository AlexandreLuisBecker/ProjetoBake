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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $quantidadesProduto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $quantidadesProduto->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Quantidades Produtos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="quantidadesProdutos form content">
            <?= $this->Form->create($quantidadesProduto) ?>
            <fieldset>
                <legend><?= __('Edit Quantidades Produto') ?></legend>
                <?php
                    echo $this->Form->control('quantidade');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
