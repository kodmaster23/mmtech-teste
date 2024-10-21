## Processo Seletivo - MM Tech - Proposta A

```
Aqui somos um time muito unido e integrado, gostamos de nos comunicar, porém somos esquecidos. :(
Você pode nos ajudar criando um sisteminha que permita a armazenagem do nome, email e telefone de cada pessoa do time?

Vai ser legal se você criar uma aplicação em Node + React/Angular, mas
fique livre para escolher suas tecnologias. No banco, você pode usar NeDB para facilitar.
Alguns pontos importantes:
    ● Use sua criatividade, valorizamos muito o frontend e a experiência;
    ● Não se esqueça das validações;
    ● Faça um CRUD completo.
```

## Tecnologias escolhidas

 - Laravel
 - Livewire
 - Alpinejs
 - Tailwind
 - FeatherIcon
 - SQLite
 - Coolify

## Demo

Resolvi fazer em Laravel e Livewire por ser um teste com um objetivo simples.
Afim de utilizar o menor numero de ferramentas externas, optei pelo SQLite localmente no container.

Optei por usar o Model::unguard() para facilitar o processo de gravação e atualização de dados e evitar
o 'fillable'.

Montei uma factory e seeder para preencher alguns registros, infelizmante o faker do Laravel não criar
telefones celulares com o padrão brasileiro somente. Pelo menos da pra ver a validação em andamento no edit tbm.

Para melhor avaliação, hospeidei na minha nuvem particular usando o Coolify, baseado na configuração
    do Nixpacks para Laravel.

### Lógica:
    - app\Livewire\Proposal1
    - database\migrations
    - database\factories
    - database\seeders

### Telas
    - resources\views\livewire\proposal1
    
### Deploy

O teste tem seu deploy aqui:
[Demo - Coolify](https://vs408kkko004g440gkwgssgo.kodup.cloud/)

Caso seja necessário realziar o deploy local, instruções padrão de subir Laravel.

    ```
    composer install & 
    php artisan migrate & 
    npm install &
    npm run dev &
    php artisan serve
  ```
