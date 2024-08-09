<?php

declare(strict_types=1);

namespace Gember\FileFinderSymfony\Test;

use Gember\FileFinderSymfony\SymfonyFinder;
use Gember\FileFinderSymfony\SymfonyFinderFactory;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 */
final class SymfonyFinderTest extends TestCase
{
    private SymfonyFinder $finder;

    protected function setUp(): void
    {
        parent::setUp();

        $this->finder = new SymfonyFinder(new SymfonyFinderFactory());
    }

    #[Test]
    public function itShouldReturnAllFilesInPath(): void
    {
        $files = $this->finder->getFiles(__DIR__ . '/TestDoubles');

        self::assertSame([
            __DIR__ . '/TestDoubles/TestClass.php',
            __DIR__ . '/TestDoubles/Subfolder/AnotherClass.php',
            __DIR__ . '/TestDoubles/Subfolder/TestClass.php',
        ], $files);
    }
}
