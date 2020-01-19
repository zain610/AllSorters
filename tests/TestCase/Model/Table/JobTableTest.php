<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\JobTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\JobTable Test Case
 */
class JobTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\JobTable
     */
    public $Job;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Job',
        'app.Service'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Job') ? [] : ['className' => JobTable::class];
        $this->Job = TableRegistry::getTableLocator()->get('Job', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Job);

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
