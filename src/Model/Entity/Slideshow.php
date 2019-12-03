<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Slideshow Entity
 *
 * @property int $Slideshow_id
 * @property string|null $Captions
 * @property int $Image_id
 *
 * @property \App\Model\Entity\Image $image
 */
class Slideshow extends Entity
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
        'Captions' => true,
        'Image_id' => true,
        'image' => true
    ];
}
