<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Contractor Model
 *
 * @property \App\Model\Table\JobTable|\Cake\ORM\Association\BelongsToMany $Job
 *
 * @method \App\Model\Entity\Contractor get($primaryKey, $options = [])
 * @method \App\Model\Entity\Contractor newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Contractor[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Contractor|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contractor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Contractor[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Contractor findOrCreate($search, callable $callback = null, $options = [])
 */
class ContractorTable extends Table
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

        $this->setTable('contractor');
        $this->setDisplayField('Contractor_id');
        $this->setPrimaryKey('Contractor_id');

        $this->belongsToMany('Job', [
            'foreignKey' => 'Contractor_id',
            'targetForeignKey' => 'Job_id',
            'joinTable' => 'job_contractor'
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
            ->integer('Contractor_id')
            ->allowEmpty('Contractor_id', 'create');

        $validator
            ->scalar('Contractor_name')
            ->maxLength('Contractor_name', 255)
            ->allowEmpty('Contractor_name',false);

        $validator
            ->integer('Rate')
            ->requirePresence('Rate', 'create')
            ->notEmpty('Rate',false,false);

        return $validator;
    }
}
