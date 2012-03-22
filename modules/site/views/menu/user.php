<?php if ($user): ?>
<div id="login">
	<div id="login-block">
		<span id="logged-in-text">Hi, <strong><?=$user->full_name?></strong></span>
		<span class="bar">|</span>
		<span><a href="/<?=arr::get(Kohana::$config->load('users.section'), get_class($user))?>/account">Account</a></span>
		<span class="bar">|</span>
		<span><a href="/logout">Log out</a></span>
	</div> <!-- login-block -->
</div> <!-- login -->
<div class="clear"></div>
<?php endif; ?>