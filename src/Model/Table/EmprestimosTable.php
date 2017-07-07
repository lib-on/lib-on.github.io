<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Emprestimos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Livros
 *
 * @method \App\Model\Entity\Emprestimo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Emprestimo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Emprestimo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Emprestimo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Emprestimo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Emprestimo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Emprestimo findOrCreate($search, callable $callback = null, $options = [])
 */
class EmprestimosTable extends Table
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

        $this->setTable('emprestimos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Livros', [
            'foreignKey' => 'livro_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('LivroFisico', [
            'foreignKey' => 'identificador_livro',
            'joinType' => 'INNER'
        ]);

        $this->belongsTo('Users', [
            'foreignkey' => 'id_usuario',
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
            ->integer('id_usuario')
            ->requirePresence('id_usuario', 'create')
            ->notEmpty('id_usuario');

        $validator
            ->integer('identificador_livro')
            ->allowEmpty('identificador_livro');

        $validator
            ->dateTime('data_emprestimo')
            ->requirePresence('data_emprestimo', 'create')
            ->notEmpty('data_emprestimo');

        $validator
            ->dateTime('data_entrega')
            ->allowEmpty('data_entrega');

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
        $rules->add($rules->existsIn(['livro_id'], 'Livros'));

        return $rules;
    }
}
