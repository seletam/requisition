<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RequisitionTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RequisitionTable Test Case
 */
class RequisitionTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RequisitionTable
     */
    public $Requisition;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.requisition',
        'app.services'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Requisition') ? [] : ['className' => RequisitionTable::class];
        $this->Requisition = TableRegistry::getTableLocator()->get('Requisition', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Requisition);

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
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
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
