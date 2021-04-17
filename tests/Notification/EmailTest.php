<?php declare(strict_types=1);

namespace WildBlog\Notification;
use PHPUnit\Framework\TestCase;
use \InvalidArgumentException;

final class EmailTest extends TestCase
{   public function testCanBeCreatedFromValidEmailAddress(): void
    {
        $this->assertInstanceOf(Email::class, Email::fromString('user@example.com'));
    }
    public function testCannotBeCreatedFromInvalidEmailAddress(): void
    {
        $this->expectException(InvalidArgumentException::class);
        Email::fromString('john');
    }
    public function testCanBeUsedAsString(): void
    {
        $this->assertEquals('john@hotmail.com', Email::fromString('john@hotmail.com'));
    }
}