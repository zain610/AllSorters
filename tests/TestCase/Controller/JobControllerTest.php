<?php
namespace App\Test\TestCase\Controller;

use App\Controller\JobController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\JobController Test Case
 */
class JobControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Job',
        'app.Contractor',
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
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
