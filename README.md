## Clone o projeto
git clone https://github.com/Ryan1590/CrudLivros.git

## Acesse o projeto
cd seuprojeto

## Instale as dependências e o framework
composer install --no-scripts

## Copie o arquivo .env.example
cp .env.example .env

## Crie uma nova chave para a aplicação
php artisan key:generate

## Em seguida você deve configurar o arquivo .env e rodar as migrations com:

php artisan migrate --seed

## Para instalar a node modules

npm install

## Para statar o servidor 

npm run dev
