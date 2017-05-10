<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Livros Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Categorias
 * @property \Cake\ORM\Association\BelongsTo $Editoras
 * @property \Cake\ORM\Association\HasMany $Emprestimos
 *
 * @method \App\Model\Entity\Livro get($primaryKey, $options = [])
 * @method \App\Model\Entity\Livro newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Livro[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Livro|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Livro patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Livro[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Livro findOrCreate($search, callable $callback = null, $options = [])
 */
class LivrosTable extends Table
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

        $this->setTable('livros');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Categorias', [
            'foreignKey' => 'categoria_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Editoras', [
            'foreignKey' => 'editora_id'
        ]);
        $this->hasMany('Emprestimos', [
            'foreignKey' => 'livro_id'
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
            ->requirePresence('titulo', 'create')
            ->notEmpty('titulo');

        $validator
            ->requirePresence('isbn', 'create')
            ->notEmpty('isbn');

        $validator
            ->requirePresence('edicao', 'create')
            ->notEmpty('edicao');

        $validator
            ->requirePresence('autor', 'create')
            ->notEmpty('autor');

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
        $rules->add($rules->existsIn(['categoria_id'], 'Categorias'));
        $rules->add($rules->existsIn(['editora_id'], 'Editoras'));

        return $rules;
    }
}
