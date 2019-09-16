<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Client Model
 *
 * @property |\Cake\ORM\Association\HasMany $Job
 *
 * @method \App\Model\Entity\Client get($primaryKey, $options = [])
 * @method \App\Model\Entity\Client newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Client[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Client|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Client patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Client[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Client findOrCreate($search, callable $callback = null, $options = [])
 */
class ClientTable extends Table
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

        $this->setTable('client');
        $this->setDisplayField('Client_id');
        $this->setPrimaryKey('Client_id');

        $this->hasMany('Job', [
            'foreignKey' => 'client_id'
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
            ->scalar('fname')
            ->maxLength('fname', 255)
            ->requirePresence('fname', 'create')
            ->notEmpty('fname');

        $validator
            ->scalar('sname')
            ->maxLength('sname', 255)
            ->requirePresence('sname', 'create')
            ->notEmpty('sname');

        $validator
            ->date('DOB')
            ->allowEmpty('DOB');

        $validator
            ->scalar('Address')
            ->maxLength('Address', 255)
            ->allowEmpty('Address');

        $validator
            ->scalar('Phone')
            ->maxLength('Phone', 15)
            ->allowEmpty('Phone');

        $validator
            ->scalar('Email')
            ->maxLength('Email', 255)
            ->allowEmpty('Email');

        $validator
            ->dateTime('Created')
            ->requirePresence('Created', 'create')
            ->notEmpty('Created');

        $validator
            ->dateTime('Modified')
            ->requirePresence('Modified', 'create')
            ->notEmpty('Modified');

        return $validator;
    }
}
