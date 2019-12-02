<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipsTable Test Case
 */
class TipsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TipsTable
     */
    public $Tips;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Tips'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Tips') ? [] : ['className' => TipsTable::class];
        $this->Tips = TableRegistry::get('Tips', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tips);

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
