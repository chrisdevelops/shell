# Shell
A simple web shell.

1. Install dependencies
```sh
composer install
```

2. Copy `.env.example` and set environment variables:
```sh
cp .env.example .emv
```

3. Create terminal buffer:
```sh
mkdir data && touch data/terminal.json
```

4. Serve:
```sh
php -S 127.0.0.1:8888
```
