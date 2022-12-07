<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FornecedoresProduto $fornecedoresProduto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $fornecedoresProduto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $fornecedoresProduto->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Fornecedores Produtos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="fornecedoresProdutos form content">
            <?= $this->Form->create($fornecedoresProduto) ?>
            <fieldset>
                <legend><?= __('Edit Fornecedores Produto') ?></legend>
                <?php
                    echo $this->Form->control('nome_fornecedor');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
