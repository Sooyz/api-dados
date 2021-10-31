# api-dados
Api para recuperação de dados


# Comandos para execução

1. composer install
2. cp .env.example .env
3. php artisan key:generate
4. configurar variaveis .env para conexao com o banco de dados
5. php  artisan migrate
6. php artisan db:seed --class=MatriculaSeeder
7. php artisan db:seed --class=DetalleSeeder
8. php artisan db:seed --class=TotalSeeder
9. php artisan serve (localhost:8080)
