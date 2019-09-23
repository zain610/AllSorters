<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * JobContractor Entity
 *
 * @property int $Job_Contractor_id
 * @property int $Job_id
 * @property int $Contractor_id
 *
 * @property \App\Model\Entity\Job $job
 * @property \App\Model\Entity\Contractor $contractor
 */
class JobContractor extends Entity
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
        'Job_id' => true,
        'Contractor_id' => true,
        'job' => true,
        'contractor' => true
    ];
}
