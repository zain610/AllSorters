<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Webpages Model
 *
 * @method \App\Model\Entity\Webpage get($primaryKey, $options = [])
 * @method \App\Model\Entity\Webpage newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Webpage[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Webpage|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Webpage patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Webpage[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Webpage findOrCreate($search, callable $callback = null, $options = [])
 */
class WebpagesTable extends Table
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

        $this->setTable('webpages');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('Content')
            ->allowEmpty('Content');

        $validator
            ->scalar('Heading')
            ->maxLength('Heading', 255)
            ->allowEmpty('Heading', false);

        $validator
            ->scalar('Webpage')
            ->maxLength('Webpage', 255)
            ->requirePresence('Webpage', 'create')
            ->notEmpty('Webpage');

        return $validator;
    }
}
