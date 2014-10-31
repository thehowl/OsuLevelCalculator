<?php
// Traduzione italiana di osu! level calculator
// Sempre fatta da TheHowl
$olclang = array();

// Home and general things
$olclang["ab-home"] = "home";
$olclang["ab-cl"] = "classica";
$olclang["ab-top"] = "discussione";
$olclang["footer"] = "versione 1.3 <br>creato da Howl<br>Tutto ci&ograve; che ti serve sapere su o!lc può essere trovato nella discussione (link in alto al sito)";
$olclang["err"] = "Cazzo, questo è un errore. Per favore, scrivi cos'&egrave; successo negli issues della repository github";
$olclang["title"] = "osu! level calculator"; // only lowercase in the title, please. Expecially for "osu!".
$olclang["err2"] = "errore";
$olclang["cl-md"] = "Modalità classica";
$olclang["footer-ttl"] = "Footer";
$olclang["tran-cred"] = "<br>Traduzione italiana by <a href=\"http://osu.ppy.sh/u/Howl\">Howl</a>.";
$olclang["errcl"] = "Errore. Già, le lettere non sono numeri, o quel determinato utente non esiste. Congratulazioni per aver visto quest'errore!<br>Qualquadra non cosa? <a href=\"http://thehowl.it/reportolc.html\"><b>Informaci.</b></a>";
$olclang["s2l-md"] = "Differenza di score tra due livelli";
$olclang["s2l-tx1"] = "Calcola la differenza dello score tra il livello ";
$olclang["s2l-tx2"] = "e il livello";

// Form
$olclang["example"] = "Es."; // Abbreviation of Example
$olclang["insnick"] = "inserisci il nickname";
$olclang["mode"] = "modalit&agrave;";
$olclang["then"] = "e poi";
$olclang["submit"] = "invia!";
$olclang["cl-tt"] = "scrivi il livello da raggiungere";
$olclang["targ-lv"] = "Obiettivo";

// Results
$olclang["api-res"] = '<h1>Risultati</h1> <div class="txt">Quindi, quanto score necessita ' . @$_GET["nickname"] . ' per arrivare al livello ';
$olclang["api-res2"] = '?</div><br><div class="result">';
$olclang["dia"] = '</div><br><div class="txt">fallo di nuovo!</div><br>';
$olclang["cl-res"] = '<h1>Risultati</h1><div class="txt">Quindi, per arrivare al livello ' . @$_GET["leveltoreach"] . ', &egrave; necessario uno score di </div><br><div class="result">';
$olclang["s2l-res"] = '<h1>Risultati</h1><div class="txt">La differenza di score dal livello ' . @$_GET["l1"] . ' al livello ' . @$_GET["l2"] . ' è di</div><br><div class="result">';
$olclang["abs"] = '<div class="txt">Nota bene: il numero sovrastante è espresso nel suo valore assoluto!'; 
return $olclang;
?>