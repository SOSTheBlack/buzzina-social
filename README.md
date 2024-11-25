<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Buzzina Social

### Sobre

#### Requerimentos do sistema

-
Docker
4.*

### Instalação

Passos
para
instalar
o
BuzzinaSocial
em
seu
sistema🧑‍💻

```shell
cp .env.example .env


docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php84-composer:latest \
    composer install --ignore-platform-reqs

#Criar alias
alias sail='sh $([ -f sail ] && echo sail || echo vendor/bin/sail)'


docker compose down -v
 
sail build --no-cache
 
sail up --no-cache

sail artisan key:generate

sail yarn


```




