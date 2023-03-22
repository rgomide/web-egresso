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

É recomendado que você utilize o [VSCode](https://code.visualstudio.com/download) e instale as extensões:
- [Laravel Extension Pack](https://marketplace.visualstudio.com/items?itemName=onecentlin.laravel-extension-pack)
- [tighten-lint](https://marketplace.visualstudio.com/items?itemName=d9705996.tighten-lint)
- [PHP formater](https://marketplace.visualstudio.com/items?itemName=DEVSENSE.phptools-vscode)

Para o banco de dados você pode utilizar qualquer client de sua preferência. Recomenda-se o [DBeaver](https://dbeaver.io/download/).

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

## Linter

Este projeto utiliza o [tlint](https://github.com/tighten/tlint) para adotar os padrões de formatação e estrutura de código PHP + Laravel.

Comandos do tlint para executar no `bash` do container `app`:
- Formatar código:
```bash
~/.composer/vendor/tightenco/tlint/bin/tlint format
```

## Banco de dados

Execute os comandos de migração acessando o `bash` do container `app`.

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

## Testes

- Executar testes dentro do container `app`: 
```bash
./vendor/bin/phpunit
```

## Referências
- [Laravel Migrations](https://laravel.com/docs/10.x/migrations)
- [Tailwind - Documentation](https://tailwindcss.com/docs/installation)
- [DBeaver](https://dbeaver.io/download/)
