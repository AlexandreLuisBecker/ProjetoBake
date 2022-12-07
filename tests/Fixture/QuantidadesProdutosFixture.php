<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * QuantidadesProdutosFixture
 */
class QuantidadesProdutosFixture extends TestFixture
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
                'quantidade' => 1,
                'created' => '2022-12-07 22:12:34',
                'modified' => '2022-12-07 22:12:34',
            ],
        ];
        parent::init();
    }
}
