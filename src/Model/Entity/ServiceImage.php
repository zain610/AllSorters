<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ServiceImage Entity
 *
 * @property int $Service_image_id
 * @property int $Image_id
 * @property int $Service_id
 *
 * @property \App\Model\Entity\Image $image
 * @property \App\Model\Entity\Service $service
 */
class ServiceImage extends Entity
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
        'Image_id' => true,
        'Service_id' => true,
        'image' => true,
        'service' => true
    ];
}
