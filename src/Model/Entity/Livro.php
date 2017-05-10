<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Livro Entity
 *
 * @property int $id
 * @property string $titulo
 * @property string $isbn
 * @property string $edicao
 * @property string $autor
 * @property int $categoria_id
 * @property int $editora_id
 *
 * @property \App\Model\Entity\Categoria $categoria
 * @property \App\Model\Entity\Editora $editora
 * @property \App\Model\Entity\Emprestimo[] $emprestimos
 */
class Livro extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
