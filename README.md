# WebEgresso
WebEgresso - Sistema de acompanhamento de egressos

## Instalação

- Instale o [Docker Desktop](https://www.docker.com/products/docker-desktop/).
- Crie o arquivo `.env` na raiz do projeto com o conteúdo do arquivo `.env.example`.
- Execute o comando 
```bash
docker-compose up
```
- Acesse a aplicação a partir da URL: [http://localhost:8080](http://localhost:8080)

## Ambiente de desenvolvimento

É recomendado que você utilize o [VSCode](https://code.visualstudio.com/download) e instale a extensão [Laravel Extension Pack](https://marketplace.visualstudio.com/items?itemName=onecentlin.laravel-extension-pack).

Para o banco de dados você pode utilizar qualquer um de sua preferência. Recomenda-se o [DBeaver](https://dbeaver.io/download/).

Utilize as seguintes credenciais:
```bash
host=localhost
port=3306
database=laravel_web
username=root
password=123456
```

Utilize o comando `docker-compose up` para inicializar o projeto. Para acessar o terminal do container principal, execute o comando:
```bash
docker-compose run app bash
```

## Banco de dados

Execute os comandos de migração acessando o `bash` do container `app` (`docker-compose run app bash`).

- Executar migração: 
```bash
php artisan migrate
```
- Reverter migração: 
```bash
php artisan migrate:rollback
```
- Verificar status: 
```bash
php artisan migrate:status
```

### Referências
- [Laravel Migrations](https://laravel.com/docs/10.x/migrations)

## Comandos auxiliares

- Acessar a linha de comando para o container `app`: 
```bash
docker-compose run app bash
```
- Executar testes dentro do container `app`: 
```bash
./vendor/bin/phpunit
```
