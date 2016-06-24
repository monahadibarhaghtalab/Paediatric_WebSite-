<body>
<?php foreach ($result->data as $post): ?>
	<a class="fancybox" href="<?php echo $post->images->standard_resolution->url ?>" data-fancybox-group="gallery" title="<?php echo $post->caption->text ?>"><img src="<?php echo $post->images->thumbnail->url ?>" alt="<?php echo $post->caption->text ?>" /></a>
<?php endforeach ?>
</body>