<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Funcionarios Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Pessoas
 *
 * @method \App\Model\Entity\Funcionario get($primaryKey, $options = [])
 * @method \App\Model\Entity\Funcionario newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Funcionario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Funcionario|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Funcionario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Funcionario[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Funcionario findOrCreate($search, callable $callback = null, $options = [])
 */
class FuncionariosTable extends Table
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

        $this->setTable('funcionarios');
        $this->setDisplayField('siape');
        $this->setPrimaryKey('siape');

        $this->belongsTo('Pessoas', [
            'foreignKey' => 'pessoa_id'
        ]);
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
            ->allowEmpty('siape', 'create');

        $validator
            ->requirePresence('funcao', 'create')
            ->notEmpty('funcao');

        $validator
            ->requirePresence('setor', 'create')
            ->notEmpty('setor');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->requirePresence('endereco', 'create')
            ->notEmpty('endereco');

        $validator
            ->requirePresence('contato', 'create')
            ->notEmpty('contato');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['pessoa_id'], 'Pessoas'));

        return $rules;
    }
}
