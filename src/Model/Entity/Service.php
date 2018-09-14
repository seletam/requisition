<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Service Entity
 *
 * @property int $id
 * @property string $name
 * @property int $account_type_id
 *
 * @property \App\Model\Entity\AccountType $account_type
 * @property \App\Model\Entity\Requisition[] $requisitions
 */
class Service extends Entity
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
        'account_type_id' => true,
        'account_type' => true,
        'requisitions' => true
    ];
}
