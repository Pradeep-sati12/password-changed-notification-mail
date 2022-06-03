<?php

namespace Pradeep-sati12\PasswordChangedNotificationMail;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Pradeep-sati12\PasswordChangedNotificationMail\Commands\PasswordChangedNotificationMailCommand;

class PasswordChangedNotificationMailServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('password-changed-notification-mail')
            ->hasViews();
    }
}
