CRUD todo list
1. creare il model
2. creare il resource controller
3. creare (e lanciare) la migration
(con php artisan make:model MioModel -m -r ottengo i tre punti con una sola istruzione)
4. creare (e lanciare) il seeder
5. aggiungere nelle rotte la rotta resource
6. fare puntare anche a home la rotta index del resource controller
7. nella index stampare la tabella con tutti i prodotti (vista miatabella.index)
8. nella tabella della index è il bottone SHOW che col parametro passato punta ala rotta miatabella.show
9. il metodo show riceve l’id facendo la query prendendo quindi l’occorrenza
10. nella vista (miatabella.show) stampo tutti i dati dell’elemento cliccato
11. creare un bottone che pounti a create
12. il metodo create stampa la vista miatabella.create che ha il form
13. la action del form invia a miatabella.store tutti i dati inseriti
14. in store creo una nuova istanza con in dati ricevuti in request, li salvo nel db e redirect alla show passando la nuova istanza inserita
