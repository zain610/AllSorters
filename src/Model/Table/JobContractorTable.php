<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * JobContractor Model
 *
 * @property \App\Model\Table\JobTable|\Cake\ORM\Association\BelongsTo $Job
 * @property \App\Model\Table\ContractorTable|\Cake\ORM\Association\BelongsTo $Contractor
 *
 * @method \App\Model\Entity\JobContractor get($primaryKey, $options = [])
 * @method \App\Model\Entity\JobContractor newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\JobContractor[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\JobContractor|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\JobContractor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\JobContractor[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\JobContractor findOrCreate($search, callable $callback = null, $options = [])
 */
class JobContractorTable extends Table
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

        $this->setTable('job_contractor');
        $this->setDisplayField('Job_Contractor_id');
        $this->setPrimaryKey('Job_Contractor_id');

        $this->belongsTo('Job', [
            'foreignKey' => 'Job_id'
        ]);
        $this->belongsTo('Contractor', [
            'foreignKey' => 'Contractor_id'
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
            ->integer('Job_Contractor_id')
            ->allowEmpty('Job_Contractor_id', 'create');

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
        $rules->add($rules->existsIn(['Job_id'], 'Job'));
        $rules->add($rules->existsIn(['Contractor_id'], 'Contractor'));

        return $rules;
    }
}
