<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProdutosFixture
 */
class ProdutosFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'nome_produto' => 'Lorem ipsum dolor sit amet',
                'categorias_produto_id' => 1,
                'marcas_produto_id' => 1,
                'fornecedores_produto_id' => 1,
                'quantidades_produto_id' => 1,
                'valores_produto_id' => 1,
                'created' => '2022-12-07 22:50:50',
                'modified' => '2022-12-07 22:50:50',
            ],
        ];
        parent::init();
    }
}
