<?php

namespace Zeitpulse\KirbyInteractiveShell;

use Psy\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ReloadCommand extends Command
{
    protected static $defaultName = 'reload';

    private string $impersonate = '';

    public function setImpersonate(string $email)
    {
        $this->impersonate = $email;
        return $this;
    }

    public function getName(): ?string
    {
        return self::$defaultName;
    }

    protected function configure()
    {
        $this->setDescription('Reloads the kirby instance');
    }

    protected function execute(
        InputInterface $input,
        OutputInterface $output
    ): int {
        $kirby = new \Kirby();
        if (!empty($this->impersonate)) {
            $kirby->impersonate($this->impersonate);
        }
        echo "reloaded kirby()\n";
        return 0;
    }
}
