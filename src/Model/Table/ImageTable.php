<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Image Model
 *
 * @property \App\Model\Table\GalleryPageTable|\Cake\ORM\Association\BelongsTo $GalleryPage
 * @property \App\Model\Table\BlogPostTable|\Cake\ORM\Association\BelongsToMany $BlogPost
 * @property |\Cake\ORM\Association\BelongsToMany $Service
 *
 * @method \App\Model\Entity\Image get($primaryKey, $options = [])
 * @method \App\Model\Entity\Image newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Image[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Image|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Image saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Image patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Image[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Image findOrCreate($search, callable $callback = null, $options = [])
 */
class ImageTable extends Table
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

        $this->setTable('image');
        $this->setDisplayField('Image_id');
        $this->setPrimaryKey('Image_id');

        $this->belongsToMany('BlogPost', [
            'foreignKey' => 'Image_id',
            'targetForeignKey' => 'blog_post_id',
            'joinTable' => 'blog_post_image'
        ]);

        $this->belongsTo('GalleryPage', [
            'foreignKey' => 'gallery_page',
        ]);

        $this->belongsToMany('Services', [
            'foreignKey' => 'image_id',
            'targetForeignKey' => 'service_id',
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
            ->integer('Image_id')
            ->allowEmptyString('Image_id', 'create');

        $validator
            ->scalar('Image_Content')
            ->maxLength('Image_Content', 255)
            ->allowEmptyString('Image_Content');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->allowEmptyString('name');

        $validator
            ->scalar('path')
            ->maxLength('path', 255)
            ->allowEmptyString('path');

        $validator
            ->date('created_at')
            ->allowEmptyDate('created_at');

        $validator
            ->boolean('Shown')
            ->allowEmptyString('Shown');

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
        $rules->add($rules->existsIn(['gallery_id'], 'GalleryPage'));

        return $rules;
    }
}
