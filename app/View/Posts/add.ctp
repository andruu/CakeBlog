<?php
$this->set('hide_right_column', true);
echo $this->Html->css(array(
// 
), null, array('inline' => false));
echo $this->Html->script(array(
	'jquery.slug.js',
	'posts/add.js'
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
		<legend><?php echo __('Add Post'); ?></legend>
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