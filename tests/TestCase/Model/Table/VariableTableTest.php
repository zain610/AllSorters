<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VariableTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VariableTable Test Case
 */
class VariableTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\VariableTable
     */
    public $Variable;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Variable',
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
        $config = TableRegistry::getTableLocator()->exists('Variable') ? [] : ['className' => VariableTable::class];
        $this->Variable = TableRegistry::getTableLocator()->get('Variable', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Variable);

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
