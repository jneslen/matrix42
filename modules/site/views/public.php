<?php
/**
 * @author jeffn
 * @date 03/20/2012
 * @brief
 *
 */
defined('SYSPATH') OR die('No direct access allowed.');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?=$title?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="/favicon.ico" type="image/x-icon">
		<script type="text/javascript" src="http://use.typekit.com/dqk5yrb.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		<?=Request::$current->scripts()?>
		<link href="/assets/css/bootstrap.css" rel="stylesheet">
		<?=Request::$current->styles()?>
	</head>
<body>
<?=$header?>
<div id="main-container" class="container">
	<div id="main-row" class="row">
	<?php if($breadcrumb): ?>
		<div id="breadcrumb" class="span16"><?=$breadcrumb?></div>
	<?php endif; ?>
		<?=$banner?>
		<?=$sidebar?>
		<?=$content?>
		test
	</div><!-- main-row -->
</div><!-- main-container -->
<div id="footer" class="container">
	<?=$footer?>
</div><!-- footer -->
</body>
</html>