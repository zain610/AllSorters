<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Property Entity
 *
 * @property int $id
 * @property string $address
 * @property int $list_price
 * @property int $sold_price
 * @property int $num_bedrooms
 * @property int $num_bathrooms
 * @property string $image_url
 * @property string $image_attribution
 */
class Property extends Entity
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
        'address' => true,
        'list_price' => true,
        'sold_price' => true,
        'num_bedrooms' => true,
        'num_bathrooms' => true,
        'image_url' => true,
        'image_attribution' => true
    ];
}
