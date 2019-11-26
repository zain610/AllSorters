<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * GalleryPage Entity
 *
 * @property int $BA_Image_id
 * @property \Cake\I18n\FrozenTime|null $Date
 * @property string|null $Image_Attribute
 * @property int|null $Suburb
 * @property string|null $Image_Comment
 *
 * @property \App\Model\Entity\Image[] $image
 */
class GalleryPage extends Entity
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
        'Date' => true,
        'Image_Attribute' => true,
        'Suburb' => true,
        'Image_Comment' => true,
        'image' => true
    ];
}
