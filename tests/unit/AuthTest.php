<?php
namespace Tests\Unit;

use CodeIgniter\Test\CIUnitTestCase;
use App\Models\UserModel;

class AuthTest extends CIUnitTestCase
{
    public function testUserRegistration()
    {
        $userModel = new UserModel();

        $data = [
            'username' => 'testuser',
            'email' => 'testuser@example.com',
            'password' => 'password',
            'role' => 'user'
        ];

        $this->assertTrue($userModel->save($data));
    }

    public function testUserLogin()
    {
        $userModel = new UserModel();
        $user = $userModel->where('email', 'testuser@example.com')->first();

        $this->assertNotNull($user);
        $this->assertTrue(password_verify('password', $user['password']));
    }
}
