<?php
	include('../../../update/bibhtmler.php');
	$bibhtmler = new bibhtmler(array('groupby' => 'year'));
?>
<?php echo($bibhtmler->process('3dsm.bib')) ?>