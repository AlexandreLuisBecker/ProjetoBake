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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $valoresProduto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $valoresProduto->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Valores Produtos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="valoresProdutos form content">
            <?= $this->Form->create($valoresProduto) ?>
            <fieldset>
                <legend><?= __('Edit Valores Produto') ?></legend>
                <?php
                    echo $this->Form->control('valor');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
