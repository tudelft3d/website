<?php
	$repository_path = '/var/www/website';
	// $repository_path = '/Users/ken/Versioned/website';

	$git_output = shell_exec('git pull '.$repository_path);
	echo $git_output;

	$jekyll_output = shell_exec('jekyll build --source '.$repository_path.' --destination '.$repository_path.'/_site');
	echo $jekyll_output;
?>