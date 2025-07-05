# Copy-Watermark

Copy Watermark è un plug-in sviluppato per WordPress che si occupa di aggiungere, al contenuto copiato all'interno dell'articolo da un utente, un collegamento verso l'indirizzo web dal quale proviene il contenuto:

> Il team di Midjourney ha comunicato che questo nuovo modello incentrato sui video, pur rappresentando un significativo traguardo per l’azienda, è anche un trampolino di lancio per un progetto unificato molto più ambizioso che, seppur inizialmente costoso, sarà accessibile a chiunque.
>
> Continua su: https://editings.eu/la-generazione-di-video-con-ai-arriva-anche-su-midjourney-con-v1-costi-e-dettagli

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
