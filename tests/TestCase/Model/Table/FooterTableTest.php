<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FooterTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FooterTable Test Case
 */
class FooterTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FooterTable
     */
    public $Footer;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Footer'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Footer') ? [] : ['className' => FooterTable::class];
        $this->Footer = TableRegistry::getTableLocator()->get('Footer', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Footer);

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
