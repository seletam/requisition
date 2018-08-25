<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FinancialYearTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FinancialYearTable Test Case
 */
class FinancialYearTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FinancialYearTable
     */
    public $FinancialYear;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.financial_year'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('FinancialYear') ? [] : ['className' => FinancialYearTable::class];
        $this->FinancialYear = TableRegistry::getTableLocator()->get('FinancialYear', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FinancialYear);

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
