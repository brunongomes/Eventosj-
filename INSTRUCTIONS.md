Instruções para executar o projeto

1)Instalar o xampp: https://www.apachefriends.org/pt_br/index.html

2)Instalar o composer: https://getcomposer.org/

3)Parte do backend:

Abrir o Xampp e executar o apache e o mysql.
Realizar o comando: git clone https://github.com/brunongomes/Eventosja.git
Acessar a pasta eventosja
Acessar a pasta backend
Executar os comandos nessa sequência:
Instalar os pacotes do php: composer install
Gerar chave para aplicatação: php artisan key:generate

4)Parte do banco de dados

Acessar pelo navegador: http://localhost/phpmyadmin/index.php 
Criar um novo banco com as informações:
Nome da base de dados: Eventosja
Agrupamento: utf8_unicode_ci

Executar as migrations para criar as tabelas: php artisan migrate

Iniciar o backend: php artisan serve


5)Parte do frontend:

Instalar os componentes: npm install
Iniciar o fronteend: npm run dev



Ferramentas utilizadas:

frontend:
vuejs: https://vuejs.org/
materizalize: https://materializecss.com/

backend:
laravel: https://laravel.com/
xampp: https://www.apachefriends.org/pt_br/index.html
composer: https://getcomposer.org/
banco de dados: mysql
insomnia: https://insomnia.rest/



Sobre o projeto:

Iniciei o projeto no backend, primeiro criei um banco de dados chamado eventosja, onde criei duas tabelas, a tabela events com duas colunas, "description"(chave primária) para descrição do evento e "event_date" para inserção das datas. Em seguida, criei a tabela guests para cadastro de convidados, que possui os campos name, email e description_event como chave estrangeira, onde serão inseridos os eventos. 

Após a criação do banco iniciei no backend com o laravel, onde através das migrations estipulei os campos e regra do banco, criei os controllers, models e rotas para realização dos CRUD's necessários para ambas as tabelas, events e guests.
 
Quando finalizei a criação do banco e do CRUD, testei a API com o insomnia, após estar funcionando iniciar a parte do frontend.

No frontend utilizei o vuejs para consumir a api criada anteriormente no backend utilizando axios. Para estilizar as telas do fronted foi utilizado o materialize.



Principais referências:

Criar api e consumir: https://www.twilio.com/blog/criar-e-consumir-uma-api-restful-no-php-laravel
Consumir e criar api com vue, laravel e banco mysql: https://www.youtube.com/watch?v=WwG5wNYoXnI&list=PL0_f8nzxZ-FksYjJ8Oj4WwD13OVE2tNiH
Consumir api com vue: https://www.youtube.com/watch?v=wwq94z8mssY&list=PLWd_VnthxxLeRdaga093nbR64dALpbPwI
Além pesquisas em alguns sites como stackoverflow, nas próprias documentações dos frameworks, dentre outros. 



Sobre o desafio:

Resolvi utilizar as ferramentas propostas pelo desafio, apesar de nunca ter utilizado o vuejs e nunca ter criado API no laravel, eu resolvi criar um desafio pessoal de aprender uma nova tecnologia e me aprofundar em outra já conhecida. Fui aprendendo na internet e aplicando no projeto. 
Na parte do backend, tanto banco de dados quanto da criação de API consegui desenvolver mais rápido. Porém a parte do frontend foi um pouco mais trabalhosa. O materialize precisa de algumas inicializações para funcionar junto ao vuejs e a comunicação entre o frontend e o backend também apresentaram os problemas comuns de codificação, mas também bugs que precisei corrigir, como a implementação do materialize junto ao vuejs, que causaram muitos conflitos, com isso não utilizei o select da maneira que gostaria e improvisei para que o usuário digite o evento ao invés de simplemente selecioná-lo.

Além dos desafios do projeto eu precisei conciliar este desenvolvimento junto ao meu trabalho e a faculdade. No trabalho precisei me dedicar em tempo integral com o treinamento de dois novos colaboradores e minhas tarefas habituais. Na faculdade a rotina comum de provas e trabalhos fora do horário de aula acaba tomando muito tempo, além disso, sou bolsista do Prouni e preciso manter um confienciente mais alto e evitar reprovações. Com isso, eu precisei de bastante disciplina, organização e gerenciamento minucioso do meu tempo para desenvolver este desafio. 

Existem muitas mudanças que eu faria neste projeto antes de enviar, mas a falta de um conhecimento mais amplo nas tecnologias utilizadas e os desafios descritos anteriormente me impossibilitaram a fazer isso, porém foi de grande importância para meu conhecimento o feito até o momento. 

