<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AccountTypeTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AccountTypeTable Test Case
 */
class AccountTypeTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AccountTypeTable
     */
    public $AccountType;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.account_type'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('AccountType') ? [] : ['className' => AccountTypeTable::class];
        $this->AccountType = TableRegistry::getTableLocator()->get('AccountType', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AccountType);

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
}
