<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Service Model
 *
 * @property \App\Model\Table\JobTable|\Cake\ORM\Association\BelongsToMany $Job
 * @property \App\Model\Table\ImageTable|\Cake\ORM\Association\BelongsToMany $Image
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
        $this->setDisplayField('Serv_id');
        $this->setPrimaryKey('Serv_id');

        $this->belongsToMany('Job', [
            'foreignKey' => 'service_id',
            'targetForeignKey' => 'job_id',
            'joinTable' => 'job_service'
        ]);
        $this->belongsToMany('Image', [
            'foreignKey' => 'service_id',
            'targetForeignKey' => 'image_id',
            'joinTable' => 'service_image'
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
            ->integer('Serv_id')
            ->allowEmpty('Serv_id', 'create');

        $validator
            ->scalar('Serv_Title')
            ->maxLength('Serv_Title', 255)
            ->requirePresence('Serv_Title', 'create')
            ->notEmpty('Serv_Title');

        $validator
            ->scalar('Serv_Description')
            ->maxLength('Serv_Description', 255)
            ->allowEmpty('Serv_Description');

        $validator
            ->scalar('Serv_Detail')
            ->maxLength('Serv_Detail', 255)
            ->requirePresence('Serv_Detail', 'create')
            ->notEmpty('Serv_Detail');

        return $validator;
    }
}
