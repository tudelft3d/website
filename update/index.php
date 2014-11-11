---
layout: default
---
<div class="container">
<?php
?>

<h1>Generate publications</h1>
<pre><code>
<?php
	$repository_path = '/var/www/website';
	// $repository_path = '/Users/ken/Versioned/website';
	include('./bibhtmler.php');
	$bibhtmler = new bibhtmler(array('groupby' => 'year'));
	$pubs_text = "---\nlayout: default\n---\n";
	$pubs_text .= "<div class=\"container\">";
	$pubs_text .= $bibhtmler->process('../../pubs/all.bib');
	$pubs_text .= "</div>";
	$pubs_page = fopen("../../pubs/index.html", "w");
	fwrite($pubs_page, $pubs_text);
	fclose($pubs_page);
	echo("Done");
?>
</code></pre>

<h1>Git pull</h1>
<pre><code>
<?php
	echo("$ git -C ".$repository_path." pull\n");
	system("git -C ".$repository_path." pull 2>&1");
?>
</code></pre>

<h1>Jekyll build</h1>
<pre><code>
<?php
	echo("$ jekyll build --source ".$repository_path." --destination ".$repository_path."/_site\n");
	system("jekyll build --source ".$repository_path." --destination ".$repository_path."/_site 2>&1");
?>
</code></pre>
</div>