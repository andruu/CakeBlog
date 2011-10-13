<?php
define('BASE_PATH', $this->Html->url('/'));
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet/less" href="<?=BASE_PATH?>bootstrap/lib/bootstrap.less" />
	<script src="http://lesscss.googlecode.com/files/less-1.1.3.min.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
	<?=$content_for_layout?>
</body>
</html>