<?php $p="home"; include("_inc.php"); ?>
<p><span style="background:#eaeaea;color:black"><span style="color:transparent">·=</span>[Haha, web goes brrr]<br />·–⚙️<span style="color:transparent">=============</span>⚙️</span></p>
<h2><?= $trans["welcome"]; ?></h2>
<p><?= $trans["introduction"]; ?></p>
<h2><?= $trans["socials"]; ?></h2>
<ul>
	<li><a target="_blank" href="https://github.com/exitcas">GitHub</a></li>
	<li><a target="_blank" href="https://ieji.de/@Lu" rel="me">Microblog</a></li>
	<li><a target="_blank" href="https://is.nota.live/@lucas" rel="me">Microblog (<?= $trans["secondary"]; ?>)</a></li>
	<li><a target="_blank" href="https://koyu.space/@exitcas" rel="me">Koyu.Space</a></li>
	<li><a target="_blank" href="https://www.plurk.com/atico">Plurk</a></li>
	<li><a target="_blank" href="https://tumblr.atico.ga">Tumblr <?= $trans["tumblr_note"] . $trans["in_en"]; ?></a></li>
</ul>
<?php include("_last.php");
