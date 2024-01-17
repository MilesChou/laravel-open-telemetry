<?php

namespace MilesChou\LaravelOpenTelemetry\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MilesChou\LaravelOpenTelemetry\LaravelOpenTelemetry
 */
class LaravelOpenTelemetry extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \MilesChou\LaravelOpenTelemetry\LaravelOpenTelemetry::class;
    }
}
