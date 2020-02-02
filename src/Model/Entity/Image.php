<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Image Entity
 *
 * @property int $Image_id
 * @property string|null $Image_Content
 * @property string|null $name
 * @property string|null $path
 * @property \Cake\I18n\FrozenDate|null $created_at
 * @property int|null $gallery_id
 * @property bool|null $Shown
 *
 * @property \App\Model\Entity\BlogPost[] $blog_post
 * @property \App\Model\Entity\GalleryPage $gallery_page
 * @property \App\Model\Entity\Service[] $services
 */
class Image extends Entity
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
        'Image_Content' => true,
        'name' => true,
        'path' => true,
        'created_at' => true,
        'gallery_id' => true,
        'Shown' => true,
        'blog_post' => true,
        'gallery_page' => true,
        'services' => true,
        'gallery_title' => true
    ];
}
