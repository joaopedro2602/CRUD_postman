# CRUD-Postman_PHP

![GitHub repo size](https://img.shields.io/github/repo-size/juliosn/CRUD-Postman_PHP?style=for-the-badge)
![GitHub language count](https://img.shields.io/github/languages/count/juliosn/CRUD-Postman_PHP?style=for-the-badge)
![GitHub forks](https://img.shields.io/github/forks/juliosn/CRUD-Postman_PHP?style=for-the-badge)
![Bitbucket open issues](https://img.shields.io/bitbucket/issues/juliosn/CRUD-Postman_PHP?style=for-the-badge)
![Bitbucket open pull requests](https://img.shields.io/bitbucket/pr-raw/juliosn/CRUD-Postman_PHP?style=for-the-badge)

## Pré-requisitos

- PHP 7.x ou superior
- Servidor web (Apache, Nginx, etc.)
- Postman (para testar os endpoints)

## Estrutura da tabela:
```sql
CREATE TABLE `clientes` (
  `cliente_id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`cliente_id`)
) ;

```

## Recursos

- **Operações CRUD**: Desenvolve operações básicas de CRUD para gerenciamento de dados de clientes.
- **Classe Cliente**: Define uma classe para representar um cliente, contendo atributos como nome, e-mail, cidade e estado.
- **ClienteRepository**: Responsável por acessar e manipular os dados dos clientes.
- **Endpoints**: Implementação de endpoints para criar, listar, obter por ID, atualizar e excluir clientes.
- **Coleção do Postman**: Disponibiliza uma coleção no Postman com exemplos de requisições para teste dos endpoints.
  
# POSTMAN

## Estrutura da coleção
![image](https://github.com/juliosn/CRUD-Postman_PHP/assets/99426563/a433ea1d-9866-4dca-9672-b23f8371008d)

## GET com erro 404
![image](https://github.com/juliosn/CRUD-Postman_PHP/assets/99426563/72c73976-e088-4945-b532-1e18338b65be)

## POST - insert (1º Insert)
![image](https://github.com/juliosn/CRUD-Postman_PHP/assets/99426563/fc632f35-54b5-417d-8d96-370906e624d4)

## POST - insert (2º Insert)
![image](https://github.com/juliosn/CRUD-Postman_PHP/assets/99426563/2a2990e1-81de-4290-918c-c05d847a380a)

## Todos os registros – getAll():
![image](https://github.com/juliosn/CRUD-Postman_PHP/assets/99426563/03fbf782-70ae-4afa-ac5a-1d4df245a1c8)

## Listar registro específico – getById():
![image](https://github.com/juliosn/CRUD-Postman_PHP/assets/99426563/2d07db7c-9d3f-486e-8587-555d37a4927c)

## Registro específico não encontrado (404):
![image](https://github.com/juliosn/CRUD-Postman_PHP/assets/99426563/78618aae-014c-41db-9cc7-ed17475614aa)

## PUT para atualização: 
![image](https://github.com/juliosn/CRUD-Postman_PHP/assets/99426563/af2a7998-8464-4c95-8ff0-3394507927cc)

## PUT para inserção:
![image](https://github.com/juliosn/CRUD-Postman_PHP/assets/99426563/91b5a59e-8a5e-4557-92f1-ec7d715cee9a)

## DELETE
![image](https://github.com/juliosn/CRUD-Postman_PHP/assets/99426563/0c0c3366-b8e8-4a7c-aa25-cf2f8a63ded0)

## OPTIONS
![image](https://github.com/juliosn/CRUD-Postman_PHP/assets/99426563/89c2a4c9-548e-49a5-ba13-91f18eb5ff10)

## ☕ Instalando o Crud-Postman_PHP

Para utilizar o Crud-Postman_PHP, siga as seguintes etapas:

- Baixe o projeto - https://github.com/juliosn/CRUD-Postman_PHP/
- Acesse o diretório do projeto através do prompt de comando (CMD)
- No Xampp, crie um banco de dados com o nome de sua preferência. Caso queira alterar o nome do banco do arquivo, vá em 'App/Database/config' e altere o valor do campo 'db_name':

  ![image](https://github.com/juliosn/CRUD-Postman_PHP/assets/99426563/feca2c10-9539-407f-bccf-293e6b072fc6)
  >Obs.: Caso você tenha alterado as configurações do ambiente seu XAMPP, altere os valores necessários neste arquivo.

- Caso você utilize o VsCode como sua IDE, utilize o comando: 'code .' para abrir o projeto dentro da IDE
- Vá no prompt de comando, utilize o comando: 'php -S localhost:8083'
- Abra o navegador e insira a seguinte URL: 'http://localhost:8083/'. Agora, você terá acesso aos testes do projeto!

- No Postman: Criar coleção e adicionar os requisitos que deseja, sua estrutura e conteúdo foram apresentados previamente no arquivo.

