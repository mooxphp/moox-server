<?php

declare(strict_types=1);

namespace Moox\ForgeServer;

use Moox\ForgeServer\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ForgeServerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('forge-servers')
            ->hasConfigFile()
            ->hasViews()
            ->hasTranslations()
            ->hasMigrations(['create_forge_servers_table'])
            ->hasCommand(InstallCommand::class);
    }
}
