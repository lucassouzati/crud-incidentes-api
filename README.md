<h1 align="center">
    Cadastro de Incidentes API (Back-end)
</h1>

## 🛥️ Sobre o projeto
Esse sistema é uma demonstração simples de uma API backend para servir a um CRUD de Incidentes (incidents). 

## 🏗️ Tecnologias:
- **[PHP 8.1](https://www.php.net)**
- **[Laravel](https://laravel.com/)**
- **[MySQL](https://www.mysql.com/)**
- **[Laravel Request Docs](https://github.com/rakutentech/laravel-request-docs)**
- **[PHPUnit](https://phpunit.de)**

## 🚀 Como rodar esse projeto
Primeiramente, clone este projeto aonde você costuma desenvolver seus projetos:
```
git clone --recurse-submodules git@github.com:lucassouzati/crud-incidentes-api.git
```
Caso esteja no Windows e não tenha ambiente de desenvolvimento, recomendo que utilize WSL (Windows Subsystem for Linux) junto com Ubuntu e Docker. Para esse projeto, foi utilizado o submódulo Laradock, já com as minhas configurações para rodar o projeto sem precisar alterar nenhum arquivo.
Vá para a pasta do Laradock dentro da pasta do projeto:
```
cd crud-incidentes-api/laradock/
```
Agora execute o comando docker:
```
docker-compose up -d nginx mysql
```
Caso seja a primeira vez executando essas imagens, esse processo pode demorar alguns minutos. Quando concluir, execute o seguinte comando para entrar dentro do container da aplicação:
```
docker-compose exec --user=laradock workspace bash
```
Dentro do container, execute a instalação das dependências:
```
composer install
```
Em seguida, copie o .env do projeto:
```
cp .env.example .env
```
Agora só rodar as migrations e comandos artisan:
```
php artisan migrate && php artisan key:generate
```
Para rodar os testes automatizados:
```
php artisan test
```
## 📖 Documentação da API

Em meus projetos backend, costumo utilizar o Laravel Request Docs que documenta automaticamente os endpoints da API, baseados em design patterns do Laravel. Voê pode acessar pela caminho:
```
http://localhost/request-docs
```
Nessa mesma página você pode realizar chamaadas aos endpoins, e verificar os parâmetros e suas validações.
<h4 align="center">
    <img title="Tela do Laravel Request Docs" src=".github/readme/request-docs.png" width="1024px" />
    <img title="Exemplo de teste com endpoint de post incidents" src=".github/readme/request-docs-result.png" width="1024px" />
</h4>

## 🤔 Como contribuir para o projeto

- Faça um **fork** do projeto;
- Crie uma nova branch com as suas alterações: `git checkout -b my-feature`
- Salve as alterações e crie uma mensagem de commit contando o que você fez:`git commit -m "feature: My new feature"`
- Envie as suas alterações: `git push origin my-feature`

> Caso tenha alguma dúvida confira este [guia de como contribuir no GitHub](https://github.com/firstcontributions/first-contributions)

## 📝 Licença

Este projeto esta sobe a licença MIT. Veja a [LICENÇA](https://opensource.org/licenses/MIT) para saber mais.

Feito com ❤️ por Lucas Siqueira 👋🏽 [Entre em contato!](https://www.linkedin.com/in/lucas-de-souza-siqueira-a6469952/)
