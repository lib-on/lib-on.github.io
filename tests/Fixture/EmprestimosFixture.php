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
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'livro_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_usuario' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'identificador_livro' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'data_emprestimo' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'data_entrega' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'livro_id' => ['type' => 'index', 'columns' => ['livro_id'], 'length' => []],
            'identificador_livro' => ['type' => 'index', 'columns' => ['identificador_livro'], 'length' => []],
            'id_usuario' => ['type' => 'index', 'columns' => ['id_usuario'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'livro_id' => ['type' => 'foreign', 'columns' => ['livro_id'], 'references' => ['livros', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'identificador_livro' => ['type' => 'foreign', 'columns' => ['identificador_livro'], 'references' => ['livro_fisico', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'id_usuario' => ['type' => 'foreign', 'columns' => ['id_usuario'], 'references' => ['users', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'livro_id' => 1,
            'id_usuario' => 1,
            'identificador_livro' => 1,
            'data_emprestimo' => '2017-06-20 17:29:20',
            'data_entrega' => '2017-06-20 17:29:20'
        ],
    ];
}
