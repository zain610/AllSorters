<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tips Model
 *
 * @method \App\Model\Entity\Tip get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tip newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tip[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tip|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tip patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tip[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tip findOrCreate($search, callable $callback = null, $options = [])
 */
class TipsTable extends Table
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

        $this->setTable('tips');
        $this->setDisplayField('tips_id');
        $this->setPrimaryKey('tips_id');
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
            ->integer('tips_id')
            ->allowEmpty('tips_id', 'create');

        $validator
            ->scalar('Title')
            ->maxLength('Title', 255)
            ->allowEmpty('Title');

        $validator
            ->scalar('Content')
            ->allowEmpty('Content');

        return $validator;
    }
}
