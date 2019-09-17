<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BlogPost Model
 *
 * @property \App\Model\Table\ImageTable|\Cake\ORM\Association\BelongsToMany $Image
 *
 * @method \App\Model\Entity\BlogPost get($primaryKey, $options = [])
 * @method \App\Model\Entity\BlogPost newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\BlogPost[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BlogPost|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BlogPost patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BlogPost[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\BlogPost findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class BlogPostTable extends Table
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

        $this->setTable('blog_post');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('Image', [
            'foreignKey' => 'post_id',
            'targetForeignKey' => 'image_id',
            'joinTable' => 'blog_post_image'
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('title')
            ->maxLength('title', 255)
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        $validator
            ->dateTime('Date')
            ->requirePresence('Date', 'create')
            ->notEmpty('Date');

        $validator
            ->scalar('Description')
            ->maxLength('Description', 255)
            ->requirePresence('Description', 'create')
            ->notEmpty('Description');

        $validator
            ->scalar('Body')
            ->maxLength('Body', 255)
            ->requirePresence('Body', 'create')
            ->notEmpty('Body');

        return $validator;
    }
}
