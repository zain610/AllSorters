<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $product_id
 * @property string $name
 * @property string $description
 * @property int $price
 * @property int $stock
 * @property \Cake\I18n\FrozenDate|null $Create
 * @property int|null $Image_id
 *
 * @property \App\Model\Entity\Image $image
 */
class Product extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'description' => true,
        'price' => true,
        'stock' => true,
        'Image_id' => true,
        'image' => true,
        'achieved' => true
    ];
}
