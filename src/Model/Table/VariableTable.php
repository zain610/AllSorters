<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Variable Model
 *
 * @method \App\Model\Entity\Variable get($primaryKey, $options = [])
 * @method \App\Model\Entity\Variable newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Variable[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Variable|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Variable saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Variable patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Variable[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Variable findOrCreate($search, callable $callback = null, $options = [])
 */
class VariableTable extends Table
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

        $this->setTable('variable');
        $this->setDisplayField('variable_id');
        $this->setPrimaryKey('variable_id');
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
            ->integer('variable_id')
            ->allowEmptyString('variable_id', 'create');

        $validator
            ->scalar('variable_key')
            ->maxLength('variable_key', 255)
            ->requirePresence('variable_key', 'create')
            ->allowEmptyString('variable_key', false);

        $validator
            ->scalar('variable_value')
            ->maxLength('variable_value', 255)
            ->requirePresence('variable_value', 'create')
            ->allowEmptyString('variable_value', false);

        $validator
            ->integer('variable_cid')
            ->allowEmptyString('variable_cid');

        return $validator;
    }
}
