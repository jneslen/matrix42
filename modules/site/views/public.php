<?php
/**
 * @author jeffn
 * @date 03/20/2012
 * @brief
 *
 */
defined('SYSPATH') OR die('No direct access allowed.');
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta name="URL" content="http://www.matrix42.com" />
	<meta name="language" content="ENG" />
	<meta name="ROBOTS" content="noindex, nofollow" />
	<meta name="title" content="matrix42, matrix42.com" />
	<meta name="subject" content="" />
	<link rel="icon" href="/favicon.ico" type="image/x-icon" />
	<title><?=$title?></title>
	<?=Request::$current->scripts()?>
	<?=Request::$current->styles()?>
</head>
<body>
<div id="container">
	<?=$header?>
	<?=$breadcrumb?>
	<div id="content-container">
		<div class="col-full">
			<?php if($sidebar AND ($sidebar_loc == 'left')): ?>
			<div id="sidebar" class="sidebar-left">
				<?=$sidebar?>
			</div>
			<?php elseif($sidebar): ?>
			<div id="sidebar">
				<?=$sidebar?>
			</div>
			<?php endif; ?>
			<div id="content" class="col-full<?=!$sidebar ? ' plain' : ''?>">
				<div><?=$content?></div>
			</div>
			<div class="clear"></div>
		</div> <!-- col-full -->
	</div> <!-- content-container -->
	<?=$footer?>
</div><!-- End container -->
</body>
</html>