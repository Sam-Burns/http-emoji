<?php
namespace SamBurns\HttpEmoji;

use SamBurns\HttpEmoji;
use PHPUnit\Framework\TestCase;

class HttpEmojiTest extends TestCase
{
    public function testItCanReturnAStatusCode()
    {
        $statusCode = HttpEmoji::😱;
        $this->assertEquals(500, $statusCode);
    }
}

