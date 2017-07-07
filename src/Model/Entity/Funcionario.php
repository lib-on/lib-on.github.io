<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Funcionario Entity
 *
 * @property string $siape
 * @property string $funcao
 * @property string $setor
 * @property string $email
 * @property string $endereco
 * @property string $contato
 * @property int $pessoa_id
 *
 * @property \App\Model\Entity\Pessoa $pessoa
 */
class Funcionario extends Entity
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
        'siape' => false
    ];
}
