<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsersTable Test Case
 */
class UsersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UsersTable
     */
    protected $Users;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Users') ? [] : ['className' => UsersTable::class];
        $this->Users = TableRegistry::getTableLocator()->get('Users', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Users);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    // public function testInitialize(): void
    // {
    //     $this->markTestIncomplete('Not implemented yet.');
    // }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    // public function testValidationDefault(): void
    // {
    //     $this->markTestIncomplete('Not implemented yet.');
    // }

    // /**
    //  * Test buildRules method
    //  *
    //  * @return void
    //  */
    // public function testBuildRules(): void
    // {
    //     $this->markTestIncomplete('Not implemented yet.');
    // }

    public function testUsers()
    {
        $user = $this->Users->newEntity([
            'username' => 'testuser',
            'email' => 'invalidemail',
            'password' => 'password'
        ]);
        
        $errors = $user->getErrors();
        $this->assertArrayHasKey('email', $errors);
        
    }
    //Verificar se há usuários cadastrados 
    public function testFindAll()
{
    $query = $this->Users->find();
    $this->assertGreaterThan(0, $query->count());
}

public function testPasswordExists()
{
    $users = $this->Users->find()->toArray();

    foreach ($users as $user) {
        $this->assertNotEmpty($user['password'], 'Usuário sem senha: ' . $user['id']);
    }
}

}