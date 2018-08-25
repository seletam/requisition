<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ServicegroupTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ServicegroupTable Test Case
 */
class ServicegroupTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ServicegroupTable
     */
    public $Servicegroup;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.servicegroup'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Servicegroup') ? [] : ['className' => ServicegroupTable::class];
        $this->Servicegroup = TableRegistry::getTableLocator()->get('Servicegroup', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Servicegroup);

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
