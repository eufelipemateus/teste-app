
# Teste

Este  projeto é um teste técnico como parte de um processo seletivo.

## Como Instalar?

### Clonando

Antes de mais nada precisa fazer o clone deste projeto .

```bash
    git clone https://github.com/eufelipemateus/teste-app.git
```

### Instalando

Agora você precisa build o projeto.

```bash
     docker-compose build     
```

### Configuração

 Depois de instalar o projeto  precisa criar o arquivo .env

```bash
    mv .env.exmple .env
```

Executar o docker

```bash
docker-compose up
```

Gere uma app key

```bash
docker-compose exec laravel.test_tecnico php artisan  key:generate
```

Now você precisa migar o banco de dados

```bash
   docker-compose exec laravel.test_tecnico php artisan migrate
```

## Author

**[Felipe Mateus](https://eufelipemateus.com)** - [eufelipemateus](https://github.com/eufelipemateus)
