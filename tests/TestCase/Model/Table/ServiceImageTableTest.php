<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ServiceImageTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ServiceImageTable Test Case
 */
class ServiceImageTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ServiceImageTable
     */
    public $ServiceImage;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ServiceImage',
        'app.Image',
        'app.BlogPost',
        'app.BlogPostImage',
        'app.GalleryPage',
        'app.GalleryPageImage',
        'app.Service',
        'app.Job',
        'app.Contractor',
        'app.JobContractor',
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
        $config = TableRegistry::exists('ServiceImage') ? [] : ['className' => ServiceImageTable::class];
        $this->ServiceImage = TableRegistry::get('ServiceImage', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ServiceImage);

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
