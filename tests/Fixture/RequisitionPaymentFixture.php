<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RequisitionPaymentFixture
 *
 */
class RequisitionPaymentFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'requisition_payment';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'payment_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'request_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'payment_fk_id_idx' => ['type' => 'index', 'columns' => ['payment_id'], 'length' => []],
            'requisition_id_idx' => ['type' => 'index', 'columns' => ['request_id'], 'length' => []],
        ],
        '_constraints' => [
            'payment_fk_id' => ['type' => 'foreign', 'columns' => ['payment_id'], 'references' => ['payments', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'requisition_id' => ['type' => 'foreign', 'columns' => ['request_id'], 'references' => ['requisitions', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'payment_id' => 1,
                'request_id' => 1
            ],
        ];
        parent::init();
    }
}
