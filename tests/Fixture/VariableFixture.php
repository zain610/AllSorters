<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VariableFixture
 */
class VariableFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'variable';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'variable_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'variable_key' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'variable_value' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'variable_cid' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'variable_cid__fk' => ['type' => 'index', 'columns' => ['variable_cid'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['variable_id'], 'length' => []],
            'variable_cid__fk' => ['type' => 'foreign', 'columns' => ['variable_cid'], 'references' => ['controllers_info', 'controller_id'], 'update' => 'cascade', 'delete' => 'setNull', 'length' => []],
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
                'variable_id' => 1,
                'variable_key' => 'Lorem ipsum dolor sit amet',
                'variable_value' => 'Lorem ipsum dolor sit amet',
                'variable_cid' => 1
            ],
        ];
        parent::init();
    }
}
