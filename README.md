# Kirby Console
## Enables kirby access from the psysh REPL

### Installation

```sh
$ composer require pstaender/kirby-console --dev
```

To install project-independent:

```sh
$ composer global require pstaender/kirby-console
```

### Usage

Go to your kirby project, then run:

```sh
$ ./vendor/bin/kconsole
Psy Shell v0.11.0 (PHP 8.0.13 — cli) by Justin Hileman
Kirby v3.6.1.1
>>>
```

To work with kirby:

```sh
>>> kirby()->version()
=> "3.6.1.1"
```

#### Impersonate

The first argument can be the email of the user you want to work with (required for permission-depending stuff like editing):

```sh
$ ./vendor/bin/kirbyconsole kirby
Psy Shell v0.11.0 (PHP 8.0.13 — cli) by Justin Hileman
Kirby v3.6.1.1 – kirby@getkirby.com
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
Psy Shell v0.11.0 (PHP 8.0.13 — cli) by Justin Hileman
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

If `kconsole` can not be started, try `kirby-console` instead. Or - if possible - use a bash compatible cli.

`kconsole` is a bash scripts that allows to restart the whole REPL. The php script requires a bash-script-workaround to make a restart possible ([read here why](https://github.com/bobthecow/psysh/issues/416)).

### License

MIT
