---
layout: default
---

<div class="container">
<?php
	$repository_path = '/var/www/website';
	// $repository_path = '/Users/hugo/www/website';
?>

<h1>Git pull</h1>
<pre><code>
<?php
	echo("$ git -C ".$repository_path." fetch\n");
	system("git -C ".$repository_path." fetch 2>&1");

	echo("$ git -C ".$repository_path." checkout origin/main\n");
	system("git -C ".$repository_path." checkout origin/main 2>&1");
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