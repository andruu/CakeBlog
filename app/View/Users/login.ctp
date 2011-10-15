<?php
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
<?=$this->Form->create('User', $form_options)?>
<?=$this->Form->input('email')?>
<?=$this->Form->input('password')?>
<div class="actions">
	<?=$this->Form->submit('Login', array('class' => 'btn primary'))?>
	<?=$this->Html->link('Cancel', '/', array('class' => 'btn'))?>
</div>
<?=$this->Form->end()?>