<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ServiceJobFixture
 *
 */
class ServiceJobFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'service_job';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'Service_Job_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'Service_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Job_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'Service_Job_Job_fk' => ['type' => 'index', 'columns' => ['Job_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['Service_Job_id'], 'length' => []],
            'Service_Job_pk_2' => ['type' => 'unique', 'columns' => ['Service_id', 'Job_id'], 'length' => []],
            'Service_Job_Job_fk' => ['type' => 'foreign', 'columns' => ['Job_id'], 'references' => ['job', 'Job_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'Service_Job_Service_fk' => ['type' => 'foreign', 'columns' => ['Service_id'], 'references' => ['service', 'Service_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'Service_Job_id' => 1,
            'Service_id' => 1,
            'Job_id' => 1
        ],
    ];
}
