<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Payment Entity
 *
 * @property int $id
 * @property string $chequeno
 * @property string $amount
 * @property \Cake\I18n\FrozenTime $chequedate
 * @property string $documentnumber
 * @property string $narration
 * @property string $collectedby
 *
 * @property \App\Model\Entity\Requisition[] $requisitions
 */
class Payment extends Entity
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
        'chequeno' => true,
        'amount' => true,
        'chequedate' => true,
        'documentnumber' => true,
        'narration' => true,
        'collectedby' => true,
        'requisitions' => true
    ];
}
