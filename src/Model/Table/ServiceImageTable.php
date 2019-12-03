<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ServiceImage Model
 *
 * @property \App\Model\Table\ImageTable|\Cake\ORM\Association\BelongsTo $Image
 * @property \App\Model\Table\ServiceTable|\Cake\ORM\Association\BelongsTo $Services
 *
 * @method \App\Model\Entity\ServiceImage get($primaryKey, $options = [])
 * @method \App\Model\Entity\ServiceImage newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ServiceImage[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ServiceImage|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ServiceImage patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ServiceImage[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ServiceImage findOrCreate($search, callable $callback = null, $options = [])
 */
class ServiceImageTable extends Table
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

        $this->setTable('service_image');
        $this->setDisplayField('Service_image_id');
        $this->setPrimaryKey('Service_image_id');

        $this->belongsTo('Image', [
            'foreignKey' => 'Image_id'
        ]);
        $this->belongsTo('Service', [
            'foreignKey' => 'Service_id'
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
            ->integer('Service_image_id')
            ->allowEmpty('Service_image_id', 'create');

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
        $rules->add($rules->existsIn(['Image_id'], 'Image'));
        $rules->add($rules->existsIn(['Service_id'], 'Service'));

        return $rules;
    }
}
