<?php
// Brazilian Portuguese Language Source File
// Made by Flameu
// A warning to translators: if you don't know the language, DON'T TRANSLATE IT. It may looks obvious, but I know a lot of project translated with Google translator and in that things, every time you are in front of the screen saying "What?" all the time.
$olclang = array();

// Home and general things
$olclang["ab-home"] = "home";
$olclang["ab-cl"] = "clássico";
$olclang["ab-top"] = "tópico";
$olclang["footer"] = "versão 1.3 <br>feita por TheHowl<br>Toda a informação que você precisa sobre isso pode ser encontrada no tópico (link no topo da página)";
$olclang["err"] = "Merda, ocorreu um erro. Por favor, explique melhor na página de problemas.";
$olclang["title"] = "osu! level calculator"; // only lowercase in the title, please. Expecially for "osu!". Plus, please translate this only in:
// - Languages that heve they very own alphabet (asiatic languages...)
// - Languages that translate every single word that came in their vocabulary (see spanish that translate even 99% of film titles, for examples)
$olclang["err2"] = "erro";
$olclang["cl-md"] = "Modo clássico";
$olclang["footer-ttl"] = "Rodapé";
$olclang["tran-cred"] = "<br>Português Brasileiro por <a href=\"http://osu.ppy.sh/u/Flameu\">Flameu</a>."; // Nothing in here, but it should be in english like this:
// "<br>[lang] (ex. English) by <a href=\"http://osu.ppy.sh/u/yourosunickname\">yourosunickname</a>."
// Obv, change [lang] (ex. English) and DO NOT DELETE THE \. They are needed to avoid problems with the php and ".
$olclang["errcl"] = "Erro. É, texto não é um level válido, ou esse usuário não existe. Parabéns por encontrar esse erro!<br>Não esperava esse erro?Didn't expect this error? <a href=\"http://thehowl.it/reportolc.html\"><b>Reporte-o.</b></a>";
// New part starts here [11/06/14]
$olclang["s2l-md"] = "Diferença de score entre os levels";
$olclang["s2l-tx1"] = "Calcule a diferença entre os levels";
$olclang["s2l-tx2"] = "e";
// Finishes here

// Form
$olclang["example"] = "Ex."; // Abbreviation of Example
$olclang["insnick"] = "insira nickname";
$olclang["mode"] = "modo";
$olclang["then"] = "e então";
$olclang["submit"] = "envie!";
$olclang["cl-tt"] = "digite o level que você quer chegar"; 
$olclang["targ-lv"] = "level desejado";

// Results
$olclang["api-res"] = '<h1>Resultado</h1> <div class="txt">Então, quanto score ' . @$_GET["nickname"] . ' precisa para chegar no level ';
$olclang["api-res2"] = '?</div><br><div class="result">'; // obv don't change vars and html tags
$olclang["dia"] = '</div><br><div class="txt">faça denovo!</div><br>';
$olclang["cl-res"] = '<h1>Resultado</h1><div class="txt">Então, para chegar no level ' . @$_GET["leveltoreach"] . ', você precisa de um score de</div><br><div class="result">';
// New part starts here [13/06/14]
$olclang["s2l-res"] = '<h1>Resultado</h1><div class="txt">A diferença entre ' . @$_GET["l1"] . ' e ' . @$_GET["l2"] . ' é de</div><br><div class="result">';
$olclang["abs"] = '<div class="txt">Nota: o número acima é o valor absoluto da diferença, ou seja, números negativos significam que o primeiro level é maior que o segundo.';
return $olclang;
?>