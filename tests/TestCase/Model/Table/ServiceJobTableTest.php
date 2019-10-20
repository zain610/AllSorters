<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ServiceJobTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ServiceJobTable Test Case
 */
class ServiceJobTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ServiceJobTable
     */
    public $ServiceJob;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ServiceJob',
        'app.Services',
        'app.Image',
        'app.BlogPost',
        'app.BlogPostImage',
        'app.GalleryPage',
        'app.GalleryPageImage',
        'app.ServiceImage',
        'app.Job',
        'app.Contractor',
        'app.JobContractor'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ServiceJob') ? [] : ['className' => ServiceJobTable::class];
        $this->ServiceJob = TableRegistry::get('ServiceJob', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ServiceJob);

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
