<?php

namespace Tommica\SimuMail;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Tommica\SimuMail\Commands\SimuMailCommand;

class SimuMailServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('simumail')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_simumail_table')
            ->hasCommand(SimuMailCommand::class);
    }
}
