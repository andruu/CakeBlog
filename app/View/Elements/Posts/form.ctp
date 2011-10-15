<?php
$this->set('hide_right_column', true);
echo $this->Html->css(array(
	'/markitup/skins/simple/style.css',
	'/markitup/sets/markdown/style.css',
), null, array('inline' => false));
echo $this->Html->script(array(
	'/markitup/jquery.markitup.js',
	'/markitup/sets/markdown/set.js',
	'jquery.slug.js',
	'Posts/form.js'
), array('inline' => false));

$form_options = array(
	'inputDefaults' => array(
		'div' => array(
			'class' => 'clearfix'
		),
		'between' => '<div class="input">',
		'after' => '</div>'
	)
);
?>
<div class="posts form">
<?php echo $this->Form->create('Post', $form_options);?>
	<fieldset>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('slug', array('class' => 'slug'));
		echo $this->Form->input('body', array('class' => 'xxlarge'));
	?>
	</fieldset>
	<div class="actions">
		<input type="submit" value="Submit" class="btn primary">
		<?=$this->Html->link('Cancel', '/', array('class' => 'btn'))?>
	</div>
<?php echo $this->Form->end();?>
</div>