<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ServiceTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ServiceTable Test Case
 */
class ServiceTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ServiceTable
     */
    public $Service;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Services',
        'app.Image',
        'app.BlogPost',
        'app.BlogPostImage',
        'app.GalleryPage',
        'app.GalleryPageImage',
        'app.ServiceImage',
        'app.Job',
        'app.ServiceJob'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Services') ? [] : ['className' => ServiceTable::class];
        $this->Service = TableRegistry::get('Services', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Service);

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
