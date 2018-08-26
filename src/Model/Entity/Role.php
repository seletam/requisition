<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Role Entity
 *
 * @property int $id
 * @property int $is_create
 * @property int $is_read
 * @property int $is_edit
 * @property int $is_delete
 * @property int $privilege_id
 *
 * @property \App\Model\Entity\Privilege $privilege
 */
class Role extends Entity
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
        'is_create' => true,
        'is_read' => true,
        'is_edit' => true,
        'is_delete' => true,
        'privilege_id' => true,
        'privilege' => true
    ];
}
