<a href="https://www.beacademy.com.br/devstartpaylivre/" target="_blank"><img src="https://www.beacademy.com.br/wp-content/uploads/2022/02/Cubo.png" align="right" width="60"/></a>

# 📂 PROJETO FINAL

## AULA 07 ⇆ 21

### Layout de pastas e arquivos

```sh
projeto-final
│   composer.json
│   composer.lock
│   README.md
│   
├───config
│       routes.php
│       
├───db
│       store.sql
│       
├───public
│       index.php
│       
└───src
    ├───Connection
    │       Connection.php
    │       
    ├───Controller
    │       AbstractController.php
    │       CategoryController.php
    │       ErrorController.php
    │       IndexController.php
    │       ProductController.php
    │       
    ├───Model
    └───View
        │   report.php
        │   
        ├───category
        │       add.php
        │       delete.php
        │       edit.php
        │       list.php
        │       
        ├───error
        │       404.php
        │       
        ├───index
        │       index.php
        │       login.php
        │
        ├───product
        │       add.php
        │       delete.php
        │       edit.php
        │       list.php
        │
        └───_partials
                footer.php
                header.php
                message.php
```

## UTILIZAÇÃO

### Clonando o repositório

```sh
# Clonagem do repositório original
git clone https://github.com/Jphn/beacademy-devstart-poo.git
```

### Rodando localmente

> É necessária a instalação do PHP na sua máquina e a adição do binário do mesmo as variáveis do seu ambiente. Estou utilizando a versão `8.1.6` do PHP. Também é importante instalar a ferramenta`composer`, para rodar a aplicação.

```sh
# Acesse a pasta do repositório
cd ./beacademy-devstart-poo/projeto-final/
# Instalação de dependências e geração do arquivo de carregamento automático das classes
composer install
# Inicialização do servidor PHP
php -S localhost:8000 -t ./public/
```

```sh
# Ou, pule o acesso a pasta do repositório e digite:
php -S localhost:8000 -t ./beacademy-devstart-crud-contatos-php/projeto-final/public/
```

## AUTOR

[@Jphn](https://github.com/Jphn)

<a href="https://www.beacademy.com.br/" target="_blank"><img src="https://www.beacademy.com.br/wp-content/uploads/2019/11/Logo-Topo.png" width="300" align="left" /></a>
<a href="https://www.paylivre.com/" target="_blank"><img src="https://web.paylivre.com/static/media/logo-blue.c7100186.png" width="300" align="right" /></a>
