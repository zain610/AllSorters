<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PostComment Entity
 *
 * @property int $Post_Comment_id
 * @property string|null $User_Name
 * @property string|null $User_Email
 * @property string|null $Comment_Details
 * @property int|null $Post_id
 *
 * @property \App\Model\Entity\BlogPost $blog_post
 */
class PostComment extends Entity
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
        'User_Name' => true,
        'User_Email' => true,
        'Comment_Details' => true,
        'Post_id' => true,
        'blog_post' => true
    ];
}
