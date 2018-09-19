<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RequisitionsPaymentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RequisitionsPaymentsTable Test Case
 */
class RequisitionsPaymentsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RequisitionsPaymentsTable
     */
    public $RequisitionsPayments;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.requisitions_payments',
        'app.requisitions',
        'app.payments'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('RequisitionsPayments') ? [] : ['className' => RequisitionsPaymentsTable::class];
        $this->RequisitionsPayments = TableRegistry::getTableLocator()->get('RequisitionsPayments', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RequisitionsPayments);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
