<?php require SAAZE_PATH . "/templates/top-layout.php"; ?>
	<main>
	<article>
<p class=dimmedColor><time datetime="<?=$entry['date']?>"><?= date('jS F Y', strtotime($entry['date'])) ?></time></p>
<h1><?= $entry['title'] ?></h1>
<?php
	/*$entry['content']*/
	eval( '?>' . str_replace('?%3E*','?>',str_replace('*%3C?','<?',$entry['content'])) );
?>
	</article>
	</main>

<?php require SAAZE_PATH . "/templates/bottom-layout.php"; ?>
