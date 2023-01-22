

### Passo a passo
Clone Repositório
```sh
git clone https://github.com/GabrielMBoeira/setup-laravel-docker-mysql.git my-project
```

Acesse o diretório criado
```sh
cd my-project/
```

Remova o versionamento
```sh
rm -rf .git/
```

Crie o Arquivo .env
```sh
cp .env.example .env
```

Atualize as variáveis de ambiente do arquivo .env
```dosini
APP_NAME="nome_que_desejar_app"
APP_URL=http://localhost:8989

DB_CONNECTION=mysql
DB_HOST=mysql (informar o nome do container mysql)
DB_PORT=3306
DB_DATABASE=nome_que_desejar_db
DB_USERNAME=root
DB_PASSWORD=root

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis

REDIS_HOST=redis (informar o nome do container redis)
REDIS_PASSWORD=null
REDIS_PORT=6379
```

Abra o terminal (WSL2)
```sh
Rode o docker dentro do terminal WSL2
```

Somente rode este comando caso não tenha acesso docker ubuntu
```sh
sudo chmod 666 /var/run/docker.sock
```

Suba os containers do projeto
```sh
docker-compose up -d
```

Acesse o container app com o bash
```sh
docker-compose exec app bash
```

Instale as dependências do projeto
```sh
composer install
```

Gere a key do projeto Laravel
```sh
php artisan key:generate
```

Acesse o projeto
[http://localhost:8989](http://localhost:8989)
