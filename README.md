# Copy-Watermark

Copy Watermark è un plug-in sviluppato per WordPress che si occupa di aggiungere, al contenuto copiato all'interno dell'articolo da un utente, un collegamento verso l'indirizzo web dal quale proviene il contenuto:

> La fotocamera frontale di iPhone 17 Pro Max ha permesso di includere sia gli astronauti che la Terra sullo sfondo, conferendo all’umanità un’ulteriore conferma di come i nostri smartphone siano già in grado di funzionare come uno strumento potentissimo per ottenere scatti e filmati professionali
>
Continua su: https://editings.eu/artemis-ii-le-foto-della-nasa-scattate-con-iphone-17-pro-max-stupiscono

# ✨ Personalizzazione

Una volta installato il plug-in su WordPress, è possibile personalizzare il "watermark" dal pannello **Editor del Plugin** *(Plugin > Editor del plugin)* selezionando **Copy Watermark** e modificando la **Riga 16**:

```php
var message = '\nContinua su: ' + url;
```

# ✒️ Provalo in azione

Copy Watermark è attualmente in esecuzione sul sito web di editings.eu. Per testarne il funzionamento, è sufficiente recarsi su un articolo e copiare una porzione di contenuto. Il "watermark" potrà essere visualizzato subito dopo il contenuto copiato incollandolo su un qualsiasi campo di testo.

# 📌 Requisiti per l'installazione

Copy Watermark non richiede specifici requisiti. Si tratta di un plug-in sviluppato per WordPress 6.7 (e versioni successive) in esecuzione su PHP 8.2.x (e versioni successive).

⛔ _Potrebbe non funzionare su versioni deprecate di PHP e di WordPress. Copy Watermark è stato testato su un ambiente con WordPress 6.7 e PHP 8.2.10_.
