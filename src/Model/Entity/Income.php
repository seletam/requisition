<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Income Entity
 *
 * @property int $id
 * @property int $income_type_id
 * @property float $Amount
 * @property \Cake\I18n\FrozenTime $created
 * @property int $services_id
 *
 * @property \App\Model\Entity\AccountType $account_type
 */
class Income extends Entity
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
        'income_type_id' => true,
        'Amount' => true,
        'created' => true,
        'services_id' => true,
        'account_type' => true
    ];
}
