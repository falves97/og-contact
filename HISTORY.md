## Ambiente

Primeiramente eu pensei em fazer uma única imagem docke, com os servidores web, php, e banco de dados.
Acabei achando muito complexo, teria que fazer vária configurações específicas de cada servido. Coisas 
que já vem bem otimizadas em suas respectivas imagens oficiais.

Assim, decidi criar um ambiente com docker-compose. A escolha do nginx, foi feita pensando em possível escalabilidade,
já que é possível configurar Load Balancer, entre outras coisas de forma até "simples" (Não implementei Load Balancer).
Também sendo possível servir as aplicações front-end. No projeto estariam dentro de "www", mas poderiam está até mesmo
em outro servidor.
## API REST

### Redrecionamento para uma rota GET /login

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