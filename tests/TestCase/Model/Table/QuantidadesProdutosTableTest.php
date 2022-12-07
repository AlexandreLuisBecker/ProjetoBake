<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\QuantidadesProdutosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\QuantidadesProdutosTable Test Case
 */
class QuantidadesProdutosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\QuantidadesProdutosTable
     */
    protected $QuantidadesProdutos;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.QuantidadesProdutos',
        'app.Produtos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('QuantidadesProdutos') ? [] : ['className' => QuantidadesProdutosTable::class];
        $this->QuantidadesProdutos = $this->getTableLocator()->get('QuantidadesProdutos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->QuantidadesProdutos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\QuantidadesProdutosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
