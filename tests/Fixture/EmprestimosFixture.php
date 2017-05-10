<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EmprestimosFixture
 *
 */
class EmprestimosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'livro_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_usuario' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'codigo_livros' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'livro_id' => ['type' => 'index', 'columns' => ['livro_id'], 'length' => []],
            'codigo_livros' => ['type' => 'index', 'columns' => ['codigo_livros'], 'length' => []],
            'id_usuario' => ['type' => 'index', 'columns' => ['id_usuario'], 'length' => []],
        ],
        '_constraints' => [
            'codigo_livros' => ['type' => 'foreign', 'columns' => ['codigo_livros'], 'references' => ['livro_fisico', 'codigo_livro'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'id_usuario' => ['type' => 'foreign', 'columns' => ['id_usuario'], 'references' => ['pessoas', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'livro_id' => ['type' => 'foreign', 'columns' => ['livro_id'], 'references' => ['livros', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'livro_id' => 1,
            'id_usuario' => 1,
            'codigo_livros' => 1
        ],
    ];
}
