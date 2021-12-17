<?php

namespace Zeitpulse;

final class KirbyInteractiveShell
{
    public static function shell($config = [])
    {
        return new \Psy\Shell(new \Psy\Configuration($config));
    }
}
