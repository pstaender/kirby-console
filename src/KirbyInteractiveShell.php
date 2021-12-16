<?php

namespace Zeitpulse;

use Psy\Configuration;
use Psy\Shell;

class KirbyInteractiveShell
{
    private static $shell_config = [];

    private $shell = null;

    public function run()
    {
        return $this->shell()->run();
    }

    private function shell()
    {
        $this->shell = new Shell($this->shellConfig());
        return $this->shell;
    }

    private function shellConfig()
    {
        $shellConfig = self::$shell_config;
        $shellConfig['startupMessage'] = "Kirby v".kirby()->version();
        $config = new Configuration($shellConfig);
        return $config;
    }

}