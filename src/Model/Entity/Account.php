<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Account Entity
 *
 * @property int $id
 * @property string $name
 * @property int $accounttype
 * @property int $parent_id
 *
 * @property \App\Model\Entity\ParentAccount $parent_account
 * @property \App\Model\Entity\ChildAccount[] $child_accounts
 */
class Account extends Entity
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
        'accounttype' => true,
        'parent_id' => true,
        'parent_account' => true,
        'child_accounts' => true
    ];
}
