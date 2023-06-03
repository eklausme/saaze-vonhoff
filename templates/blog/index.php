<?php
$title = "{$collection['title']} (Page {$pagination['currentPage']})";
require SAAZE_PATH . "/templates/top-layout.php";
?>

<main>
<?php foreach ($pagination['entries'] as $entry) { ?>
	<article>
	<h2><a href="<?= $rbase . $entry['url'] ?>"><?= $entry['title'] ?? 'Unknown title' ?></a></h2>
	<p class=dimmedColor><time datetime="<?=$entry['date']?>"><?= date('jS F Y', strtotime($entry['date'])) ?></time></p>
	<p><?= $entry['excerpt'] ?? '---' ?></p>
	</article>
<?php } ?>
</main>
	<aside>
	<?php if ($pagination['nextUrl']) { ?>
	<a href="<?= $rbase . $pagination['nextUrl'] ?>">&larr; Älter</a> &nbsp; &nbsp; &nbsp;
	<?php } ?>
	<?php if ($pagination['prevUrl']) { ?>
	<a href="<?= $rbase . $pagination['prevUrl'] ?>">Neuer &rarr;</a>
	<?php } ?>
	</aside>

<?php require SAAZE_PATH . "/templates/bottom-layout.php"; ?>
