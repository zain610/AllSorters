<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Contractor Entity
 *
 * @property int $Contractor_id
 * @property string $Contractor_name
 * @property int $Rate
 *
 * @property \App\Model\Entity\Job[] $job
 */
class Contractor extends Entity
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
        'Contractor_name' => true,
        'Rate' => true,
        'job' => true
    ];
}
