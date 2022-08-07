<?php
declare(strict_types=1);

namespace Model;

use Jakeg\PhpJobSearchPortal\Model\Email;
use PHPUnit\Framework\TestCase;
require_once 'src/Model/Email.php';

final class EmailTest extends TestCase {

    public function testCanBeCreatedFromValidEmailAddress()
    {
        $this->assertInstanceOf(Email::class, Email::fromString('user@example.com'));
    }

    public function testCannotBeCreatedFromInvalidEmailAddress()
    {
        $this->expectException(InvalidArgumentException::class);
        Email::fromString('Invalid');
    }

    public function testCanBeUsedAsString(): void
    {
        $this->assertEquals('user@example.com', Email::fromString('user@example.com'));
    }
}
