<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?=Configure::read('Site.title')?> &middot; <?=$title_for_layout?></title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Le styles -->
	
	<link rel="stylesheet/less" href="<?=BASE_PATH?>bootstrap/lib/bootstrap.less" />
	<link rel="stylesheet/less" href="<?=BASE_PATH?>css/application.less" />
	<link rel="stylesheet/less" href="<?=BASE_PATH?>prettify/prettify.less" />
	
	<script src="<?=BASE_PATH?>js/less.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?=BASE_PATH?>js/jquery.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?=BASE_PATH?>js/rails.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?=BASE_PATH?>js/bootstrap-dropdown.js" type="text/javascript"></script>
	<script src="<?=BASE_PATH?>prettify/prettify.js" type="text/javascript"></script>
	<script src="<?=BASE_PATH?>js/application.js" type="text/javascript"></script>
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
					<ul class="nav">
						<? if (AuthComponent::user('id')) : ?>
						<li><p>Welcome back <?=AuthComponent::user('name')?></p></li>
						<li class="dropdown">
							<?=$this->Html->link('Posts', array('controller' => 'posts', 'action' => 'index'), array('class' => 'dropdown-toggle'))?>
							<ul class="dropdown-menu">
								<li>
									<?=$this->Html->link('Add post', array('controller' => 'posts', 'action' => 'add'))?>
								</li>
							</ul>
						</li>
						<li><?=$this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout'))?></li>
						<? else : ?>
						<li><?=$this->Html->link('Login', array('controller' => 'users', 'action' => 'login'))?></li>
						<? endif ?>
					</ul>
				</div>
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
					<?=$this->element('recent_posts')?>
				</div>
				<? endif ?>
			</div>
		</div>

		<footer>
			<p>&copy; <?=date('Y')?> Andrew Weir, All Rights Reserved.</p>
		</footer>

	</div> <!-- /container -->
	<?=$this->Js->writeBuffer();?>
	<script type="text/javascript">
	    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
	    var disqus_shortname = '<?=Configure::read('Disqus.shortname')?>'; // required: replace example with your forum shortname

	    /* * * DON'T EDIT BELOW THIS LINE * * */
	    (function () {
	        var s = document.createElement('script'); s.async = true;
	        s.type = 'text/javascript';
	        s.src = 'http://' + disqus_shortname + '.disqus.com/count.js';
	        (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
	    }());
	</script>
</body>
</html>