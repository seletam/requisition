<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Fiscal Entity
 *
 * @property int $id
 * @property string $name
 * @property string $financialyear
 * @property \Cake\I18n\FrozenTime $effdate
 * @property int $active
 *
 * @property \App\Model\Entity\Budget[] $budget
 */
class Fiscal extends Entity
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
        'financialyear' => true,
        'effdate' => true,
        'active' => true,
        'budget' => true
    ];
}
