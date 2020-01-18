<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Footer Model
 *
 * @method \App\Model\Entity\Footer get($primaryKey, $options = [])
 * @method \App\Model\Entity\Footer newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Footer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Footer|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Footer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Footer[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Footer findOrCreate($search, callable $callback = null, $options = [])
 */
class FooterTable extends Table
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

        $this->setTable('footer');
        $this->setDisplayField('Footer_id');
        $this->setPrimaryKey('Footer_id');
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
            ->integer('Footer_id')
            ->allowEmpty('Footer_id', 'create');

        $validator
            ->scalar('Phone')
            ->maxLength('Phone', 255)
            ->requirePresence('Phone', 'create')
            ->notEmpty('Phone');

        $validator
            ->scalar('Email')
            ->maxLength('Email', 255)
            ->allowEmpty('Email');

        $validator
            ->scalar('Address')
            ->maxLength('Address', 255)
            ->requirePresence('Address', 'create')
            ->notEmpty('Address');

        $validator
            ->scalar('Twitter')
            ->maxLength('Twitter', 255)
            ->allowEmpty('Twitter');

        $validator
            ->scalar('Facebook')
            ->maxLength('Facebook', 255)
            ->allowEmpty('Facebook');

        $validator
            ->scalar('Google')
            ->maxLength('Google', 255)
            ->allowEmpty('Google');

        $validator
            ->scalar('Tumblr')
            ->maxLength('Tumblr', 255)
            ->allowEmpty('Tumblr');

        return $validator;
    }
}
