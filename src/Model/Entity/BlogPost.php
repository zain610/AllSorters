<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BlogPost Entity
 *
 * @property int $blog_post_id
 * @property string $title
 * @property \Cake\I18n\FrozenTime $Date
 * @property string $Description
 * @property string $Body
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property bool|null $Published
 * @property bool|null $Archived
 *
 * @property \App\Model\Entity\Image[] $image
 */
class BlogPost extends Entity
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
        'title' => true,
        'Body' => true,
        'created' => true,
        'modified' => true,
        'Published' => true,
        'Archived' => true,
        'image' => true
    ];
}
