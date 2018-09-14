<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BudgetTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BudgetTable Test Case
 */
class BudgetTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BudgetTable
     */
    public $Budget;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.budget',
        'app.services',
        'app.fiscals'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Budget') ? [] : ['className' => BudgetTable::class];
        $this->Budget = TableRegistry::getTableLocator()->get('Budget', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Budget);

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
