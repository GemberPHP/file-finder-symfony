<?php

declare(strict_types=1);

namespace Gember\FileFinderSymfony;

use Symfony\Component\Finder\Finder;

final readonly class SymfonyFinderFactory
{
    public function createFinder(): Finder
    {
        return new Finder();
    }
}
