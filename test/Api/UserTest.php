<?php

declare(strict_types=1);

namespace Fandom\Interview\Api;

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testUserIsBatman(): void
    {
        $user = new User("batman");
        $this->assertInstanceOf(User::class, $user);
        $this->assertEquals("batman", $user->getName());
    }
}