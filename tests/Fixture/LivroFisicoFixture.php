<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LivroFisicoFixture
 *
 */
class LivroFisicoFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'livro_fisico';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'livros_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'alugado' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'codigo_livro' => ['type' => 'string', 'length' => 11, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'livros_id' => ['type' => 'index', 'columns' => ['livros_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'codigo_livro' => ['type' => 'unique', 'columns' => ['codigo_livro'], 'length' => []],
            'livros_id' => ['type' => 'foreign', 'columns' => ['livros_id'], 'references' => ['livros', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'livros_id' => 1,
            'alugado' => 1,
            'codigo_livro' => 'Lorem ips'
        ],
    ];
}
