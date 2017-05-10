<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LivroTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LivroTable Test Case
 */
class LivroTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LivroTable
     */
    public $Livro;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.livro'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Livro') ? [] : ['className' => 'App\Model\Table\LivroTable'];
        $this->Livro = TableRegistry::get('Livro', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Livro);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
