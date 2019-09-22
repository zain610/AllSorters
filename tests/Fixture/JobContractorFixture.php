<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * JobContractorFixture
 *
 */
class JobContractorFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'job_contractor';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'Job_Contractor_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'Job_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Contractor_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'Job_Contractor_Contractor_id_fk' => ['type' => 'index', 'columns' => ['Contractor_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['Job_Contractor_id'], 'length' => []],
            'job_contractor_pk_2' => ['type' => 'unique', 'columns' => ['Job_id', 'Contractor_id'], 'length' => []],
            'Job_Contractor_Contractor_id_fk' => ['type' => 'foreign', 'columns' => ['Contractor_id'], 'references' => ['contractor', 'Contractor_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'Job_Contractor_Job_id_fk' => ['type' => 'foreign', 'columns' => ['Job_id'], 'references' => ['job', 'Job_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'Job_Contractor_id' => 1,
            'Job_id' => 1,
            'Contractor_id' => 1
        ],
    ];
}
