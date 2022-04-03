Instruções para executar o projeto:

Registros:
Preparei o ambiente de desenvolvimento:

frontend:
vuejs: https://vuejs.org/
materizalize: https://materializecss.com/

backend:
laravel: https://laravel.com/
xampp: https://www.apachefriends.org/pt_br/index.html
composer: https://getcomposer.org/
banco de dados: mysql
insomnia: https://insomnia.rest/

Iniciei o projeto no backend, primeiro criei um banco de dados chamado eventoja, onde criei duas tabelas, a tabela events com duas colunas, "description"(chave primária) para descrição do evento e "event_date" para inserção das datas. Em seguida, criei a tabela guests para cadastro de convidados, que possui os campos name, email e description_event como chave estrangeira, onde serão inseridos os eventos. 

Após a crição do banco iniciei no backend com o laravel, onde através das migrations estipulei os campos e regra do banco, criei os controllers, models e rotas para realização dos CRUD que precisaria para ambas as tabelas, events e guests.
 
Quando finalizei a criação do banco e do CRUD, testei a API com o insomnia, após estar funcionando fui para a parte do frontend.

No frontend utilizei o vuejs para consumir a api criada anteriormente no backend utilizando axios. Para estilizar as telas do fronted foi utilizado o materialize.

Principais referências:
Criar api e consumir: https://www.twilio.com/blog/criar-e-consumir-uma-api-restful-no-php-laravel
Consumir e criar api com vue, laravel e banco mysql: https://www.youtube.com/watch?v=WwG5wNYoXnI&list=PL0_f8nzxZ-FksYjJ8Oj4WwD13OVE2tNiH
Consumir api com vue: https://www.youtube.com/watch?v=wwq94z8mssY&list=PLWd_VnthxxLeRdaga093nbR64dALpbPwI
Além pesquisas em alguns sites como stackoverflow e outros.
