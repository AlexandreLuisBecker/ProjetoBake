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
            <?= $this->Html->link(__('List Valores Produtos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="valoresProdutos form content">
            <?= $this->Form->create($valoresProduto) ?>
            <fieldset>
                <legend><?= __('Add Valores Produto') ?></legend>
                <?php
                    echo $this->Form->control('valor');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
