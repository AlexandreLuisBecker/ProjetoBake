<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MarcasProdutosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MarcasProdutosTable Test Case
 */
class MarcasProdutosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MarcasProdutosTable
     */
    protected $MarcasProdutos;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.MarcasProdutos',
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
        $config = $this->getTableLocator()->exists('MarcasProdutos') ? [] : ['className' => MarcasProdutosTable::class];
        $this->MarcasProdutos = $this->getTableLocator()->get('MarcasProdutos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->MarcasProdutos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\MarcasProdutosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
