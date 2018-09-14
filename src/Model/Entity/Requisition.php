<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Requisition Entity
 *
 * @property int $id
 * @property string $regnumber
 * @property string $reqnumber
 * @property string $request
 * @property int $service_id
 * @property string $invoiceno
 * @property \Cake\I18n\FrozenTime $invoicedate
 * @property string $suppliername
 * @property \Cake\I18n\FrozenTime $createddate
 *
 * @property \App\Model\Entity\Service $service
 * @property \App\Model\Entity\Payment[] $payments
 */
class Requisition extends Entity
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
        'regnumber' => true,
        'reqnumber' => true,
        'request' => true,
        'service_id' => true,
        'invoiceno' => true,
        'invoicedate' => true,
        'suppliername' => true,
        'createddate' => true,
        'service' => true,
        'payments' => true
    ];
}
