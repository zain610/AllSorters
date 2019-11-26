<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GalleryPage Model
 *
 * @property \App\Model\Table\ImageTable|\Cake\ORM\Association\BelongsToMany $Image
 *
 * @method \App\Model\Entity\GalleryPage get($primaryKey, $options = [])
 * @method \App\Model\Entity\GalleryPage newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GalleryPage[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GalleryPage|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GalleryPage saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GalleryPage patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GalleryPage[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GalleryPage findOrCreate($search, callable $callback = null, $options = [])
 */
class GalleryPageTable extends Table
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

        $this->setTable('gallery_page');
        $this->setDisplayField('BA_Image_id');
        $this->setPrimaryKey('BA_Image_id');

        $this->belongsToMany('Image', [
            'foreignKey' => 'gallery_page_id',
            'targetForeignKey' => 'image_id',
            'joinTable' => 'gallery_page_image'
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
            ->integer('BA_Image_id')
            ->allowEmptyString('BA_Image_id', 'create');

        $validator
            ->dateTime('Date')
            ->allowEmptyDateTime('Date');

        $validator
            ->scalar('Image_Attribute')
            ->maxLength('Image_Attribute', 255)
            ->allowEmptyString('Image_Attribute');

        $validator
            ->integer('Suburb')
            ->allowEmptyString('Suburb');

        $validator
            ->scalar('Image_Comment')
            ->maxLength('Image_Comment', 255)
            ->allowEmptyString('Image_Comment');

        return $validator;
    }
}
