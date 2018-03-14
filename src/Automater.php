<?php


namespace jlttt\behat;

use Composer\Script\Event;
use Composer\Installer\PackageEvent;


class Automater
{
    public static function postPackageInstall(PackageEvent $event)
    {
        $installedPackage = $event->getOperation()->getPackage();
        var_dump($installedPackage);
    }
}