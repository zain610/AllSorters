<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ServiceImageFixture
 *
 */
class ServiceImageFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'service_image';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'Service_image_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'Image_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Service_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'Service_Image_image_Image_id_fk' => ['type' => 'index', 'columns' => ['Image_id'], 'length' => []],
            'Service_Image_service_Serv_id_fk' => ['type' => 'index', 'columns' => ['Service_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['Service_image_id'], 'length' => []],
            'Service_Image_pk_2' => ['type' => 'unique', 'columns' => ['Service_image_id', 'Service_id'], 'length' => []],
            'Service_Image_image_Image_id_fk' => ['type' => 'foreign', 'columns' => ['Image_id'], 'references' => ['image', 'Image_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'Service_Image_service_Serv_id_fk' => ['type' => 'foreign', 'columns' => ['Service_id'], 'references' => ['service', 'Service_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'Service_image_id' => 1,
            'Image_id' => 1,
            'Service_id' => 1
        ],
    ];
}
