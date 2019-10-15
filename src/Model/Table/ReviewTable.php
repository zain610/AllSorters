<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Review Model
 *
 * @method \App\Model\Entity\Review get($primaryKey, $options = [])
 * @method \App\Model\Entity\Review newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Review[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Review|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Review patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Review[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Review findOrCreate($search, callable $callback = null, $options = [])
 */
class ReviewTable extends Table
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

        $this->setTable('review');
        $this->setDisplayField('Review_id');
        $this->setPrimaryKey('Review_id');
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
            ->integer('Review_id')
            ->allowEmpty('Review_id', 'create');

        $validator
            ->scalar('Client_Name')
            ->maxLength('Client_Name', 255)
            ->requirePresence('Client_Name', 'create')
            ->notEmpty('Client_Name', false,false);

        $validator
            ->dateTime('Month_Year')
            ->allowEmpty('Month_Year',false);

        $validator
            ->integer('Suburb')
            ->allowEmpty('Suburb',false);

        $validator
            ->scalar('Review_Details')
            ->maxLength('Review_Details', 255)
            ->allowEmpty('Review_Details', false);

        return $validator;
    }
}
