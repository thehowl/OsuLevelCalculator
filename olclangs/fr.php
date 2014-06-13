<?php
// French Language Source File
// Made by MrCraftCod
// A warning to translators: if you don't know the language, DON'T TRANSLATE IT. It may looks obvious, but I know a lot of project translated with Google translator and in that things, every time you are in front of the screen saying "What?" all the time.
$olclang = array();

// Home and general things
$olclang["ab-home"] = "Accueil";
$olclang["ab-cl"] = "classique";
$olclang["ab-top"] = "topic";
$olclang["footer"] = "version 1.3 <br>réalisé par TheHowl<br>Toutes les informations dont vous avez besoin pevent être trouvées sur le topic (lien en haut de la page)";
$olclang["err"] = "Holy shit, c'est une erreur. Merci d'écrire plus d'informations dans les problèmes";
$olclang["title"] = "osu! level calculator";
$olclang["err2"] = "erreur";
$olclang["cl-md"] = "Mode classique";
$olclang["footer-ttl"] = "Pied de page";
$olclang["tran-cred"] = " "; // Nothing in here, but it should be in english like this:
// "<br>[lang] (ex. English) by <a href=\"http://osu.ppy.sh/u/yourosunickname\">yourosunickname</a>."
// Obv, change [lang] (ex. English) and DO NOT DELETE THE \. They are needed to avoid problems with the php and ".
$olclang["errcl"] = "Erreur. Oui, du texte n'est pas un niveau valide, ou cet utilisateur n'existe pas. Félicitations pour avoir vu cette erreur!<br>Vous ne vous attendiez pas à voir cette erreur? <a href=\"http://thehowl.it/reportolc.html\"><b>Signalez-la.</b></a>";
$olclang["s2l-md"] = "Différence de score entre les niveaux";
$olclang["s2l-tx1"] = "Calculer la différence entre le niveau";
$olclang["s2l-tx2"] = "et le niveau";

// Form
$olclang["example"] = "Ex."; // Abbreviation of Example
$olclang["insnick"] = "insérez le nom d'utilisateur";
$olclang["mode"] = "mode";
$olclang["then"] = "et puis";
$olclang["submit"] = "envoyer!";
$olclang["cl-tt"] = "ecrivez le niveau que vous souhaitez atteindre"; 
$olclang["targ-lv"] = "level souhaité";

// Results
$olclang["api-res"] = '<h1>Résultats</h1> <div class="txt">Alors, combien de score doit encore obtenir ' . $_GET["nickname"] . ' pour atteindre le niveau ';
$olclang["api-res2"] = '?</div><br><div class="result">'; // obv don't change vars and html tags
$olclang["dia"] = '</div><br><div class="txt">faites-le à nouveau!</div><br>';
$olclang["cl-res"] = '<h1>Résultats</h1><div class="txt">Alors, pour atteindre le niveau ' . $_GET["leveltoreach"] . ', vous avez besoin d\'un score de </div><br><div class="result">';
// New part starts here [13/06/14]
$olclang["s2l-res"] = '<h1>Résultats</h1><div class="txt">La différence entre le niveau ' . $_GET["l1"] . ' et ' . $_GET["l2"] . ' est de</div><br><div class="result">';
$olclang["abs"] = '<div class="txt">Note: le nombre au dessus est donné en valeur absolue!'; 
?>