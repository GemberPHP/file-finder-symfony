<?php

declare(strict_types=1);

namespace Gember\FileFinderSymfony;

use Gember\EventSourcing\Util\File\Finder\Finder;
use SplFileInfo;
use Override;

final readonly class SymfonyFinder implements Finder
{
    public function __construct(
        private SymfonyFinderFactory $factory,
    ) {}

    #[Override]
    public function getFiles(string $path): array
    {
        $finder = $this->factory->createFinder();

        $finder->files()->in($path);

        return array_values(array_map(
            fn(SplFileInfo $file) => $file->getPathname(),
            [...$finder],
        ));
    }
}
