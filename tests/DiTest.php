<?php declare(strict_types=1);

use ApiClients\Tools\TestUtilities\TestCase;
use React\EventLoop\LoopInterface;

/**
 * @internal
 */
final class DiTest extends TestCase
{
    public function testLoop(): void
    {
        $root = \dirname(__DIR__);
        $path = $root . DIRECTORY_SEPARATOR . 'etc' . DIRECTORY_SEPARATOR . 'di' . DIRECTORY_SEPARATOR . 'event-loop.php';
        $loop = (require $path)[LoopInterface::class]();

        self::assertInstanceOf(LoopInterface::class, $loop);
    }
}
