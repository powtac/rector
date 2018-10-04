<?php declare(strict_types=1);

namespace Rector\Php\Tests\Rector\PublicConstantVisibilityRector\Wrong;

final class SomeClass
{
    const VALUE = 'hey';

    public const ALREADY = 'yep';

    private const HEARTH = 'bum';
}
