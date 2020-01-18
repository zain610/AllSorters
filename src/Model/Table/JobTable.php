<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Job Model
 *
 * @property \App\Model\Table\ServiceTable|\Cake\ORM\Association\BelongsTo $Service
 *
 * @method \App\Model\Entity\Job get($primaryKey, $options = [])
 * @method \App\Model\Entity\Job newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Job[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Job|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Job saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Job patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Job[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Job findOrCreate($search, callable $callback = null, $options = [])
 */
class JobTable extends Table
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

        $this->setTable('job');
        $this->setDisplayField('job_id');
        $this->setPrimaryKey('job_id');

        $this->belongsTo('Service', [
            'foreignKey' => 'service_id',
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
            ->integer('job_id')
            ->allowEmptyString('job_id', 'create');

        $validator
            ->scalar('price')
            ->maxLength('price', 255)
            ->allowEmptyString('price', false);

        $validator
            ->allowEmptyString('job_status', false);

        $validator
            ->date('duration')
            ->allowEmptyDate('duration');

        $validator
            ->date('Commence_Date')
            ->allowEmptyDate('Commence_Date');

        $validator
            ->scalar('job_detail')
            ->maxLength('job_detail', 255)
            ->allowEmptyString('job_detail');

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
        $rules->add($rules->existsIn(['service_id'], 'Service'));

        return $rules;
    }
}
