<div class="post">
	<? if (AuthComponent::user('id')) : ?>
	<ul class="post-options">
		<li><?=$this->Html->link('Edit', array('controller' => 'posts', 'action' => 'edit', $post['Post']['id']), array('class' => 'btn small info'))?></li>
		<li><?=$this->Html->link('Delete', array('controller' => 'posts', 'action' => 'delete', $post['Post']['id']), array('class' => 'btn small danger', 'data-confirm' => 'Are you sure you want to delete this category?', 'data-method' => 'post'))?></li>
	</ul>
	<? endif ?>
	<? if ($this->action == 'index') : ?>
	<h2><?=$this->Html->link($post['Post']['title'], array('controller' => 'posts', 'action' => 'view', $post['Post']['slug']))?></h2>
	<? endif ?>
	<p class="about-post">By <?=$post['User']['name']?> posted <?=$this->Time->timeAgoInWords($post['Post']['created'])?></p>
	<div class="post-content">
		<?=$post['Post']['body']?>
	</div>
	<? if ($this->action == 'index') : ?>
	<?=$this->Html->link(null, array('controller' => 'posts', 'action' => 'view', $post['Post']['slug'], '#' => 'disqus_thread'), array('data-disqus-identifier' => $post['Post']['slug']))?>
	<? endif ?>
</div>