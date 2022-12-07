<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FornecedoresProdutosFixture
 */
class FornecedoresProdutosFixture extends TestFixture
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
                'nome_fornecedor' => 'Lorem ipsum dolor sit amet',
                'created' => '2022-12-07 22:13:19',
                'modified' => '2022-12-07 22:13:19',
            ],
        ];
        parent::init();
    }
}
