<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Php84\Rector\Param\ExplicitNullableParamTypeRector;
use Rector\PHPUnit\Set\PHPUnitSetList;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/src',
        __DIR__ . '/test',
    ])
    // Modernize syntax up to the minimum supported PHP version (8.1).
    ->withPhpSets(php81: true)
    // PHP 8.4+ deprecates implicit nullable parameters (Type $x = null);
    // the fixed syntax (?Type $x = null) works on all supported versions.
    ->withRules([
        ExplicitNullableParamTypeRector::class,
    ])
    ->withSets([
        PHPUnitSetList::PHPUNIT_50,
        PHPUnitSetList::PHPUNIT_60,
        PHPUnitSetList::PHPUNIT_70,
        PHPUnitSetList::PHPUNIT_80,
        PHPUnitSetList::PHPUNIT_90,
        PHPUnitSetList::PHPUNIT_100,
    ]);
