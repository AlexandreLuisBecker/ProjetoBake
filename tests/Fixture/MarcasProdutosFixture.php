<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MarcasProdutosFixture
 */
class MarcasProdutosFixture extends TestFixture
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
                'nome_marca' => 'Lorem ipsum dolor sit amet',
                'created' => '2022-12-07 22:12:42',
                'modified' => '2022-12-07 22:12:42',
            ],
        ];
        parent::init();
    }
}
