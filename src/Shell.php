<?php

namespace Zeitpulse\KirbyInteractiveShell;

class Shell
{
    public static function shell($config = [], string $impersonate = ''): \Psy\Shell
    {
        $shell = new \Psy\Shell(new \Psy\Configuration($config));
        $shell->addCommands([
            (new ReloadCommand())->setImpersonate($impersonate),
        ]);
        return $shell;
    }
}
