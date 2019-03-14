Tremedous Tees
===================
Applicatie voor de tremendous tees opdracht.

## De applicatie
De applicatie gaat er vanuit dat de gebruiker al een account heeft. De applicatie start zodra de betaling ontvangen is.

**Betaling ontvangen**
Hierbij wordt klantnummer aangegeven en een array van de bestelde producten.

* Order wordt aangemaakt in de database.
* OrderStrategy wordt aangeroepen, deze bepaald welke acties er ondernomen moeten worden
* Product voorraad wordt gecontroleerd
* Zodra alles op voorraad is wordt de order verstuurd naar de klant.

### Order strategy
* OPEN Order
    * Orderbevestiging wordt verstuurd naar de klant
    * Factuur wordt aangemaakt en verstuurd naar de klant
    * Creditnota wordt aangemaakt voor de ontwerper + betaling record wordt aan zijn account toegevoegd
    * Transport wordt besteld
    * Factuur wordt aangepast naar PENDING
* PENDING Order
    * Leverancier geeft aan dat het product nu op voorraad is
    * Zodra alle producten op voorraad zijn wordt de status aangepast naar COMPLETE
* COMPLETE Order
    * Verzending wordt uitgevoerd
    * Magazijn wordt geupdated
    * Verzendbevestiging wordt naar de klant verstuurd
    * Status wordt aangepast naar DONE
    
### Workflow Observer
De observer zorgt voor het eerste gedeelte van het process.
* Orderbevestiging naar klant mailen
* Factuur genereren (PDF) en versturen naar de klant
* Credit nota en betalingsrecord worden aangemaakt voor de ontwerper
* Transport wordt besteld

### Singleton
De database is gemaakt met het singleton design pattern

### Factory
Factory wordt op een paar plekken gebruikt.
* Opslaan van gegevens in de database
* Order status controleren en aanpassen
* Bestelling bij leverancier

### Overig
Verder heb ik zoveel mogelijk extra's geimplementeerd wat we geleerd hebben
* Gebruik maken van een interface
* Gebruik maken van een Abstract class
* Gebruik maken van een trait

### Adapter
De adapter wordt gebruikt bij het aanleveren van data (bij stap 10)

## Installeren
De volgende instructies zijn er om de Tremendous Tees applicatie in gebruik te gaan nemen.

### Composer
```
composer init
```

### Database
De Database staat in de Resources map. Er is ook sample data aanwezig.

![Alt text](resources/erd.jpg?raw=true "Title")