# Kirby Console
## REPL for Kirby CMS

### Installation

```sh
$ composer require pstaender/kirby-console
```

To install project-independent:

```sh
$ composer global require pstaender/kirby-console
```

### Usage

Go to your kirby project, then run:

```sh
$ ./vendor/bin/kconsole
Psy Shell v0.12.4 (PHP 8.2.22 — cli) by Justin Hileman
Kirby v4.1.0
>>>
```

Or if installed via `global require` just with:

```sh
$ kconsole
```

To work with kirby:

```sh
>>> kirby()->version()
=> "4.1.0"
```

#### Impersonate

The first argument can be the email of the user you want to work with (required for permission-depending stuff like editing):

```sh
$ kconsole kirby
Psy Shell v0.12.4 (PHP 8.2.22 — cli) by Justin Hileman
Kirby v4.1.0 – kirby@getkirby.com
>>> kirby()->user()->email()
=> "kirby@getkirby.com"
```

#### Reload

Any content change on kirby requires reloading. The kirby instance can be reloaded with the `reload` command:

```sh
    >>> reload
```

#### Restart

If you want to test out instantly code changes you made use `restart` to restart the REPL:

```sh
>>> restart
Exit:  Restarting...
Psy Shell v0.12.4 (PHP 8.2.22 — cli) by Justin Hileman
>>>
```

#### r : Restart or Reload

Or just use the lazy `r`-alias. If `restart` is available a restart will be triggered, else a `reload`:

```sh
>>> r
Exit:  Restarting...
…
```

To check out other helpful commands the psysh REPL provides:

```sh
>>> help
```

### Troubleshooting

If `kconsole` can not be started, try `kirbyconsole` instead. Or - if possible - use a bash compatible cli.

`kconsole` is a bash scripts that allows to restart the whole REPL. The php script requires a bash-script-workaround to make a restart possible ([read here why](https://github.com/bobthecow/psysh/issues/416)).

### License

MIT
