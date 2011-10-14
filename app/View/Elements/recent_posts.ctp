<h3>Recent Posts</h3>
<ul>
	<? foreach (ClassRegistry::init('Post')->find('recent') as $post) : ?>
		<li><?=$this->Html->link($post['Post']['title'], array('controller' => 'posts', 'action' => 'view', $post['Post']['slug']))?></li>
	<? endforeach ?>
</ul>