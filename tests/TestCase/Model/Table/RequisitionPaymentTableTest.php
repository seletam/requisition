<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RequisitionPaymentTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RequisitionPaymentTable Test Case
 */
class RequisitionPaymentTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RequisitionPaymentTable
     */
    public $RequisitionPayment;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.requisition_payment',
        'app.payments',
        'app.requisition'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('RequisitionPayment') ? [] : ['className' => RequisitionPaymentTable::class];
        $this->RequisitionPayment = TableRegistry::getTableLocator()->get('RequisitionPayment', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RequisitionPayment);

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
