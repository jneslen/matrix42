<?php
/**
 * @author Nezzy
 * @date 3/12/2012
 * @brief
 *
 */
?>
<!-- Begin Header -->
<div id="main-nav" class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<div class="row">
				<div id="logo" class="span2<?=\Request::current()->controller() == 'index' ? ' active' : ''?>">
					<a href="/"><img src="/assets/img/matrix42-logo.png" alt="Matrix42" /></a>
				</div><!-- logo -->
				<div id="twitname" class="span2">
					<a href="http://twitter.com/matrix42man" target="_blank">@matrix42man</a>
				</div><!-- twitname -->
				<div class="span12">
					<?=$menu?>
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- navbar-inner -->
</div><!-- main-nav -->