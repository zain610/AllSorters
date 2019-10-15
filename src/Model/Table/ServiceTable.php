<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Service Model
 *
 * @property \App\Model\Table\ImageTable|\Cake\ORM\Association\BelongsToMany $Image
 * @property \App\Model\Table\JobTable|\Cake\ORM\Association\BelongsToMany $Job
 *
 * @method \App\Model\Entity\Service get($primaryKey, $options = [])
 * @method \App\Model\Entity\Service newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Service[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Service|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Service patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Service[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Service findOrCreate($search, callable $callback = null, $options = [])
 */
class ServiceTable extends Table
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

        $this->setTable('service');
        $this->setDisplayField('Service_id');
        $this->setPrimaryKey('Service_id');

        $this->belongsToMany('Image', [
            'foreignKey' => 'Service_id',
            'targetForeignKey' => 'Image_id',
            'joinTable' => 'service_image'
        ]);
        $this->belongsToMany('Job', [
            'foreignKey' => 'Service_id',
            'targetForeignKey' => 'Job_id',
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
            ->integer('Service_id')
            ->allowEmpty('Service_id', 'create');

        $validator
            ->scalar('Service_Title')
            ->maxLength('Service_Title', 255)
            ->requirePresence('Service_Title', 'create')
            ->notEmpty('Service_Title',false,false);

        $validator
            ->scalar('Service_Description')
            ->maxLength('Service_Description', 255)
            ->allowEmpty('Service_Description',false,false);

        $validator
            ->scalar('Service_Detail')
            ->requirePresence('Service_Detail', 'create')
            ->notEmpty('Service_Detail',false,false);

        return $validator;
    }
}
