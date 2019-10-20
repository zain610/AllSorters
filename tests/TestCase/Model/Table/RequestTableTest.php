<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RequestTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RequestTable Test Case
 */
class RequestTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RequestTable
     */
    public $Request;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Request'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Request') ? [] : ['className' => RequestTable::class];
        $this->Request = TableRegistry::get('Request', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Request);

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
