<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FornecedoresProdutosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FornecedoresProdutosTable Test Case
 */
class FornecedoresProdutosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FornecedoresProdutosTable
     */
    protected $FornecedoresProdutos;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.FornecedoresProdutos',
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
        $config = $this->getTableLocator()->exists('FornecedoresProdutos') ? [] : ['className' => FornecedoresProdutosTable::class];
        $this->FornecedoresProdutos = $this->getTableLocator()->get('FornecedoresProdutos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->FornecedoresProdutos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\FornecedoresProdutosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
