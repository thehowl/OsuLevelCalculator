<?php
// English Language Source File
// Made by TheHowl
// A warning to translators: if you don't know the language, DON'T TRANSLATE IT. It may looks obvious, but I know a lot of project translated with Google translator and in that things, every time you are in front of the screen saying "What?" all the time.
$olclang = array();

// Home and general things
$olclang["ab-home"] = "inicio";
$olclang["ab-cl"] = "clásico";
$olclang["ab-top"] = "discusión";
$olclang["footer"] = "versión 1.3 <br>creado por TheHowl<br>Toda la información que necesites acerca de esto puede ser encontrada en la discusión (enlace en la parte superior de la página)";
$olclang["err"] = "Mierda, esto es un error. Por favor escribe más información en 'issues' dentro del repositorio";
$olclang["title"] = "calculadora de nivel de osu!"; // only lowercase in the title, please. Expecially for "osu!". Plus, please translate this only in:
// - Languages that heve they very own alphabet (asiatic languages...)
// - Languages that translate every single word that came in their vocabulary (see spanish that translate even 99% of film titles, for examples)
$olclang["err2"] = "error";
$olclang["cl-md"] = "Modo clásico";
$olclang["footer-ttl"] = "Pié";
$olclang["tran-cred"] = "<br>Traducción al español por <a href=\"https://osu.ppy.sh/u/2441097">ToniReisu\</a>.";
$olclang["errcl"] = "Error. Si, el nivel debe ser un valor numérico o el usuario no existe. Felicitaciones por ver este error!<br>No esperabas este error? <a href=\"http://thehowl.it/reportolc.html\"><b>Repórtalo.</b></a>";
// New part starts here [11/06/14]
$olclang["s2l-md"] = "Diferencia de puntos entre niveles";
$olclang["s2l-tx1"] = "Calcular la diferencia entre nivel";
$olclang["s2l-tx2"] = "y nivel";
// Finishes here

// Form
$olclang["example"] = "Ej."; // Abbreviation of Example
$olclang["insnick"] = "nombre de usuario";
$olclang["mode"] = "modo";
$olclang["then"] = "y luego";
$olclang["submit"] = "calcular!";
$olclang["cl-tt"] = "escribe el nivel que quieres alcanzar"; 
$olclang["targ-lv"] = "nivel deseado";

// Results
$olclang["api-res"] = '<h1>Resultado</h1> <div class="txt">Así que, cuántos puntos necesita ' . @$_GET["nickname"] . ' para llegar al nivel ';
$olclang["api-res2"] = '?</div><br><div class="result">'; // obv don't change vars and html tags
$olclang["dia"] = '</div><br><div class="txt">hazlo denuevo!</div><br>';
$olclang["cl-res"] = '<h1>Results</h1><div class="txt">Así que, para llegar al nivel ' . @$_GET["leveltoreach"] . ', necesitas un puntaje de </div><br><div class="result">';
// New part starts here [13/06/14]
$olclang["s2l-res"] = '<h1>Results</h1><div class="txt">La diferencia de nivel ' . @$_GET["l1"] . ' a ' . @$_GET["l2"] . ' es de</div><br><div class="result">';
$olclang["abs"] = '<div class="txt">Nota: este número está expresado en su valor absoluto!';
return $olclang;
?>