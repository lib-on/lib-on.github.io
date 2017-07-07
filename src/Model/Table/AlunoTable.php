<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Aluno Model
 *
 * @method \App\Model\Entity\Aluno get($primaryKey, $options = [])
 * @method \App\Model\Entity\Aluno newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Aluno[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Aluno|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Aluno patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Aluno[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Aluno findOrCreate($search, callable $callback = null, $options = [])
 */
class AlunoTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('aluno');
        $this->setDisplayField('MATRICULA');
        $this->setPrimaryKey('MATRICULA');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->allowEmpty('MATRICULA', 'create');

        $validator
            ->requirePresence('CURSO', 'create')
            ->notEmpty('CURSO');

        $validator
            ->requirePresence('PERIODO', 'create')
            ->notEmpty('PERIODO');

        $validator
            ->requirePresence('TURNO', 'create')
            ->notEmpty('TURNO');

        $validator
            ->requirePresence('NOME', 'create')
            ->notEmpty('NOME');

        $validator
            ->integer('LIVRO_ID')
            ->requirePresence('LIVRO_ID', 'create')
            ->notEmpty('LIVRO_ID');

        return $validator;
    }
}
