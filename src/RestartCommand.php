<?php

namespace Zeitpulse\KirbyInteractiveShell;

use Psy\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class RestartCommand extends Command
{
    protected static $defaultName = 'restart';

    private string $exitStatusFile = '';

    public function setExitStatusFile(string $exitStatusFile)
    {
        $this->exitStatusFile = $exitStatusFile;
        return $this;
    }

    protected function configure()
    {
        $this->setDescription(
            'Restarts the REPL, i.e. reloads all files (php etc)'
        );
    }

    public function getName(): ?string
    {
        return self::$defaultName;
    }

    protected function execute(
        InputInterface $input,
        OutputInterface $output
    ): int {
        if (!empty($this->exitStatusFile)) {
            file_put_contents($this->exitStatusFile, 'restarting');
        }
        throw new \Psy\Exception\BreakException('Restarting REPL');
    }
}
