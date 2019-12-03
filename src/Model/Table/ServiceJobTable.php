<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ServiceJob Model
 *
 * @property \App\Model\Table\ServiceTable|\Cake\ORM\Association\BelongsTo $Services
 * @property \App\Model\Table\JobTable|\Cake\ORM\Association\BelongsTo $Job
 *
 * @method \App\Model\Entity\ServiceJob get($primaryKey, $options = [])
 * @method \App\Model\Entity\ServiceJob newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ServiceJob[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ServiceJob|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ServiceJob patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ServiceJob[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ServiceJob findOrCreate($search, callable $callback = null, $options = [])
 */
class ServiceJobTable extends Table
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

        $this->setTable('service_job');
        $this->setDisplayField('Service_Job_id');
        $this->setPrimaryKey('Service_Job_id');

        $this->belongsTo('Service', [
            'foreignKey' => 'Service_id'
        ]);
        $this->belongsTo('Job', [
            'foreignKey' => 'Job_id'
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
            ->integer('Service_Job_id')
            ->allowEmpty('Service_Job_id', 'create');

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
        $rules->add($rules->existsIn(['Service_id'], 'Service'));
        $rules->add($rules->existsIn(['Job_id'], 'Job'));

        return $rules;
    }
}
