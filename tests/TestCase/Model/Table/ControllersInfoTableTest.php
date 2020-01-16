<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ControllersInfoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ControllersInfoTable Test Case
 */
class ControllersInfoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ControllersInfoTable
     */
    public $ControllersInfo;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ControllersInfo'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ControllersInfo') ? [] : ['className' => ControllersInfoTable::class];
        $this->ControllersInfo = TableRegistry::getTableLocator()->get('ControllersInfo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ControllersInfo);

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
