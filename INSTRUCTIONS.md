Instruções para executar o projeto
Para executar o projeto para instalar as ferramentas e preparar o ambiente de desenvolvimento, eu utilizei e indico o vscode como editor para execução:

frontend:
vuejs: https://vuejs.org/
materizalize: https://materializecss.com/

backend:
laravel: https://laravel.com/
xampp: https://www.apachefriends.org/pt_br/index.html
composer: https://getcomposer.org/
banco de dados: mysql
insomnia: https://insomnia.rest/

Após a instalação:
acessar a pasta frontend e executar o comando: run npm dev
acessar a pasta backend e executar o comando: php artisan serve

Sobre o projeto:
Iniciei o projeto no backend, primeiro criei um banco de dados chamado eventosja, onde criei duas tabelas, a tabela events com duas colunas, "description"(chave primária) para descrição do evento e "event_date" para inserção das datas. Em seguida, criei a tabela guests para cadastro de convidados, que possui os campos name, email e description_event como chave estrangeira, onde serão inseridos os eventos. 

Após a crição do banco iniciei no backend com o laravel, onde através das migrations estipulei os campos e regra do banco, criei os controllers, models e rotas para realização dos CRUD que precisaria para ambas as tabelas, events e guests.
 
Quando finalizei a criação do banco e do CRUD, testei a API com o insomnia, após estar funcionando fui para a parte do frontend.

No frontend utilizei o vuejs para consumir a api criada anteriormente no backend utilizando axios. Para estilizar as telas do fronted foi utilizado o materialize.

Principais referências:
Criar api e consumir: https://www.twilio.com/blog/criar-e-consumir-uma-api-restful-no-php-laravel
Consumir e criar api com vue, laravel e banco mysql: https://www.youtube.com/watch?v=WwG5wNYoXnI&list=PL0_f8nzxZ-FksYjJ8Oj4WwD13OVE2tNiH
Consumir api com vue: https://www.youtube.com/watch?v=wwq94z8mssY&list=PLWd_VnthxxLeRdaga093nbR64dALpbPwI
Além pesquisas em alguns sites como stackoverflow e outros.


Sobre o desafio:
Resolvi utilizar as ferramentas propostas pelo desafio, apesar de nunca ter utilizado o vuejs e nunca ter criado API no laravel, eu resolvi criar um desafio pessoal de aprender uma nova tecnologia e me aprofundar em outra já conhecida. Fui aprendendo na internet e aplicando no projeto. 
Na parte do backend, tanto banco de dados quanto da criação de API consegui desenvolver mais rápido. Porém a parte do frontend foi um pouco mais trabalhosa. O materialize precisa de algumas inicializações para funcionar junto ao vuejs e a comunicação entre o frontend e o backend também apresentaram os problemas comuns de codificação, mas também bugs que precisei corrigir.

Além dos desafios do projeto eu precisei conciliar este desenvolvimento junto ao meu trabalho e a faculdade. No trabalho os meses de fevereiro e março são bem movimentados, pois além ter ocorrido muitas mudanças da receita federal também alguns arquivos obrigatórios exigem mais atenção para os clientes e houve uma demandar maior de suportes. E na faculdade a rotina comum de provas e trabalhos fora do horário de aula acaba tomando muito tempo. Com isso, eu precisei de bastante disciplina, organização e gerenciamento minucioso do meu tempo para desenvolver este desafio. 