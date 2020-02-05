<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * JobFixture
 */
class JobFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'job';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'job_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'price' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => '0', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'job_status' => ['type' => 'tinyinteger', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
        'duration' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'service_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Commence_Date' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'job_detail' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'job_service_Service_id_fk' => ['type' => 'index', 'columns' => ['service_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['job_id'], 'length' => []],
            'job_service_Service_id_fk' => ['type' => 'foreign', 'columns' => ['service_id'], 'references' => ['service', 'Service_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'job_id' => 1,
                'price' => 'Lorem ipsum dolor sit amet',
                'job_status' => 1,
                'duration' => '2020-01-28',
                'service_id' => 1,
                'Commence_Date' => '2020-01-28',
                'job_detail' => 'Lorem ipsum dolor sit amet'
            ],
        ];
        parent::init();
    }
}
