<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Request Model
 *
 * @property \App\Model\Table\ClientTable|\Cake\ORM\Association\BelongsTo $Client
 *
 * @method \App\Model\Entity\Request get($primaryKey, $options = [])
 * @method \App\Model\Entity\Request newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Request[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Request|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Request saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Request patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Request[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Request findOrCreate($search, callable $callback = null, $options = [])
 */
class RequestTable extends Table
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

        $this->setTable('request');
        $this->setDisplayField('Request_No');
        $this->setPrimaryKey('Request_No');

        $this->belongsTo('Client', [
            'foreignKey' => 'id'
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
            ->integer('Request_No')
            ->allowEmptyString('Request_No', 'create');

        $validator
            ->scalar('Request_Email')
            ->maxLength('Request_Email', 255)
            ->requirePresence('Request_Email', 'create')
            ->allowEmptyString('Request_Email', false);

        $validator
            ->scalar('Cust_Fname')
            ->maxLength('Cust_Fname', 255)
            ->allowEmptyString('Cust_Fname');

        $validator
            ->scalar('Cust_Sname')
            ->maxLength('Cust_Sname', 255)
            ->allowEmptyString('Cust_Sname');

        $validator
            ->scalar('Subscription')
            ->maxLength('Subscription', 255)
            ->allowEmptyString('Subscription');

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
        $rules->add($rules->existsIn(['id'], 'Client'));

        return $rules;
    }
}
