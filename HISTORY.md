# API REST

## Redrecionamento para uma rota GET /login

### Problema

Meu primeiro desafio foi fazer com que todas as requições http, com o prefixo /api, 
aceitessem apenas JSON como resposta. 
Porquê? Porque eu escolhi fazer a autenticação por token JWT, logo, 
para acessar uma rota protegida, é esperado um Beare Token, 
pela lib que usei php-open-source-saver/jwt-auth.
Quando o token não era enviado, a lib retornava "Unauthenticated" com o código 401. 
O problema era que o core do Laravel, redirecionava para uma rota de login, só que seria uma rota GET,
possivelmente para retornar um form de login. Para resolver isso, bastava ter o Cabeçalho "Accept" com o valor
"application/json", que o core do Laravel por padrão faz o teste, caso seja esperada uma resposta em json,
ele não redireciona para essa rota de login com o verbo GET.

### Solução

Criei um middleware que adiciona ao Request o cabeçalho "Accept" com o valor "application/json", coloquei
no grupo de middlewares 'api', assim, toda rota que tiver o middleware 'api', vai exigir a resposta em JSON.