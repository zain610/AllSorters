<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Job Entity
 *
 * @property int $Job_id
 * @property int $Price
 * @property \Cake\I18n\FrozenDate $Commence_Date
 * @property \Cake\I18n\FrozenTime $Duration
 * @property string $Job_Status
 *
 * @property \App\Model\Entity\Contractor[] $contractor
 * @property \App\Model\Entity\Service[] $service
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
        'Price' => true,
        'Commence_Date' => true,
        'Duration' => true,
        'Job_Status' => true,
        'contractor' => true,
        'service' => true
    ];
}
