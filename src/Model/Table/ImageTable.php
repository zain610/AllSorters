<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Image Model
 *
 * @property \App\Model\Table\BlogPostTable|\Cake\ORM\Association\BelongsToMany $BlogPost
 * @property \App\Model\Table\GalleryPageTable|\Cake\ORM\Association\BelongsToMany $GalleryPage
 * @property \App\Model\Table\ServiceTable|\Cake\ORM\Association\BelongsToMany $Services
 *
 * @method \App\Model\Entity\Image get($primaryKey, $options = [])
 * @method \App\Model\Entity\Image newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Image[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Image|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
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
        $this->belongsToMany('GalleryPage', [
            'foreignKey' => 'image_id',
            'targetForeignKey' => 'gallery_page_id',
            'joinTable' => 'gallery_page_image'
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
            ->allowEmpty('Image_id', 'create');

        $validator
            ->scalar('Image_Content')
            ->maxLength('Image_Content', 255)
            ->allowEmpty('Image_Content');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->allowEmpty('name');

        $validator
            ->scalar('path')
            ->maxLength('path', 255)
            ->allowEmpty('path');

        $validator
            ->date('created_at')
            ->allowEmpty('created_at');

        return $validator;
    }
}
