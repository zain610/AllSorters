<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Footer Entity
 *
 * @property int $Footer_id
 * @property string $Phone
 * @property string|null $Email
 * @property string $Address
 */
class Footer extends Entity
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
        'Phone' => true,
        'Email' => true,
        'Address' => true,
        'Twitter' => true,
        'Facebook' => true,
        'Google' => true,
        'Linkedin' => true
    ];
}
