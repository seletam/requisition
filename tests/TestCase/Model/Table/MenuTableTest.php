<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MenuTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MenuTable Test Case
 */
class MenuTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MenuTable
     */
    public $Menu;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.menu',
        'app.privileges'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Menu') ? [] : ['className' => MenuTable::class];
        $this->Menu = TableRegistry::getTableLocator()->get('Menu', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Menu);

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
