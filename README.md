<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Buzzina Social

### Sobre

#### Requerimentos do sistema

- Docker 4.*

### Instalação

Passos para instalar o BuzzinaSocial em seu sistema🧑‍💻

```shell
cp .env.example .env
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php84-composer:latest \
    composer install --ignore-platform-reqs
```

```shell
vendor/bin/sail build --no-cache
vendor/bin/sail up --build
```

```shell
vendor/bin/sail artisan key:generate
vendor/bin/sail artisan migrate --seed
vendor/bin/sail artisan storage:link
```

```shell
vendor/bin/sail yarn
vendor/bin/sail yarn dev
```

```shell
alias sail='sh $([ -f sail ] && echo sail || echo vendor/bin/sail)'
```
