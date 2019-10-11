<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ServiceJob Entity
 *
 * @property int $Service_Job_id
 * @property int $Service_id
 * @property int $Job_id
 *
 * @property \App\Model\Entity\Service $service
 * @property \App\Model\Entity\Job $job
 */
class ServiceJob extends Entity
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
        'Service_id' => true,
        'Job_id' => true,
        'service' => true,
        'job' => true
    ];
}
