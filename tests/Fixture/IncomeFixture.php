<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * IncomeFixture
 *
 */
class IncomeFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'income';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'income_type_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Amount' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'created' => ['type' => 'timestamp', 'length' => null, 'null' => true, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'services_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'acc_fk_type_idx' => ['type' => 'index', 'columns' => ['income_type_id'], 'length' => []],
            'service_fk_idx' => ['type' => 'index', 'columns' => ['services_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'acc_fk_type' => ['type' => 'foreign', 'columns' => ['income_type_id'], 'references' => ['account_types', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'service_fk' => ['type' => 'foreign', 'columns' => ['services_id'], 'references' => ['services', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'id' => 1,
                'income_type_id' => 1,
                'Amount' => 1,
                'created' => 1535201853,
                'services_id' => 1
            ],
        ];
        parent::init();
    }
}
