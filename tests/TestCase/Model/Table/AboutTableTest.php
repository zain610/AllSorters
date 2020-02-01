<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AboutTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AboutTable Test Case
 */
class AboutTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AboutTable
     */
    public $About;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.About'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('About') ? [] : ['className' => AboutTable::class];
        $this->About = TableRegistry::getTableLocator()->get('About', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->About);

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
