<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BlogPostImage Entity
 *
 * @property int $Blog_Post_image_id
 * @property int $Image_id
 * @property int $blog_post_id
 *
 * @property \App\Model\Entity\Image $image
 * @property \App\Model\Entity\BlogPost $blog_post
 */
class BlogPostImage extends Entity
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
        'blog_post_id' => true,
        'image' => true,
        'blog_post' => true
    ];
}
