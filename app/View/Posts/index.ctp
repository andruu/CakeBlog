<? foreach ($posts as $post) : ?>
	<?=$this->element('Posts/post', compact('post'))?>
<? endforeach ?>