<?php
// English Language Source File
// Made by TheHowl
// A warning to translators: if you don't know the language, DON'T TRANSLATE IT. It may looks obvious, but I know a lot of project translated with Google translator and in that things, every time you are in front of the screen saying "What?" all the time.
$olclang = array();

// Home and general things
$olclang["ab-home"] = "home";
$olclang["ab-cl"] = "classic";
$olclang["ab-top"] = "topic";
$olclang["footer"] = "version 1.3 <br>made by TheHowl<br>All the info you need about this can be found in the topic (link on the top of the page)";
$olclang["err"] = "Holy shit, this is an error. Please write more info in the issues";
$olclang["title"] = "osu! level calculator"; // only lowercase in the title, please. Expecially for "osu!". Plus, please translate this only in:
// - Languages that heve they very own alphabet (asiatic languages...)
// - Languages that translate every single word that came in their vocabulary (see spanish that translate even 99% of film titles, for examples)
$olclang["err2"] = "error";
$olclang["cl-md"] = "Classic mode";
$olclang["footer-ttl"] = "Footer";
$olclang["tran-cred"] = " "; // Nothing in here, but it should be in english like this:
// "<br>[lang] (ex. English) by <a href=\"http://osu.ppy.sh/u/yourosunickname\">yourosunickname</a>."
// Obv, change [lang] (ex. English) and DO NOT DELETE THE \. They are needed to avoid problems with the php and ".
$olclang["errcl"] = "Error. Yup, text isn't a valid level, or that user doesn't exists. Congratulations for seeing this error!<br>Didn't expect this error? <a href=\"http://thehowl.it/reportolc.html\"><b>Report this.</b></a>";
// New part starts here [11/06/14]
$olclang["s2l-md"] = "Score difference between levels";
$olclang["s2l-tx1"] = "Calculate the difference between level";
$olclang["s2l-tx2"] = "and level";
// Finishes here

// Form
$olclang["example"] = "Ex."; // Abbreviation of Example
$olclang["insnick"] = "insert nickname";
$olclang["mode"] = "mode";
$olclang["then"] = "and then";
$olclang["submit"] = "submit!";
$olclang["cl-tt"] = "write the level you want to reach"; 
$olclang["targ-lv"] = "target level";

// Results
$olclang["api-res"] = '<h1>Results</h1> <div class="txt">So, how much score needs ' . $_GET["nickname"] . ' to reach level ';
$olclang["api-res2"] = '?</div><br><div class="result">'; // obv don't change vars and html tags
$olclang["dia"] = '</div><br><div class="txt">do it again!</div><br>';
$olclang["cl-res"] = '<h1>Results</h1><div class="txt">So, to reach level ' . $_GET["leveltoreach"] . ', you need a score of </div><br><div class="result">';
// New part starts here [13/06/14]
$olclang["s2l-res"] = '<h1>Results</h1><div class="txt">The difference from ' . $_GET["l1"] . ' to ' . $_GET["l2"] . ' is of</div><br><div class="result">';
$olclang["abs"] = '<div class="txt">Note: the number above is expressed in its absolute value!'; 
?>