<?php
define('BASE_PATH', $this->Html->url('/'));
?>
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
	<script src="http://lesscss.googlecode.com/files/less-1.1.3.min.js" type="text/javascript" charset="utf-8"></script>

	<!-- Le fav and touch icons -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
</head>

<body>

	<div class="topbar">
		<div class="fill">
			<div class="container">
				<a class="brand" href="<?=BASE_PATH?>"><?=Configure::read('Site.title')?></a>
				<ul class="nav">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
				<div id="profile" class="pull-right">
					<ul>
						<li><?=$this->Html->link('Login', array('controller' => 'users', 'action' => 'login'))?></li>
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
				<div class="span10">
					<?php
					echo $this->Session->flash();
					echo $this->Session->flash('auth');
					?>
					<?=$content_for_layout?>
				</div>
				<div class="span4">
					<h3>Secondary content</h3>
				</div>
			</div>
		</div>

		<footer>
			<p>&copy; <?=date('Y')?> Andrew Weir, All Rights Reserved.</p>
		</footer>

	</div> <!-- /container -->

</body>
</html>