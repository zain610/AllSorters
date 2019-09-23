<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BlogPostTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BlogPostTable Test Case
 */
class BlogPostTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BlogPostTable
     */
    public $BlogPost;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.BlogPost',
        'app.Image',
        'app.BlogPostImage',
        'app.GalleryPage',
        'app.GalleryPageImage',
        'app.Service',
        'app.ServiceImage',
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
        $config = TableRegistry::exists('BlogPost') ? [] : ['className' => BlogPostTable::class];
        $this->BlogPost = TableRegistry::get('BlogPost', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BlogPost);

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
