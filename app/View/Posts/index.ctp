<? foreach ($posts as $post) : ?>
<div class="post">
	<h2><?=$this->Html->link($post['Post']['title'], array('controller' => 'posts', 'action' => 'view', $post['Post']['slug']))?></h2>
	<p>By <?=$post['User']['name']?> posted <?=$this->Time->timeAgoInWords($post['Post']['created'])?></p>
	<?=$this->Markdown->parse($post['Post']['body'])?>
</div>
<? endforeach ?>