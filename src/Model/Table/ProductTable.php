<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Product Model
 *
 * @property \App\Model\Table\ImageTable|\Cake\ORM\Association\BelongsTo $Image
 *
 * @method \App\Model\Entity\Product get($primaryKey, $options = [])
 * @method \App\Model\Entity\Product newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Product[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Product|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Product saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Product patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Product[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Product findOrCreate($search, callable $callback = null, $options = [])
 */
class ProductTable extends Table
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

        $this->setTable('product');
        $this->setDisplayField('name');
        $this->setPrimaryKey('product_id');

        $this->belongsTo('Image', [
            'foreignKey' => 'Image_id'
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
            ->integer('product_id')
            ->allowEmptyString('product_id', 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->allowEmptyString('name', false);

        $validator
            ->scalar('description')
            ->maxLength('description', 2550)
            ->allowEmptyString('description', false);

        $validator
            ->integer('price')
            ->allowEmptyString('price', false);

        $validator
            ->integer('stock')
            ->allowEmptyString('stock', false);

        $validator
            ->date('Create')
            ->allowEmptyDate('Create');

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
