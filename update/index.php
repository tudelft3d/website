---
layout: default
---
<div class="container">
<?php
?>

<h1>Merging publication files</h1>
<pre><code>
<?php
	$merged_bib_file = fopen("../../pubs/all.bib", "w");
	$bib_file_paths = scandir("../../pubs");
	foreach ($bib_file_paths as $bib_file_path) {
		if (preg_match("/\w+.bib$/", $bib_file_path)) {
			if ($bib_file_path === "all.bib") continue;
			echo("Found: ".$bib_file_path."\n");
			$bib_file = fopen("../../pubs/".$bib_file_path, "r");
			fwrite($merged_bib_file, fread($bib_file, filesize("../../pubs/".$bib_file_path)));
			fclose($bib_file);
		}
	} fclose($merged_bib_file);
?>
</code></pre>

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