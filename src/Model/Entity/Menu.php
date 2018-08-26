<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Menu Entity
 *
 * @property int $id
 * @property string $name
 * @property string $type
 * @property string $path
 * @property int $is_active
 * @property string $module
 * @property string $privilege_id
 * @property \Cake\I18n\FrozenTime $created
 *
 * @property \App\Model\Entity\Privilege $privilege
 */
class Menu extends Entity
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
        'type' => true,
        'path' => true,
        'is_active' => true,
        'module' => true,
        'privilege_id' => true,
        'created' => true,
        'privilege' => true
    ];
}
