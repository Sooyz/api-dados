# api-dados
Api para recuperação de dados


# Comandos para execução

1. composer install
2. cp .env.example .env
3. php artisan key:generate
4. Adicionar SERVER_PORT=8080 no arquivo .env 
5. configurar variaveis .env para conexao com o banco de dados
6. php  artisan migrate
7. php artisan db:seed --class=MatriculaSeeder
8. php artisan db:seed --class=DetalleSeeder
9. php artisan db:seed --class=TotalSeeder
10. php artisan serve (localhost:8080)
