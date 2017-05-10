<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Editoras Model
 *
 * @property \Cake\ORM\Association\HasMany $Livros
 *
 * @method \App\Model\Entity\Editora get($primaryKey, $options = [])
 * @method \App\Model\Entity\Editora newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Editora[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Editora|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Editora patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Editora[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Editora findOrCreate($search, callable $callback = null, $options = [])
 */
class EditorasTable extends Table
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

        $this->setTable('editoras');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Livros', [
            'foreignKey' => 'editora_id'
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('contato', 'create')
            ->notEmpty('contato');

        $validator
            ->requirePresence('endereco', 'create')
            ->notEmpty('endereco');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

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

        return $rules;
    }
}
