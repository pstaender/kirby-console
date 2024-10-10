# Kirby Console
## Your REPL for Kirby CMS projects

Ever wanted to experiment with your Kirby project on the fly, right from the command line? With Kirby Console, you can inspect and alter your project data instantly, no need to query the website!

### Installation

The easiest way to get started is by installing Kirby Console globally with composer:

```sh
$ composer global require pstaender/kirby-console
```

### Usage

Jump into your Kirby project folder and run:

```sh
$ kconsole
```

You’ll be greeted with something like:

```
Psy Shell v0.12.4 (PHP 8.2.22 — cli) by Justin Hileman
Kirby v4.1.0
>>>
```

Work with `kirby()`, `page()` and `site()` as you used to know:

```sh
>>> kirby()->version()
=> "4.1.0"
```

#### Impersonate

Need to work as a specific user? Pass the user’s email as the first argument (handy for permission-restricted tasks like editing):

```sh
$ kconsole kirby
Psy Shell v0.12.4 (PHP 8.2.22 — cli) by Justin Hileman
Kirby v4.1.0 – kirby@getkirby.com
>>> kirby()->user()->email()
=> "kirby@getkirby.com"
```

### Kirby REPL Commands

#### r

Restart or Reload: The handy `r`-alias will use `restart` if available, a `reload` othewise:

```sh
>>> r
Exit:  Restarting...
…
```

#### restart

Restart your Kirby instance after code or content changes with:

```sh
>>> restart
Exit:  Restarting...
Psy Shell v0.12.4 (PHP 8.2.22 — cli) by Justin Hileman
>>>
```

#### reload

Refresh your Kirby instance after content changes with:

```sh
    >>> reload
```

#### help

There are even more psysh build-in command, check out with:

```sh
>>> help
```

### Troubleshooting

Can't get `kconsole` to start (can happen und not-bash-supporting-systems like windows etc)? Try `kirbyconsole` instead.

`kconsole` is a bash script wrapper to allow to restart the whole REPL. ([You can read here why I had to build that workaround](https://github.com/bobthecow/psysh/issues/416)).

### License

MIT
