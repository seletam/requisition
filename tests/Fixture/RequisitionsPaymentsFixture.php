<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RequisitionsPaymentsFixture
 *
 */
class RequisitionsPaymentsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'requisition_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'payment_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'requisition_fk_id_idx' => ['type' => 'index', 'columns' => ['requisition_id'], 'length' => []],
            'pay_fk_id_idx' => ['type' => 'index', 'columns' => ['payment_id'], 'length' => []],
        ],
        '_constraints' => [
            'pay_fk_id' => ['type' => 'foreign', 'columns' => ['payment_id'], 'references' => ['payments', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'requisition_fk_id' => ['type' => 'foreign', 'columns' => ['requisition_id'], 'references' => ['requisitions', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'requisition_id' => 1,
                'payment_id' => 1
            ],
        ];
        parent::init();
    }
}
