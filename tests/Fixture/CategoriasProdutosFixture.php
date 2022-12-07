<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CategoriasProdutosFixture
 */
class CategoriasProdutosFixture extends TestFixture
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
                'nome_categoria' => 'Lorem ipsum dolor sit amet',
                'created' => '2022-12-07 22:11:43',
                'modified' => '2022-12-07 22:11:43',
            ],
        ];
        parent::init();
    }
}
