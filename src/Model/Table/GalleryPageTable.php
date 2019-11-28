<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GalleryPage Model
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
            ->integer('BA_Gallery_id')
            ->allowEmptyString('BA_Gallery_id', 'create');

        $validator
            ->date('Date')
            ->allowEmptyDate('Date');

        return $validator;
    }
}
