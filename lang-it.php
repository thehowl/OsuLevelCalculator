<?
// Traduzione italiana di osu! level calculator
// Sempre fatta da TheHowl

// A warning to translators: if you don't know the language, DON'T TRANSLATE IT. It may looks obvious, but I know a lot of project translated with Google translator and in that things, every time you are in front of the screen saying "What?" all the time.
$olclang = array(); // DON'T CHANGE. NEVER.

// Home and general things
$olclang["ab-home"] = "home";
$olclang["ab-cl"] = "classica";
$olclang["ab-top"] = "discussione";
$olclang["footer"] = "versione 1.3 <br>Completamente creato da TheHowl<br>Tutto ci&ograve; che ti serve sapere su o!lc può essere trovato nella discussione (link in alto al sito)";
$olclang["err"] = "Cazzo, questo è un errore. Per favore, scrivi cos'&egrave; successo negli issues della repository github";
$olclang["title"] = "osu! level calculator"; // only lowercase in the title, please. Expecially for "osu!".
$olclang["err2"] = "errore";
$olclang["cl-md"] = "Modalità classica";
$olclang["footer-ttl"] = "Footer";

// Form
$olclang["example"] = "Es."; // Abbreviation of Example
$olclang["insnick"] = "inserisci il nickname";
$olclang["mode"] = "modalit&agrave;";
$olclang["then"] = "e poi";
$olclang["submit"] = "invia!";
$olclang["cl-tt"] = "scrivi il livello da raggiungere"; 

// Results
$olclang["api-res"] = '<h1>Risultati</h1> <div class="txt">Quindi, quanto score necessita ' . $_GET["nickname"] . ' per raggiungere il prossimo livello?</div><br><div class="result">' . $final . '</div><br><div class="txt">fallo di nuovo!</div><br>'; // obv don't change vars and html tags
$olclang["cl-res"] = '<h1>Results</h1><div class="txt">Quindi, per arrivare al livello ' . $_GET["leveltoreach"] . ', &egrave; necessario uno score di </div><br><div class="result">' . $final . '</div><br><div class="txt">fallo di nuovo!</div><br>';
?>