---
layout: default
---

<div class="container">
<?php
	$repository_path = '/var/www/website';
	// $repository_path = '/Users/hugo/www/website';
	include('./bibhtmler.php');
?>

<h1>Git pull</h1>
<pre><code>
<?php
	echo("$ git -C ".$repository_path." pull\n");
	system("git -C ".$repository_path." pull 2>&1");
?>
</code></pre>

<h1>Generate Jantien's page</h1>
<pre><code>
<?php
	$bibhtmler = new bibhtmler(array('groupby' => 'classbyyear'));
	$pubs_text = "---\nlayout: homepage\ntitle: Jantien Stoter\npermalink: /jstoter/\n---\n\n";
	$pubs_text .= "{% raw %}{% raw %}{% endraw %}\n";
	$pubs_text .= "<div class=\"container\">";
	$pubs_text .= $bibhtmler->process('../../jstoter/jantien.bib');
	$pubs_text .= "</div>";
	$pubs_text .= "{% assign openTag = '{%' %}\n";
	$pubs_text .= "{{ openTag }} endraw %}\n";
	$pubs_page = fopen("../../jstoter/index.html", "w");
	fwrite($pubs_page, $pubs_text);
	fclose($pubs_page);
	echo("Done!");
?>
</code></pre>

<!-- <h1>Merging publication files</h1>
<pre><code> -->
<?php
	// $bib_file_paths = scandir("../../pubs");
	// $merged_bib_file_text = "";
	// foreach ($bib_file_paths as $bib_file_path) {
	// 	if (preg_match("/\w+.bib$/", $bib_file_path)) {
	// 		if ($bib_file_path === "all.bib") continue;
	// 		echo("Found: ".$bib_file_path."\n");
	// 		$bib_file = fopen("../../pubs/".$bib_file_path, "r");
	// 		$merged_bib_file_text .= fread($bib_file, filesize("../../pubs/".$bib_file_path));
	// 		$merged_bib_file_text .= "\n\n";
	// 		fclose($bib_file);
	// 	}
	// } $merged_bib_file = fopen("../../pubs/all.bib", "w");
	// fwrite($merged_bib_file, $merged_bib_file_text);
	// fclose($merged_bib_file);
	// echo("Done!");
?>
<!-- </code></pre> -->

<h1>Generate publications</h1>
<pre><code>
<?php
	$bibhtmler = new bibhtmler(array('groupby' => 'class'));
	$pubs_text = "---\n";
	$pubs_text .= "layout: page\n";
	$pubs_text .= "title: Publications\n";
	$pubs_text .= "permalink: /pubs/\n";
	$pubs_text .= "---\n\n";
	$pubs_text .= "{% raw %}{% raw %}{% endraw %}\n";
	$pubs_text .= "<div class=\"container\">";
	$pubs_text .= $bibhtmler->process('../../pubs/all.bib');
	$pubs_text .= "</div>";
	$pubs_text .= "{% assign openTag = '{%' %}\n";
	$pubs_text .= "{{ openTag }} endraw %}\n";
	$pubs_page = fopen("../../pubs/index.html", "w");
	fwrite($pubs_page, $pubs_text);
	fclose($pubs_page);
	echo("Done!");
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