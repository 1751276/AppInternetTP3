<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ElectronicsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ElectronicsTable Test Case
 */
class ElectronicsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ElectronicsTable
     */
    public $Electronics;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Electronics'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Electronics') ? [] : ['className' => ElectronicsTable::class];
        $this->Electronics = TableRegistry::getTableLocator()->get('Electronics', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Electronics);

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
