<h2>Como rodar </h2>

<h3>Requisitos</h3>
   
   
    * Unbutu 20.4
    * PHP 8 
    * Laravel 9
    * Docker

<h3>Passo a passo</h3>

1. Acesse a pasta do projeto<br>
2. Criar uma copia do aquivo .env.example e colocar o nome de .env<br>
3. No terminal dentro da pasta projeto_portfolio digite php artisan key:generate<br>
4. Criar uma copia do arquivo docker-compose.override.example.yml e colocar o nome de docker-compose.override.yml<br>
6. Criar dentro das pastas storage/framework uma pasta com o nome de sessions<br>
5. Rode o comando **docker-compose up -d** no terminal: Para startar os containers<br>
6. Acesse no seu navegador a url **localhost:8000**<br>