<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PaymentsRequisitionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PaymentsRequisitionsTable Test Case
 */
class PaymentsRequisitionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PaymentsRequisitionsTable
     */
    public $PaymentsRequisitions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.payments_requisitions',
        'app.payments',
        'app.requisitions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('PaymentsRequisitions') ? [] : ['className' => PaymentsRequisitionsTable::class];
        $this->PaymentsRequisitions = TableRegistry::getTableLocator()->get('PaymentsRequisitions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PaymentsRequisitions);

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
