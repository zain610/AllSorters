<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Review Entity
 *
 * @property int $Review_id
 * @property string $Client_Name
 * @property \Cake\I18n\FrozenTime $Month_Year
 * @property int $Suburb
 * @property string $Review_Details
 */
class Review extends Entity
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
        'Client_Name' => true,
        'Month_Year' => true,
        'Suburb' => true,
        'Review_Details' => true
    ];
}
