<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Request Model
 *
 * @method \App\Model\Entity\Request get($primaryKey, $options = [])
 * @method \App\Model\Entity\Request newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Request[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Request|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Request patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Request[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Request findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
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

        $this->addBehavior('Timestamp');
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
            ->allowEmpty('Request_No', 'create');

        $validator
            ->scalar('Request_Email')
            ->maxLength('Request_Email', 255)
            ->requirePresence('Request_Email', 'create')
            ->notEmpty('Request_Email');

        $validator
            ->scalar('Cust_Fname')
            ->maxLength('Cust_Fname', 255)
            ->allowEmpty('Cust_Fname');

        $validator
            ->scalar('Cust_Sname')
            ->maxLength('Cust_Sname', 255)
            ->allowEmpty('Cust_Sname');

        $validator
            ->scalar('Query_info')
            ->maxLength('Query_info', 255)
            ->allowEmpty('Query_info');

        $validator
            ->boolean('seen')
            ->allowEmpty('seen');

        $validator
            ->scalar('Response')
            ->maxLength('Response', 255)
            ->allowEmpty('Response');

        return $validator;
    }
}
