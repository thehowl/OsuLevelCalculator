<?
// English Language Source File
// Made by TheHowl
// A warning to translators: if you don't know the language, DON'T TRANSLATE IT. It may looks obvious, but I know a lot of project translated with Google translator and in that things, every time you are in front of the screen saying "What?" all the time.
$olc-lang = array(); // DON'T CHANGE. NEVER.

// Home and general things
$olc-lang["ab-home"] = "home";
$olc-lang["ab-cl"] = "classic";
$olc-lang["ab-top"] = "topic";
$olc-lang["footer"] = "version 1.3 <br>Completely made by TheHowl<br> all the info you need about this can be found in the topic (link on the top of the page)";
$olc-lang["err"] = "Holy shit, this is an error. Please write more info in the issues";
$olc-lang["title"] = "osu! level calculator"; // only lowercase in the title, please. Expecially for "osu!".
$olc-lang["err2"] = "error";
$olc-lang["cl-md"] = "Classic mode";
$olc-lang["footer-ttl"] = "Footer";

// Form
$olc-lang["example"] = "Ex."; // Abbreviation of Example
$olc-lang["insnick"] = "insert nickname";
$olc-lang["mode"] = "mode";
$olc-lang["then"] = "and then";
$olc-lang["submit"] = "submit!";
$olc-lang["cl-tt"] = "write the level you want to reach"; 

// Results
$olc-lang["api-res"] = '<h1>Results</h1> <div class="txt">So, how much score needs ' . $_GET["nickname"] . ' to reach the next level?</div><br><div class="result">' . $final . '</div><br><div class="txt">do it again!</div><br>'; // obv don't change vars and html tags
$olc-lang["cl-res"] = '<h1>Results</h1><div class="txt">So, to reach level ' . $_GET["leveltoreach"] . ', you need a score of </div><br><div class="result">' . $final . '</div><br><div class="txt">do it again!</div><br>';
?>