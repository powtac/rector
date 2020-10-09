<?php

declare(strict_types=1);

namespace Rector\DowngradePhp73\Tests\Rector\List_\DowngradeListReferenceAssignmentRector;

use Iterator;
use Rector\Core\Testing\PHPUnit\AbstractRectorTestCase;
use Rector\Core\ValueObject\PhpVersionFeature;
use Rector\DowngradePhp73\Rector\List_\DowngradeListReferenceAssignmentRector;
use Symplify\SmartFileSystem\SmartFileInfo;

final class DowngradeListReferenceAssignmentRectorTest extends AbstractRectorTestCase
{
    /**
     * @requires PHP 7.3
     * @dataProvider provideData()
     */
    public function test(SmartFileInfo $fileInfo): void
    {
        $this->doTestFileInfo($fileInfo);
    }

    public function provideData(): Iterator
    {
        return $this->yieldFilesFromDirectory(__DIR__ . '/Fixture');
    }

    protected function getRectorClass(): string
    {
        return DowngradeListReferenceAssignmentRector::class;
    }

    protected function getPhpVersion(): string
    {
        return PhpVersionFeature::BEFORE_LIST_REFERENCE_ASSIGNMENT;
    }
}