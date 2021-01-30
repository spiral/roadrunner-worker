<?php

/**
 * This file is part of RoadRunner package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Spiral\RoadRunner\Installer\Archive;

interface ArchiveInterface
{
    /**
     * @param iterable<string, string> $mappings
     * @return iterable<\SplFileInfo>
     */
    public function extract(iterable $mappings): iterable;
}