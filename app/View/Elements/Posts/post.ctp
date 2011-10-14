<div class="post">
	<h2><?=$this->Html->link($post['Post']['title'], array('controller' => 'posts', 'action' => 'view', $post['Post']['slug']))?></h2>
	<p class="about-post">By <?=$post['User']['name']?> posted <?=$this->Time->timeAgoInWords($post['Post']['created'])?></p>
	<?=$this->Markdown->parse($post['Post']['body'])?>
	<?=$this->Html->link(null, array('controller' => 'posts', 'action' => 'view', $post['Post']['slug'], '#' => 'disqus_thread'), array('data-disqus-identifier' => $post['Post']['slug']))?>
</div>