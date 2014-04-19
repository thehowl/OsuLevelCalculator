<?
// Traduzione italiana di osu! level calculator
// Sempre fatta da TheHowl

// A warning to translators: if you don't know the language, DON'T TRANSLATE IT. It may looks obvious, but I know a lot of project translated with Google translator and in that things, every time you are in front of the screen saying "What?" all the time.
$olc-lang = array(); // DON'T CHANGE. NEVER.

// Home and general things
$olc-lang["ab-home"] = "home";
$olc-lang["ab-cl"] = "classica";
$olc-lang["ab-top"] = "discussione";
$olc-lang["footer"] = "versione 1.3 <br>Completamente creato da TheHowl<br>Tutto ciò che ti serve sapere su o!lc può essere trovato nella discussione (link in alto al sito)";
$olc-lang["err"] = "Cazzo, questo è un errore. Per favore, scrivi cos'è successo negli issues della repository github";
$olc-lang["title"] = "osu! level calculator"; // only lowercase in the title, please. Expecially for "osu!".
$olc-lang["err2"] = "errore";
$olc-lang["cl-md"] = "Modalità classica";
$olc-lang["footer-ttl"] = "Footer";

// Form
$olc-lang["example"] = "Es."; // Abbreviation of Example
$olc-lang["insnick"] = "inserisci il nickname";
$olc-lang["mode"] = "modalità";
$olc-lang["then"] = "e poi";
$olc-lang["submit"] = "invia!";
$olc-lang["cl-tt"] = "scrivi il livello da raggiungere"; 

// Results
$olc-lang["api-res"] = '<h1>Risultati</h1> <div class="txt">Quindi, quanto score necessita ' . $_GET["nickname"] . ' per raggiungere il prossimo livello?</div><br><div class="result">' . $final . '</div><br><div class="txt">fallo di nuovo!</div><br>'; // obv don't change vars and html tags
$olc-lang["cl-res"] = '<h1>Results</h1><div class="txt">Quindi, per arrivare al livello ' . $_GET["leveltoreach"] . ', è necessario uno score di </div><br><div class="result">' . $final . '</div><br><div class="txt">fallo di nuovo!</div><br>';
?>