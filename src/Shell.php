<?php

namespace Zeitpulse\KirbyInteractiveShell;

class Shell
{
    public static function shell($config = [], string $impersonate = '', string $writeExitStatusToFile = ''): \Psy\Shell
    {
        $shell = new \Psy\Shell(new \Psy\Configuration($config));
        $cmds = [
            (new ReloadCommand())
                ->setImpersonate($impersonate)
        ];
        if (!(empty($writeExitStatusToFile))) {
            $cmds[] = (new RestartCommand())->setExitStatusFile($writeExitStatusToFile);
        }
        $shell->addCommands($cmds);
        return $shell;
    }
}
