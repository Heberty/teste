### Montagem

1. Usei bootsrap 4 para estruturação do projeto;
2. No formulário fiz questão de inserir mascara nos campos de telefone e dinheiro;
3. No mobile useri o plugin bigslide como menu;

### Envio do formulário

1. Fiz todas as validações necessárias, porém me deparei com problemas com o envio do anexo. Quando uso a função attach() para enviar o anexo ele entra em loop, usando a função attachFromStorage() por mais que o path esteja correto, o arquivo pdf não é encontrado. Comentei o attach apra proceguir com o envio do email.

### Painel adm e envio programado de dados

Infelizmente não consegui emplementar.

### Executando o projeto

1. composer install
2. php artisan serve
3. Enjoy!
