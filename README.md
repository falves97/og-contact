# OG Contact

Para a proposta do projeto apesenatada, eu decidi separar em 3 partes:

- API REST para o back-end
- Front-end administrativo
- Front-end publico

## API REST

Será implemtada em Laravel, para fazer toda a infra-estrutura de back-end.

## Requisitos

- Docker
- Mailgun

## Run

Para rodar o projeto, basta clonar o repositório, na raiz do projeto, execultar:

    docker compose up -d --build

Será gerado um arquivo *.env*. Nele insira seu domínio e chave do Mailgun, nas
variáveis:

    MAILGUN_DOMAIN
    MAILGUN_SECRET
    MAIL_TO

Agora basta usar a rota *http://localhost:8001/api/send* para
enviar seus e-mails de contato.