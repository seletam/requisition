<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BudgetFixture
 *
 */
class BudgetFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'budget';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'service_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'amount' => ['type' => 'decimal', 'length' => 15, 'precision' => 4, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'active' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => '1', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'fiscal_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'timestamp', 'length' => null, 'null' => true, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'service_fk_pk_idx' => ['type' => 'index', 'columns' => ['service_id'], 'length' => []],
            'fiscal_id_idx' => ['type' => 'index', 'columns' => ['fiscal_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fiscal_id' => ['type' => 'foreign', 'columns' => ['fiscal_id'], 'references' => ['fiscals', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'service_fk_pk' => ['type' => 'foreign', 'columns' => ['service_id'], 'references' => ['services', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'service_id' => 1,
                'amount' => 1.5,
                'active' => 1,
                'fiscal_id' => 1,
                'created' => 1536437407
            ],
        ];
        parent::init();
    }
}
