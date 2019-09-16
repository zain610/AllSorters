<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ReviewTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ReviewTable Test Case
 */
class ReviewTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ReviewTable
     */
    public $Review;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Review'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Review') ? [] : ['className' => ReviewTable::class];
        $this->Review = TableRegistry::get('Review', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Review);

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
