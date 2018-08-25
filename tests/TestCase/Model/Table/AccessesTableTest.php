<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AccessesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AccessesTable Test Case
 */
class AccessesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AccessesTable
     */
    public $Accesses;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.accesses',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Accesses') ? [] : ['className' => AccessesTable::class];
        $this->Accesses = TableRegistry::getTableLocator()->get('Accesses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Accesses);

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
