<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BlogPostImage Model
 *
 * @property \App\Model\Table\ImageTable|\Cake\ORM\Association\BelongsTo $Image
 * @property \App\Model\Table\BlogPostTable|\Cake\ORM\Association\BelongsTo $BlogPost
 *
 * @method \App\Model\Entity\BlogPostImage get($primaryKey, $options = [])
 * @method \App\Model\Entity\BlogPostImage newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\BlogPostImage[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BlogPostImage|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BlogPostImage patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BlogPostImage[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\BlogPostImage findOrCreate($search, callable $callback = null, $options = [])
 */
class BlogPostImageTable extends Table
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

        $this->setTable('blog_post_image');
        $this->setDisplayField('Blog_Post_image_id');
        $this->setPrimaryKey('Blog_Post_image_id');

        $this->belongsTo('Image', [
            'foreignKey' => 'Image_id'
        ]);
        $this->belongsTo('BlogPost', [
            'foreignKey' => 'blog_post_id'
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
            ->integer('Blog_Post_image_id')
            ->allowEmpty('Blog_Post_image_id', 'create');

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
        $rules->add($rules->existsIn(['blog_post_id'], 'BlogPost'));

        return $rules;
    }
}
