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
	$git_output = shell_exec('git pull '.$repository_path);
	echo $git_output;
?>
</code></pre>

<h1>Jekyll build</h1>
<pre><code>
<?php
	$jekyll_output = shell_exec('jekyll build --source '.$repository_path.' --destination '.$repository_path.'/_site');
	echo $jekyll_output;
?>
</code></pre>