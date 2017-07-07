<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LivroFisicoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LivroFisicoTable Test Case
 */
class LivroFisicoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LivroFisicoTable
     */
    public $LivroFisico;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.livro_fisico',
        'app.livros',
        'app.categorias',
        'app.editoras',
        'app.emprestimos',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('LivroFisico') ? [] : ['className' => 'App\Model\Table\LivroFisicoTable'];
        $this->LivroFisico = TableRegistry::get('LivroFisico', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LivroFisico);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
