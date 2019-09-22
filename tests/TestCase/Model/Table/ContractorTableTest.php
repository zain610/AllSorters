<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContractorTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContractorTable Test Case
 */
class ContractorTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ContractorTable
     */
    public $Contractor;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Contractor',
        'app.Job',
        'app.JobContractor',
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
        $config = TableRegistry::exists('Contractor') ? [] : ['className' => ContractorTable::class];
        $this->Contractor = TableRegistry::get('Contractor', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Contractor);

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
