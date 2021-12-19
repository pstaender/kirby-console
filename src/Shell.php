<?php

namespace Zeitpulse\KirbyInteractiveShell;

class Shell
{
    public static function shell($config = [], string $impersonate = '', string $writeExitStatusToFile = ''): \Psy\Shell
    {
        $shell = new \Psy\Shell(new \Psy\Configuration($config));
        $restartCommandIsAvailable = !(empty($writeExitStatusToFile));

        $reloadCommand = (new ReloadCommand())->setImpersonate($impersonate);

        // `r` as alias for reload or restart (for restart if existing)
        if ($restartCommandIsAvailable) {
            $cmds = [
                $reloadCommand,
                (new RestartCommand())->setExitStatusFile($writeExitStatusToFile)->setAliases(['r']),
            ];
        } else {
            $cmds = [
                $reloadCommand->setAliases(['r']),
            ];
        }

        $shell->addCommands($cmds);
        return $shell;
    }
}
