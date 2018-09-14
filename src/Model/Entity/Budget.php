<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Budget Entity
 *
 * @property int $id
 * @property int $service_id
 * @property float $amount
 * @property int $active
 * @property int $fiscal_id
 * @property \Cake\I18n\FrozenTime $created
 *
 * @property \App\Model\Entity\Service $service
 * @property \App\Model\Entity\Fiscal $fiscal
 */
class Budget extends Entity
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
        'service_id' => true,
        'amount' => true,
        'active' => true,
        'fiscal_id' => true,
        'created' => true,
        'service' => true,
        'fiscal' => true
    ];
}
