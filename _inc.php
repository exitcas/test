<?php $pages_nav = [
	["home", "index.php"],
	["projects", "projects.php"],
	//["book", "book.php"],
	["blog", "https://blog.atico.ga"],
	["tilde", "https://tilde.team/~lucas/"]
];

/* Language */
include "_trans.php";
session_start();
if (isset($_GET["lang"])) {
	if (isset($trans[$_GET["lang"]])) {
		setcookie("lang", $_GET["lang"], time() + (10 * 365 * 24 * 60 * 60), "/");
		$_COOKIE["lang"] = $_GET["lang"];
	}
}
if (isset($_COOKIE["lang"]) && isset($trans[$_COOKIE["lang"]])) {
	$lang = $_COOKIE["lang"];
} else {
	$lang = "en";
}
$l = $trans;
$trans = $trans[$lang];

?><!DOCTYPE html>
<html dir="ltr" lang="<?= $lang; ?>">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="author" content="Luqaska" />
<meta name="ocs-site-verification" content="1707d4d86f0dfd1fe55b0c30345fcda5" />
<link rel="icon" href="/sarpado.png" />
<link type="application/atom+xml" rel="alternate" href="https://blog.atico.ga/feed/" title="blog.ATICO.ga" />
<title><?= $trans["nav_" . $p]; ?> | ATICO.ga</title>
<style>
/* Body */
body {
	text-align: justify;
	background-attachment: fixed;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
	background-color: #036c96;
	background-image: url("<?php $imgs = glob("imgs/*"); echo $imgs[rand(0, count($imgs)-1)]; ?>");
	color: white;
	margin: 10px 22%;
	font-family: sans-serif;
}

/* Header */
header, nav, main {
	border: solid 1px white;
}
header {
	border-radius: 10px 10px 0 0;
	background: #686868;
	color: white;
	padding: 1px 30px;
	font-family: serif;
}
header a {
	color: white;
	text-decoration: none;
}

/* Navbar */
nav {
	background: lightblue;
	padding: 0 10px;
}
#sarpado {
	image-rendering: pixelated;
	width: 30px;
	height: auto;
	margin: 0 8px 0 0;
}
nav a {
	text-decoration: none;
	color: black;
	margin: 0 4px 0 0;
	padding: 1px 5px;
}
nav a:hover {
	color: black;
	background: white;
}
nav a:active {
	color: white;
	background: orange;
}

/* Main */
main {
	background: black;
	padding: 10px;
}
main a {
	color: lightblue;
}
main a:visited {
	color: #036c96;
}
main a:active {
	color: #7f3cfc;
}

/* Footer */
footer {
	background: white;
	color: black;
	border-radius: 0 0 10px 10px;
	padding: 3px 10px;
	font-size: small;
}

/* Background */
#bkg video,#bkg img,#bkg noscript video{
	position:fixed;
	bottom:0;
	right:0;
	min-width:100%;
	min-height:100%;
}

/* Set background button */
#setBkg{
	background:linear-gradient(to bottom right, red,orange,yellow,green,blue,indigo,violet);
	border:none;
	color:white;
	border-radius:50px;
}
#setBkg:hover{
	background:linear-gradient(to bottom right, orange,yellow,green,blue,indigo,violet,red);
}
#setBkg:active{
	background:linear-gradient(to bottom right, yellow,green,blue,indigo,violet,red,orange);
}

/* Mobile */
@media only screen and (max-width: 650px) {
	body {
		margin: 10px 11%;
	}
}
</style>
</head>
<body>
<header>
	<h1><a href="index.php"><img src="/sarpado.png" id="sarpado" /><span id="text">ATICO<span style="font-size:medium">.ga</span></span></a></h1>
</header>
<nav>
<?php foreach ($pages_nav as $element){
	if ($element[0] == $p){
		$b = ['<b class="active">', '</b>'];
	} else {
		$b = ['', ''];
	}
	echo "$b[0]<a href=\"$element[1]\">" . $trans["nav_" . $element[0]] . "</a>$b[1]";
} ?>
<span style="float:right"><?php foreach ($l as $langcode => $translations){
  echo "<a href=\"?lang=$langcode\">$langcode</a>";
} $l = False; ?></span>
</nav>
<main>
