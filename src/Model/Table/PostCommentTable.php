<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PostComment Model
 *
 * @property \App\Model\Table\BlogPostTable|\Cake\ORM\Association\BelongsTo $BlogPost
 *
 * @method \App\Model\Entity\PostComment get($primaryKey, $options = [])
 * @method \App\Model\Entity\PostComment newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PostComment[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PostComment|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PostComment saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PostComment patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PostComment[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PostComment findOrCreate($search, callable $callback = null, $options = [])
 */
class PostCommentTable extends Table
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

        $this->setTable('post_comment');
        $this->setDisplayField('Post_Comment_id');
        $this->setPrimaryKey('Post_Comment_id');

        $this->belongsTo('BlogPost', [
            'foreignKey' => 'Blog_post_id'
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
            ->integer('Post_Comment_id')
            ->allowEmptyString('Post_Comment_id', 'create');

        $validator
            ->scalar('User_Name')
            ->maxLength('User_Name', 255)
            ->allowEmptyString('User_Name');

        $validator
            ->scalar('User_Email')
            ->maxLength('User_Email', 255)
            ->allowEmptyString('User_Email');

        $validator
            ->scalar('Comment_Details')
            ->maxLength('Comment_Details', 255)
            ->allowEmptyString('Comment_Details');

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
        $rules->add($rules->existsIn(['Blog_post_id'], 'BlogPost'));

        return $rules;
    }
}
