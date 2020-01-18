<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * About Model
 *
 * @method \App\Model\Entity\About get($primaryKey, $options = [])
 * @method \App\Model\Entity\About newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\About[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\About|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\About patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\About[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\About findOrCreate($search, callable $callback = null, $options = [])
 */
class AboutTable extends Table
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

        $this->setTable('about');
        $this->setDisplayField('about_id');
        $this->setPrimaryKey('about_id');
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
            ->integer('about_id')
            ->allowEmpty('about_id', 'create');

        $validator
            ->scalar('Title')
            ->maxLength('Title', 255)
            ->allowEmpty('Title');

        $validator
            ->scalar('Content')
            ->requirePresence('Content', 'create')
            ->notEmpty('Content');

        return $validator;
    }
}
