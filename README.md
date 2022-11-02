<h2>Como rodar </h2>

<h3>Requisitos</h3>
   
   
    * Unbutu 20.4
    * PHP 8 
    * Laravel 9
    * Docker

<h3>Passo a passo</h3>

1. Acesse a pasta do projeto<br>
2. Para instalar o composer dentro da pasta do projeto no termial:
   * Digite **sudo apt-get update**
   * Digite **composer install --ignore-platform-reqs**
   * Digite **sudo apt-get update** novamente.
3. Para adicionar o composer no arquivo de configuração yml:
   * composer:
      image: composer:2.4.2<br>
      volumes:<br>
     - './projeto_portfolio:/app'<br>
     command: **composer install --ignore-platform-reqs**
4. Rode o comando **docker-compose up -d** no terminal: Para startar os containers<br>
5. Acesse no seu navegador a url **localhost:8000**<br>