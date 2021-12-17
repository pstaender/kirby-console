# Kirby Console
## Enables kirby access from the psysh REPL

Install:

```sh
    $ composer require pstaender/kirby-console --dev
```

### Usage

Go to your kirby project, then run:

```sh
    $ ./vendor/bin/kirbyconsole
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

The first argument can be the email of the user you want to work with (is required for permission-depending stuff like editing):

```sh
    $ ./vendor/bin/kirbyconsole admin@server.local
    Psy Shell v0.11.0 (PHP 8.0.13 — cli) by Justin Hileman
    Kirby v3.6.1.1 – admin@server.local
    >>>
```

### License

MIT
