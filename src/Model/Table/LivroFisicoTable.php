<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LivroFisico Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Livros
 *
 * @method \App\Model\Entity\LivroFisico get($primaryKey, $options = [])
 * @method \App\Model\Entity\LivroFisico newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\LivroFisico[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LivroFisico|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LivroFisico patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LivroFisico[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\LivroFisico findOrCreate($search, callable $callback = null, $options = [])
 */
class LivroFisicoTable extends Table
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

        $this->setTable('livro_fisico');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Livros', [
            'foreignKey' => 'livros_id',
            'joinType' => 'INNER'
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
            ->boolean('alugado')
            ->requirePresence('alugado', 'create')
            ->notEmpty('alugado');

        $validator
            ->requirePresence('codigo_livro', 'create')
            ->notEmpty('codigo_livro')
            ->add('codigo_livro', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

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
        $rules->add($rules->isUnique(['codigo_livro']));
        $rules->add($rules->existsIn(['livros_id'], 'Livros'));

        return $rules;
    }
}
