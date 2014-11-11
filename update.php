---
layout: default
---

<?php
	$repository_path = '/var/www/website';
	// $repository_path = '/Users/ken/Versioned/website';
?>

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

<h1>Printenv</h1>
<pre><code>
<?php
	echo("$ printenv\n");
	system("printenv 2>&1");
?>
</code></pre>