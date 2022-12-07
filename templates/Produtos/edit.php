<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produto $produto
 * @var string[]|\Cake\Collection\CollectionInterface $categoriasProdutos
 * @var string[]|\Cake\Collection\CollectionInterface $marcasProdutos
 * @var string[]|\Cake\Collection\CollectionInterface $fornecedoresProdutos
 * @var string[]|\Cake\Collection\CollectionInterface $quantidadesProdutos
 * @var string[]|\Cake\Collection\CollectionInterface $valoresProdutos
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $produto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $produto->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Produtos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="produtos form content">
            <?= $this->Form->create($produto) ?>
            <fieldset>
                <legend><?= __('Edit Produto') ?></legend>
                <?php
                    echo $this->Form->control('nome_produto');
                    echo $this->Form->control('categorias_produto_id', ['options' => $categoriasProdutos, 'empty' => true]);
                    echo $this->Form->control('marcas_produto_id', ['options' => $marcasProdutos, 'empty' => true]);
                    echo $this->Form->control('fornecedores_produto_id', ['options' => $fornecedoresProdutos, 'empty' => true]);
                    echo $this->Form->control('quantidades_produto_id', ['options' => $quantidadesProdutos, 'empty' => true]);
                    echo $this->Form->control('valores_produto_id', ['options' => $valoresProdutos, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
