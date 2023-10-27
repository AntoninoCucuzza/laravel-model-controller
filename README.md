# nome repo: laravel-model-controller
# Oggi facciamo la nostra prima vera interazione con il database utilizzando l’ORM di Laravel.
- Create un nuovo progetto Laravel 10
- tramite phpMyAdmin (o command line) create un nuovo database laravel_model_controller
- Importate nel vostro database la tabella movies in allegato
- inserite le vostre credenziali per il database nel file .env
- Create un model Movie php artisan make:model Movie
- Create un controller che gestirà la rotta /  php artisan make:controller Guest/PageController
- All’interno della funzione index() del controller, recuperate tutti i film dal database e passateli alla view, che quindi li visualizzerà a schermo, tramite delle card.
## BONUS: Stilare il layout nei dettagli con Sass