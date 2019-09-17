<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Service Entity
 *
 * @property int $Serv_id
 * @property string $Serv_Title
 * @property string $Serv_Description
 * @property string $Serv_Detail
 *
 * @property \App\Model\Entity\Job[] $job
 * @property \App\Model\Entity\Image[] $image
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
        'Serv_Title' => true,
        'Serv_Description' => true,
        'Serv_Detail' => true,
        'job' => true,
        'image' => true
    ];
}
