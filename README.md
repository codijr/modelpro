# ModelPro

Sistema web que implementa de forma digital e dinâmica o controle de projetos criado pela Diretoria de Projetos no semestre de 2018.1, propondo organizar os registros de projetos da CoDiJr de forma autônoma e simples.

## Instalação
Antes de instalar o sistema, é necessário um ambiente com Apache, MySQL e PHP >5.x instalados.

1.  Instale o [Composer](https://getcomposer.org/), seguindo as instruções do site.
2.  Instale o [Twig](), versão *1.36.0*, através do composer. Navegue para o diretório do projeto no terminal e escreva:
    ```php
    composer require "twig/twig:1.36.0"
    ```
3.  O composer deve ter criado o arquivo ``composer.json``. Configure o arquivo para que contenha o que está escrito abaixo. Autoload irá apropriadamente configurar os namespaces do projeto.
    ```json
    {
        "require": {
            "twig/twig": "1.36.0"
        },
        "autoload": {
            "psr-4": {
                "ModelPro\\": "src"
            }
        }
    }
    ```
4.  Agora deve estar tudo pronto. Basta iniciar o servidor e banco de dados. Os dados de acesso podem ser modificados no arquivo ``app.json``. 

    Também estão disponíveis na pasta **db** os arquivos de configuração do banco de dados. Basta importar o ``modelpro.sql`` para criar as tabelas e o ``projects.sql`` para preenchê-las com informações de exemplo.