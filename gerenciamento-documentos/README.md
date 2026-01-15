📋 Sistema de Gerenciamento de Documentos
---
![PHP](https://img.shields.io/badge/PHP-8.2%2B-777BB4?style=for-the-badge&logo=php&logoColor=white)
![Laravel](https://img.shields.io/badge/Laravel-12.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-5.7%2B-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5.x-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)

🎯 Sobre o Projeto
-

Aplicação web desenvolvida em Laravel para gerenciamento de documentos, com controle de categorias, upload de arquivos e versionamento automático.

---

✨ Funcionalidades Implementadas
-
📁 Gerenciamento de Categorias (CRUD Completo)

✅ Criar, listar, editar e excluir categorias

📝 Campo: Nome (ex: RH, Financeiro, Jurídico)

📄 Gerenciamento de Documentos (CRUD Completo)

✅ Cadastro completo de documentos

📊 Campos: Nome do documento, Data, Localização física, Categoria, Arquivo anexado

📤 Upload e Manipulação de Arquivos

✅ Formatos suportados: PDF, DOCX, PNG, JPG

⬇️ Download dos arquivos

👁️ Visualização direta no navegador

🔄 Histórico de Versões

✅ Controle automático de versões

📅 Registro da data de cada alteração

🔍 Manutenção das versões anteriores disponíveis

📊 Relatórios

⏳ Filtro de documentos por período

📋 Exibição em tabela organizada

---

🚀 Tecnologias
-

PHP 8.2+

Laravel 12.x

MySQL 5.7+

Bootstrap 5

Blade

---

📦 Pré-requisitos
-

PHP 8.2+

Composer

MySQL 5.7+

---

🛠️ Instalação
#

1️⃣ Download do Projeto (Recomendado)

Acesse o repositório no GitHub

Code → Download ZIP

Extraia o projeto

Acesse a pasta do projeto:

cd gerenciamento-documentos
#

2️⃣ Instalar dependências

composer install
#

3️⃣ Configurar ambiente

cp .env.example .env

php artisan key:generate
#

Configure o banco de dados no arquivo .env.
#
4️⃣ Banco de dados e storage
--

php artisan migrate

php artisan storage:link

---

▶️ Executar a Aplicação

php -S 127.0.0.1:9000 -t public

Acesse no navegador:

http://127.0.0.1:9000

---

## Autor

**Gustavo Miranda**  
Desenvolvido para o Teste Técnico – Desenvolvedor PHP.