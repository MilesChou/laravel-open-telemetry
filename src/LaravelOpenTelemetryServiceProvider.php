<?php

namespace MilesChou\LaravelOpenTelemetry;

use MilesChou\LaravelOpenTelemetry\Commands\LaravelOpenTelemetryCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelOpenTelemetryServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-open-telemetry')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-open-telemetry_table')
            ->hasCommand(LaravelOpenTelemetryCommand::class);
    }
}
