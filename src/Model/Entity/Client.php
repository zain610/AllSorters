<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Client Entity
 *
 * @property int $id
 * @property string $fname
 * @property string $sname
 * @property \Cake\I18n\FrozenDate $DOB
 * @property string $Address
 * @property string $Phone
 * @property string $Email
 * @property \Cake\I18n\FrozenTime $Created
 * @property \Cake\I18n\FrozenTime $Modified
 * @property string $messages
 */
class Client extends Entity
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
        'fname' => true,
        'sname' => true,
        'DOB' => true,
        'Address' => true,
        'Phone' => true,
        'Email' => true,
        'Created' => true,
        'Modified' => true,
        'messages'=>true
    ];
}
