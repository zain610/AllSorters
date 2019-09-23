<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\JobContractorTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\JobContractorTable Test Case
 */
class JobContractorTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\JobContractorTable
     */
    public $JobContractor;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.JobContractor',
        'app.Job',
        'app.Contractor',
        'app.Service',
        'app.Image',
        'app.BlogPost',
        'app.BlogPostImage',
        'app.GalleryPage',
        'app.GalleryPageImage',
        'app.ServiceImage',
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
        $config = TableRegistry::exists('JobContractor') ? [] : ['className' => JobContractorTable::class];
        $this->JobContractor = TableRegistry::get('JobContractor', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->JobContractor);

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
