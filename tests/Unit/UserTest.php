<?php

namespace Tests\Unit;

use App\Models\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_register()
    {
        $user = new User();
        $user->name = 'John Doe';
        $user->email = 'JohnDoe@gmail.com';
        $user->password = '123456222';
        $user->password_confirm = '123456222';
        $this->assertEquals('John Doe', $user->name);
        $this->assertEquals('JohnDoe@gmail.com', $user->email);
        $this->assertEquals('123456222', $user->password);
        $this->assertEquals('123456222', $user->password_confirm);
    }

    public function test_login()
    {
        $user = new User();
        $user->email = 'JohnDoe@gmail.com';
        $user->password = '123456222';
        $this->assertEquals('JohnDoe@gmail.com', $user->email);
        $this->assertEquals('123456222', $user->password);
    }
}
