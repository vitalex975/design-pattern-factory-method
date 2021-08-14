[&laquo; torna all'indice](../../README.md)
# Factory Method Pattern
## Scenario

Riprendiamo l'esempio già adottato per lo **strategy pattern**, ed immaginiamo di stare lavorando ad un videogioco in cui sia il protagonista che gli altri personaggi siano istanze di una classe Hero (o sue derivate).

Abbiamo a disposizione 4 diverse declinazioni di "Hero": l'arciere, il centauro, il cavaliere ed il mago, e la creazione di ciascuno di essi passa per la definizione di 4 diverse strategie relative ad altrettanti aspetti del personaggio:
- come cammina
- come corre
- come combatte
- come nuota

Ipotizziamo che, come spesso accade in un'applicazione reale, il processo di creazione dei personaggi debba essere richiamato in diversi punti del codice, ad esempio:
- all'inizio della partita, quando il giocatore sceglie il proprio alter ego 
- durante il gioco, quando una parte dei personaggi che popolano il mondo vengono sconfitti e sia quindi necessario introdurne di nuovi

La fase di creazione potrebbe coinvolgere una o più particolari logiche.

Ad esempio, per ripopolare l'area di gioco, potremmo voler applicare una logica che "estragga" in modo casuale la tipologia di personaggio da creare.

Inoltre, la logica "casuale" potrebbe non essere l'unica logica necessaria: potremmo, ad esempio, in determinate circostanze, necessitare di una logica di creazione "bilanciata" fra i diversi tipi di personaggio.

Inizia a risultare intuitivo che una logica più o meno complessa, applicata ad ogni processo di creazione di oggetti più o meno complessi, trovi la sua giusta collocazione in un componente isolato e riutilizzabile del codice.

[successivo - Entra in scena il "Factory Method Pattern" &raquo;](03_pattern.md)
