# ModelPro

Sistema web que implementa de forma digital e dinâmica o controle de projetos criado pela Diretoria de Projetos no semestre de 2018.1, propondo organizar os registros de projetos da CoDiJr de forma autônoma e simples.

## Ambiente
Antes de instalar o sistema, é necessário um ambiente com Apache, MySQL e PHP >5.x instalados.

## Instruções
1.  Instale o [Composer](https://getcomposer.org/), seguindo as instruções do site.
2.  Navegue para o diretório do projeto no terminal e execute o comando abaixo.
    ```php
    composer install
    ```
3.  Agora deve estar tudo pronto. O Composer irá utilizar os dados do ``composer.json`` para instalar as dependências necessárias. Basta iniciar o servidor e banco de dados. Os dados de acesso podem ser modificados no arquivo ``app.json``. 

    Também estão disponíveis na pasta **db** os arquivos de configuração do banco de dados. Basta importar o ``modelpro.sql`` para criar as tabelas e o ``clients.sql``, ``projects.sql`` e ``users.sql`` para preenchê-las com informações de exemplo.
