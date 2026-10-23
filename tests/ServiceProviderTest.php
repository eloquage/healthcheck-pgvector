<?php

declare(strict_types=1);

use IllumaLaw\HealthCheckPgvector\HealthcheckPgvectorServiceProvider;
use Illuminate\Support\ServiceProvider;

it('registers the config publish path under the correct tag', function () {
    $provider = app()->getProvider(IllumaLaw\HealthCheckPgvector\HealthcheckPgvectorServiceProvider::class);
    $source = dirname((new ReflectionClass($provider))->getFileName()).'/../config/healthcheck-pgvector.php';

    expect(ServiceProvider::pathsToPublish($provider::class, 'healthcheck-pgvector-config'))
        ->toBe([$source => config_path('healthcheck-pgvector.php')]);
});

it('loads config with the correct default', function () {
    expect(config('healthcheck-pgvector.required'))->toBeFalse();
});
