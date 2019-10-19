<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Request Entity
 *
 * @property int $Request_No
 * @property string $Request_Email
 * @property string|null $Cust_Fname
 * @property string|null $Cust_Sname
 * @property string|null $Subscription
 * @property int $Client_id
 *
 * @property \App\Model\Entity\Client $client
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
        'Subscription' => true,
        'Client_id' => true,
        'client' => true
    ];
}
