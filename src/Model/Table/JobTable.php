<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Job Model
 *
 * @property \App\Model\Table\ContractorTable|\Cake\ORM\Association\BelongsToMany $Contractor
 * @property \App\Model\Table\ServiceTable|\Cake\ORM\Association\BelongsToMany $Services
 *
 * @method \App\Model\Entity\Job get($primaryKey, $options = [])
 * @method \App\Model\Entity\Job newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Job[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Job|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
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
        $this->setDisplayField('Job_id');
        $this->setPrimaryKey('Job_id');

        $this->belongsToMany('Contractor', [
            'foreignKey' => 'Job_id',
            'targetForeignKey' => 'Contractor_id',
            'joinTable' => 'job_contractor'
        ]);
        $this->belongsToMany('Service', [
            'foreignKey' => 'Job_id',
            'targetForeignKey' => 'Service_id',
            'joinTable' => 'service_job'
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
            ->integer('Job_id')
            ->allowEmpty('Job_id', 'create');

        $validator
            ->integer('Price')
            ->allowEmpty('Price',false);

        $validator
            ->date('Commence_Date')
            ->allowEmpty('Commence_Date',false);

        $validator
            ->time('Duration')
            ->allowEmpty('Duration',false);

        $validator
            ->scalar('Job_Status')
            ->maxLength('Job_Status', 255)
            ->allowEmpty('Job_Status',false);

        return $validator;
    }
}
