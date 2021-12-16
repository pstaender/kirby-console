# Kirby Console
## Enables kirby access from the psysh REPL

Install:

```sh
    $  composer require-dev pstaender/kirby-console
```

### Usage

Go to your kirby project, then run:

```sh
    $ ./vendor/bin/kirbyconsole
    Psy Shell v0.11.0 (PHP 8.0.13 — cli) by Justin Hileman
    Kirby v3.6.1.1
    >>>
```

To work with kirby, just use the `kirby()` global:

```sh
    >>> kirby()->version()
    => "3.6.1.1"
```

### License

MIT