# api-dados
Api para recuperação de dados


# Comandos para execução

1. composer install
2. cp .env.example .env
3. configurar variaveis .env para conexao com o banco de dados
4. php  artisan migrate
5. php artisan db:seed -class=MatriculaSeeder
6. php artisan db:seed -class=DetalleSeeder
7. php artisan db:seed -class=TotalSeeder
8. php artisan serve (localhost:8080)
