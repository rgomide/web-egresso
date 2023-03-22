# WebEgresso
WebEgresso - Sistema de acompanhamento de egressos

## Instalação

- Instale o [Docker Desktop](https://www.docker.com/products/docker-desktop/).
- Crie o arquivo `.env` na raiz do projeto com o conteúdo do arquivo `.env.example`.
- Execute o comando `docker-compose up`.

## Banco de dados

Execute os comandos de migração acessando o `bash` do container `app` (`docker-compose run app bash`).

- Executar migração: `php artisan migrate`
- Reverter migração: `php artisan migrate:rollback`
- Verificar status: `php artisan migrate:status`

### Referências
- [Laravel Migrations](https://laravel.com/docs/10.x/migrations)

## Comandos auxiliares

- Acessar a linha de comando para o container `app`: `docker-compose run app bash`.
- Executar testes dentro do container `app`: `./vendor/bin/phpunit`
