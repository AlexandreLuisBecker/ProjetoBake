<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MarcasProduto $marcasProduto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Marcas Produtos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="marcasProdutos form content">
            <?= $this->Form->create($marcasProduto) ?>
            <fieldset>
                <legend><?= __('Add Marcas Produto') ?></legend>
                <?php
                    echo $this->Form->control('nome_marca');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
