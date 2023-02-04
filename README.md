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

    ./init.sh

Será gerado um arquivo *.env* dentro de og-contact-api. Nele insira seu domínio e chave do Mailgun, nas
variáveis:

    MAILGUN_DOMAIN
    MAILGUN_SECRET
    MAIL_TO

Agora basta acessar *http://localhost:8002* para
visualizar a página de contato.

A api está no host *http://localhost:8001*

## Features que gostaria de implementar:

**Mensagerias:** 

A requisição para o envio de e-amail, tem uma emora considerável, criando uma fila de
processos assinconos, o cliente receberia uma resposta quase que imediata após a inserção no banco de dados, depois
os emails seriam enviados.


**Front-end:**

- Validações na página de contato
- CMS