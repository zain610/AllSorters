<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GalleryPageTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GalleryPageTable Test Case
 */
class GalleryPageTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GalleryPageTable
     */
    public $GalleryPage;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.GalleryPage',
        'app.Image'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('GalleryPage') ? [] : ['className' => GalleryPageTable::class];
        $this->GalleryPage = TableRegistry::getTableLocator()->get('GalleryPage', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GalleryPage);

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
