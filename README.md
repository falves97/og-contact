# OG Contact

Para a proposta do projeto apresentado, eu decidi separar em 3 partes:

- API REST para o back-end
- Front-end administrativo
- Front-end publico

A motivação para esta divisão, é para facilitar o trabalho de desenvolvimento de cada equipe (imaginando um cenário
em que esse projeto fosse desenvolvido por um time).

Deixar o back-end desaclopado com uma API REST, dá mais liberdade para o front-end, desenvolver em qualquer linguagem,
qualquer framework, podendo até mesmo estar hospedado em servidores diferentes.

## API REST

Será implementada em Laravel, para fazer toda a infraestrutura de back-end.

## Requisitos

- Docker
- Mailgun

### Rotas
As rotas de usuário são:
    
    /api/login
    /api/logout
    /api/me
    /api/refresh

A autenticação foi feita usando Teken JWT.

A rota privada para listar os emails recebidos:
    
    /api/mails

## Run

Para rodar o projeto, basta clonar o repositório, na raiz do projeto, execultar:

    docker compose up -d --build

Será gerado um arquivo *.env*. Nele insira seu domínio e chave do Mailgun, nas variáveis:

    MAILGUN_DOMAIN
    MAILGUN_SECRET
    MAIL_TO

Agora basta usar a rota *http://localhost:8001/api/send* para
enviar seus e-mails de contato.

## Features que gostaria de implementar:

**Mensagerias:** A requisição para o envio de e-mail, tem uma demora considerável, criando uma fila de processos assíncronos, o cliente receberia uma resposta quase que imediata após a inserção no banco de dados, depois os e-mails seriam enviados.

**Front-end:**