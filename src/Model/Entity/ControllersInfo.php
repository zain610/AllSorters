<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ControllersInfo Entity
 *
 * @property int $controller_id
 * @property string $name
 * @property int $navbar_info
 */
class ControllersInfo extends Entity
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
        'name' => true,
        'navbar_info' => true
    ];
}
