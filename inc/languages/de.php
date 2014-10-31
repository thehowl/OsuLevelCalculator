<?php
// German Language Source File
// Translation made by givenameplz
$olclang = array();

// Home and general things
$olclang["ab-home"] = "startseite";
$olclang["ab-cl"] = "klassisch";
$olclang["ab-top"] = "forum";
$olclang["footer"] = "Version 1.3<br>Erstellt von TheHowl<br>alle Informationen die Sie benötigten können im Forum gefunden werden (Link im oberen Teil der Seite) "; 
$olclang["err"] = "Ach du Schande, ein Fehler. Bitte melden Sie das Problem!";
$olclang["title"] = "osu! levelrechner";
$olclang["err2"] = "Fehler";
$olclang["cl-md"] = "Klassischer Modus";
$olclang["footer-ttl"] = "Fußzeile";
$olclang["tran-cred"] = "<br>Deutsche Übersetzung von <a href=\"http://osu.ppy.sh/u/947499\">givenameplz</a>.";
$olclang["errcl"] = "Fehler. Nun ja, entweder die Eingabe ist kein gültiger Level, oder der Benutzer existiert nicht. Glückwunsch dass Sie diesen Fehler gefunden haben!<br>Ein Unerwarteter Fehler? <a href=\"http://thehowl.it/reportolc.html\"><b>Fehler melden.</b></a>";
// new
$olclang["s2l-md"] = "Score difference between levels";
$olclang["s2l-tx1"] = "Calculate the difference between level";
$olclang["s2l-tx2"] = "and level";

// Form
$olclang["example"] = "Bsp.";
$olclang["insnick"] = "Namen einfügen";
$olclang["mode"] = "Modus";
$olclang["then"] = "und dann";
$olclang["submit"] = "Berechnen!";
$olclang["cl-tt"] = "Gewünschten Level eingeben";
$olclang["targ-lv"] = "Wunschlevel";

// Results
$olclang["api-res"] = '<h1>Ergebnis</h1> <div class="txt">Wie viele Punkte braucht ' . @$_GET["nickname"] . ' um level ';
$olclang["api-res2"] = 'zu erreichen?</div><br><div class="result">';
$olclang["dia"] = '</div><br><div class="txt">gleich nochmal!</div><br>';
$olclang["cl-res"] = '<h1>Ergebnis</h1><div class="txt">Um Level ' . @$_GET["leveltoreach"] . ' zu erreichen, benötigten Sie eine Punktzahl von</div><br><div class="result">';
// New part starts here [13/06/14]
$olclang["s2l-res"] = '<h1>Results</h1><div class="txt">The difference from ' . @$_GET["l1"] . ' to ' . @$_GET["l2"] . ' is of</div><br><div class="result">';
$olclang["abs"] = '<div class="txt">Note: the number above is expessed in its absolute value!'; 
return $olclang;
?>
