<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Request Entity
 *
 * @property int $Request_No
 * @property string $Request_Email
 * @property string $Cust_Fname
 * @property string $Cust_Sname
 * @property string $Query_info
 * @property \Cake\I18n\FrozenDate $created
 * @property bool $seen
 * @property string $Response
 */
class Request extends Entity
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
        'Request_Email' => true,
        'Cust_Fname' => true,
        'Cust_Sname' => true,
        'Query_info' => true,
        'created' => true,
        'seen' => true,
        'Response' => true
    ];
}
