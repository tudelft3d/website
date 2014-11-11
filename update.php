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
	echo('$ git pull '.$repository_path."\n");
	system('git pull '.$repository_path);
?>
</code></pre>

<h1>Jekyll build</h1>
<pre><code>
<?php
	echo('$ jekyll build --source '.$repository_path.' --destination '.$repository_path.'/_site'."\n");
	system('jekyll build --source '.$repository_path.' --destination '.$repository_path.'/_site');
?>
</code></pre>