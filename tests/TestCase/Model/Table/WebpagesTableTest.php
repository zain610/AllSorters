<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WebpagesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WebpagesTable Test Case
 */
class WebpagesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\WebpagesTable
     */
    public $Webpages;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Webpages'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Webpages') ? [] : ['className' => WebpagesTable::class];
        $this->Webpages = TableRegistry::get('Webpages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Webpages);

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
