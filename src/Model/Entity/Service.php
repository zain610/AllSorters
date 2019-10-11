<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Service Entity
 *
 * @property int $Service_id
 * @property string $Service_Title
 * @property string $Service_Description
 * @property string $Service_Detail
 *
 * @property \App\Model\Entity\Image[] $image
 * @property \App\Model\Entity\Job[] $job
 */
class Service extends Entity
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
        'Service_Title' => true,
        'Service_Description' => true,
        'Service_Detail' => true,
        'image' => true,
        'job' => true
    ];
}
