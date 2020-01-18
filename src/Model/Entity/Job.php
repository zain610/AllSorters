<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Job Entity
 *
 * @property int $job_id
 * @property string $price
 * @property int $job_status
 * @property \Cake\I18n\FrozenDate|null $duration
 * @property int $service_id
 * @property \Cake\I18n\FrozenDate|null $Commence_Date
 * @property string|null $job_detail
 *
 * @property \App\Model\Entity\Service $service
 */
class Job extends Entity
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
        'price' => true,
        'job_status' => true,
        'duration' => true,
        'service_id' => true,
        'Commence_Date' => true,
        'job_detail' => true,
        'service' => true
    ];
}
