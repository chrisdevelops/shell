# Shell
A simple web shell.

Install dependencies
```sh
composer install
```

Copy `.env.example` and set environment variables:
```sh
cp .env.example .emv
```

For example:

```sh
APP_NAME="Shell" # Anything you want
APP_THEME="default" # or darcula, or make your own in templates/

ENABLE_SUDO=true
SUDO_PASSWORD="MySup3rSecur3Sud0pa55!"
```


Create terminal buffer:
```sh
mkdir data && touch data/terminal.json
```

Serve:
```sh
php -S 127.0.0.1:8888
```
