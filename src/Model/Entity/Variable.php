<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Variable Entity
 *
 * @property int $variable_id
 * @property string $variable_key
 * @property string $variable_value
 * @property int|null $variable_cid
 *
 * @property \App\Model\Entity\ControllersInfo $controllers_info
 */
class Variable extends Entity
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
        'variable_key' => true,
        'variable_value' => true,
        'variable_cid' => true,
        'controllers_info' => true
    ];
}
