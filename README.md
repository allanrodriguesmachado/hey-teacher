<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


# Sistema de Perguntas e Respostas

Bem-vindo ao **Sistema de Perguntas e Respostas**, uma plataforma interativa onde usuários podem fazer perguntas, fornecer respostas, votar nas melhores respostas e discutir sobre diversos tópicos. Este projeto foi desenvolvido usando o framework Laravel, proporcionando uma experiência robusta e amigável aos usuários.

# Tecnologias
Frontend:

    Tailwind CSS (v3.1.0): Framework CSS altamente personalizável.
    Alpine.js (v3.4.2): Micro-framework JavaScript para interatividade no lado do cliente.
    Vite (v4.5.0): Bundler rápido e moderno para projetos JavaScript.
    Axios (v1.1.2): Biblioteca HTTP para requisições AJAX.

Backend:

    Laravel (v10.10)
    Laravel Sanctum (v3.2)
    Guzzle (v7.2)
    Pest (v2.24.0)
## Funcionalidades Principais

- **Cadastro e Login:** Usuários podem criar contas e fazer login de forma segura.
- **Perguntas e Respostas:** Os usuários podem fazer perguntas, receber respostas e marcar as melhores respostas.
- **Votação:** Sistema de votação para destacar as perguntas e respostas mais úteis.
- **Comentários:** Funcionalidade de comentários para discutir detalhes adicionais.
- **Administração:** Área de administração para gerenciar perguntas, respostas e usuários.

## Requisitos

- **PHP 8.1 ou superior**
- **Composer:** Para gerenciamento de dependências.
- **PgSQL|MySQL|Sqlite:** 

## Instalação

1. **Clone o Repositório:**
   ```bash
   git clone https://github.com/allanrodriguesmachado/hey-teacher.git
   ```

2. **Acesse o Diretório do Projeto:**
   ```bash
   cd hey-teacher
   ```

3. **Instale as Dependências do Composer:**
   ```bash
   composer install
   ```

4. **Configure o Ambiente:**
   - Copie o arquivo `.env.example` para `.env`.
   - Configure as informações do banco de dados no arquivo `.env`.

5. **Gere a Chave de Aplicação:**
   ```bash
   php artisan key:generate
   ```

6. **Execute as Migrações e Seeders:**
   ```bash
   php artisan migrate --seed
   ```

7. **Inicie o Servidor de Desenvolvimento:**
   ```bash
   php artisan serve
   ```

Acesse o sistema em `http://localhost:8000` e comece a explorar as funcionalidades.

## Uso

- **Perguntas:** Os usuários podem fazer perguntas e receber respostas da comunidade.
- **Respostas:** Responda às perguntas dos outros usuários para compartilhar conhecimento.
- **Votação:** Vote nas melhores perguntas e respostas para destacá-las.
- **Comentários:** Comente nas perguntas e respostas para fornecer feedback adicional.
- **Administração:** Acesse a área de administração em `/admin` para gerenciar conteúdo e usuários.

## Contribuindo

1. Faça um fork do repositório.
2. Crie uma nova branch: `git checkout -b minha-feature`.
3. Faça commit das suas alterações: `git commit -m 'Adiciona nova funcionalidade'`.
4. Faça push para a branch: `git push origin minha-feature`.
5. Abra um Pull Request.

## Licença

Este projeto está licenciado sob a [Licença MIT](LICENSE). Sinta-se à vontade para usar, modificar e distribuir conforme necessário.
