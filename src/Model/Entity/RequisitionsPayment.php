<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * RequisitionsPayment Entity
 *
 * @property int $requisition_id
 * @property int $payment_id
 *
 * @property \App\Model\Entity\Requisition $requisition
 * @property \App\Model\Entity\Payment $payment
 */
class RequisitionsPayment extends Entity
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
        'requisition_id' => true,
        'payment_id' => true,
        'requisition' => true,
        'payment' => true
    ];
}
