<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Emprestimo Entity
 *
 * @property int $id
 * @property int $livro_id
 * @property int $id_usuario
 * @property int $codigo_livros
 * @property \Cake\I18n\Time $entrega
 * @property \Cake\I18n\Time $data_emprestimo
 *
 * @property \App\Model\Entity\Livro $livro
 */
class Emprestimo extends Entity
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
