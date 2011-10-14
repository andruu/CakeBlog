<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?=Configure::read('Site.title')?> | <?=$title_for_layout?></title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Le styles -->
	<link rel="stylesheet/less" href="<?=BASE_PATH?>bootstrap/lib/bootstrap.less" />
	<link rel="stylesheet/less" href="<?=BASE_PATH?>css/application.less" />
	
	<script src="<?=BASE_PATH?>js/less.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?=BASE_PATH?>js/jquery.js" type="text/javascript" charset="utf-8"></script>
	
	<?=$scripts_for_layout?>
	
	<!-- Le fav and touch icons -->
	<link rel="shortcut icon" href="images/favicon.ico">
</head>

<body>

	<div class="topbar">
		<div class="fill">
			<div class="container">
				<a class="brand" href="<?=BASE_PATH?>"><?=Configure::read('Site.title')?></a>
				<ul class="nav">
					<li class="active"><a href="/">Home</a></li>
					<li><a href="<?=BASE_PATH?>about">About</a></li>
					<li><a href="<?=BASE_PATH?>contact">Contact</a></li>
				</ul>
				<div id="profile" class="pull-right">
					<ul>
						<? if (AuthComponent::user('id')) : ?>
						<li><p>Welcome back <?=AuthComponent::user('name')?></p></li>
						<li><?=$this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout'))?></li>
						<? else : ?>
						<li><?=$this->Html->link('Login', array('controller' => 'users', 'action' => 'login'))?></li>
						<? endif ?>
					</ul>
				</div>
				<!-- <form action="" class="pull-right">
					<input class="input-small" type="text" placeholder="Username">
					<input class="input-small" type="password" placeholder="Password">
					<button class="btn" type="submit">Sign in</button>
				</form> -->
			</div>
		</div>
	</div>

	<div class="container">

		<div class="content">
			<div class="page-header">
				<h1><?=$title_for_layout?> <small><?=$this->name?>#<?=$this->action?></small></h1>
			</div>
			<div class="row">
				<?php
				if (isset($hide_right_column)) {
					$span = 14;
				} else {
					$span = 10;
				}
				?>
				<div class="span<?=$span?>">
					<?php
					echo $this->Session->flash();
					echo $this->Session->flash('auth');
					?>
					<?=$content_for_layout?>
				</div>
				<? if (!isset($hide_right_column)) : ?>
				<div class="span4">
					<h3>Secondary content</h3>
				</div>
				<? endif ?>
			</div>
		</div>

		<footer>
			<p>&copy; <?=date('Y')?> Andrew Weir, All Rights Reserved.</p>
		</footer>

	</div> <!-- /container -->
	<?=$this->Js->writeBuffer();?>
</body>
</html>