<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Produto Entity
 *
 * @property int $id
 * @property string|null $nome_produto
 * @property int|null $categorias_produto_id
 * @property int|null $marcas_produto_id
 * @property int|null $fornecedores_produto_id
 * @property int|null $quantidades_produto_id
 * @property int|null $valores_produto_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\CategoriasProduto $categorias_produto
 * @property \App\Model\Entity\MarcasProduto $marcas_produto
 * @property \App\Model\Entity\FornecedoresProduto $fornecedores_produto
 * @property \App\Model\Entity\QuantidadesProduto $quantidades_produto
 * @property \App\Model\Entity\ValoresProduto $valores_produto
 */
class Produto extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'nome_produto' => true,
        'categorias_produto_id' => true,
        'marcas_produto_id' => true,
        'fornecedores_produto_id' => true,
        'quantidades_produto_id' => true,
        'valores_produto_id' => true,
        'created' => true,
        'modified' => true,
        'categorias_produto' => true,
        'marcas_produto' => true,
        'fornecedores_produto' => true,
        'quantidades_produto' => true,
        'valores_produto' => true,
    ];
}
