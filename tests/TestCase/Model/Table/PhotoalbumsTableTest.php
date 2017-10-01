<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PhotoalbumsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PhotoalbumsTable Test Case
 */
class PhotoalbumsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PhotoalbumsTable
     */
    public $Photoalbums;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.photoalbums'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Photoalbums') ? [] : ['className' => PhotoalbumsTable::class];
        $this->Photoalbums = TableRegistry::get('Photoalbums', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Photoalbums);

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
