<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ValoresProdutosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ValoresProdutosTable Test Case
 */
class ValoresProdutosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ValoresProdutosTable
     */
    protected $ValoresProdutos;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ValoresProdutos',
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
        $config = $this->getTableLocator()->exists('ValoresProdutos') ? [] : ['className' => ValoresProdutosTable::class];
        $this->ValoresProdutos = $this->getTableLocator()->get('ValoresProdutos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ValoresProdutos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ValoresProdutosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
