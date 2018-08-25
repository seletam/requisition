<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $firstname
 * @property string $lastname
 * @property int $employeeid
 * @property string $username
 * @property string $email
 * @property string $department_id
 * @property \Cake\I18n\FrozenTime $createddate
 * @property int $privilegeid
 * @property string $password
 *
 * @property \App\Model\Entity\Department $department
 */
class User extends Entity
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
        'firstname' => true,
        'lastname' => true,
        'employeeid' => true,
        'username' => true,
        'email' => true,
        'department_id' => true,
        'createddate' => true,
        'privilegeid' => true,
        'password' => true,
        'department' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
