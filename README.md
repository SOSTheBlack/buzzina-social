<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Buzzina Social

### Sobre

#### Requerimentos do sistema

- Docker 4.*

### Instalação

Passos para instalar o BuzzinaSocial em seu sistema🧑‍💻

```shell

#Criar alias
alias sail='sh $([ -f sail ] && echo sail || echo vendor/bin/sail)'


cp .env.example .env

docker compose down -v
 
sail build --no-cache
 
sail up

sail artisan key:generate



```




