<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Slideshow Model
 *
 * @property \App\Model\Table\ImageTable|\Cake\ORM\Association\BelongsTo $Image
 *
 * @method \App\Model\Entity\Slideshow get($primaryKey, $options = [])
 * @method \App\Model\Entity\Slideshow newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Slideshow[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Slideshow|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Slideshow saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Slideshow patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Slideshow[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Slideshow findOrCreate($search, callable $callback = null, $options = [])
 */
class SlideshowTable extends Table
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

        $this->setTable('slideshow');
        $this->setDisplayField('Slideshow_id');
        $this->setPrimaryKey('Slideshow_id');

        $this->belongsTo('Image', [
            'foreignKey' => 'Image_id',
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
            ->integer('Slideshow_id')
            ->allowEmptyString('Slideshow_id', 'create');

        $validator
            ->scalar('Captions')
            ->allowEmptyString('Captions');

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

        return $rules;
    }
}
