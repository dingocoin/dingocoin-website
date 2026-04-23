<?php

declare(strict_types=1);

/**
 * Load ecosystem stats for index.php from api/data/eco.js (production) or fixture.
 *
 * Environment:
 * - DINGOECO_USE_FIXTURES=1|true|yes — force api/data/eco.fixture.js
 * - Otherwise — use api/data/eco.js if readable; else fixture (no keys required).
 */
function dingocoin_load_eco_data(): array
{
    $baseDir = dirname(__DIR__);
    $realPath = $baseDir . '/data/eco.js';
    $fixturePath = $baseDir . '/data/eco.fixture.js';

    $forceFixture = dingocoin_env_flag('DINGOECO_USE_FIXTURES');
    $path = $forceFixture || !is_readable($realPath) ? $fixturePath : $realPath;

    if (!is_readable($path)) {
        throw new RuntimeException('Eco data missing: neither eco.js nor eco.fixture.js is readable at ' . $path);
    }

    $js = file_get_contents($path);
    if ($js === false) {
        throw new RuntimeException('Failed to read eco data file: ' . $path);
    }

    if (!preg_match('/const ecoData = (\{[^;]+\});/', $js, $matches)) {
        throw new RuntimeException('Could not parse ecoData from: ' . $path);
    }

    $jsonStr = str_replace('\"', '"', str_replace('\\/', '/', $matches[1]));
    $data = json_decode($jsonStr, true);
    if (!is_array($data)) {
        throw new RuntimeException('Invalid JSON in eco data file: ' . $path);
    }

    return $data;
}

function dingocoin_env_flag(string $name): bool
{
    $v = getenv($name);
    if ($v === false || $v === '') {
        return false;
    }
    $v = strtolower(trim((string) $v));
    return in_array($v, ['1', 'true', 'yes', 'on'], true);
}
