<?php
/**
 * @author Nezzy
 * @date 3/12/2012
 * @brief
 *
 */
?>
<div id="footer-top" class="row">
	<div id="copyright" class="span3">
		<span>&copy;</span><a href="/"><img src="/assets/img/matrix42-footer-logo.png" alt="Copyright Matrix42 <?=date('Y')?>" /></a><span><?=date('Y')?></span>
	</div><!-- copyright -->
	<div id="social-link" class="span3 offset10">
		<ul id="social-links">
			<li><a id="blog" href="http://blog.matrix42.com" target="_blank">Blog</a></li>
			<li><a id="facebook" href="http://www.facebook.com/matrix42page" target="_blank">Facebook</a></li>
			<li><a id="twitter" href="https://twitter.com/matrix42man" target="_blank">Twitter</a></li>
			<li><a id="linkedin" href="http://www.linkedin.com/company/45631?trk=tyah" target="_blank">LinkedIn</a></li>
		</ul>
	</div><!-- social-link -->
</div><!-- footer-top -->
<div id="footer-links" class="row">
	<div id="solutions-foot" class="span3 offset2 border-right">
		<h3>Solutions</h3>
		<ul class="link-list">
		<?php foreach($solution_links as $solution): ?>
			<li><a href="<?=$solution->url?>"><?=$solution->title?></a></li>
		<?php endforeach; ?>
		</ul>
	</div><!-- solutions-foot -->
	<div id="addons-foot" class="span3 border-right">
		<h3>Add-Ons</h3>
		<ul class="link-list">
		<?php foreach($addon_links as $addon): ?>
			<li><a href="<?=$addon->url?>"><?=$addon->title?></a></li>
		<?php endforeach; ?>
		</ul>
	</div><!-- addons-foot -->
	<div id="about-foot" class="span3 border-right">
		<h3>About</h3>
		<ul class="link-list">
			<li><a href="/press">Press</a></li>
			<li><a href="/press/awards">Awards</a></li>
			<li><a href="/press/publications">Publications</a></li>
			<li><a href="/customers">Case Studies</a></li>
		<?php if(\Helper::has_event()): ?>
			<li><a href="/events">Events</a></li>
		<?php endif;?>
		<?php if(\Helper::has_event('webinar')): ?>
			<li><a href="/events/webinars">Webinars</a></li>
		<?php endif;?>
		<?php if(\Helper::has_event('conference')): ?>
			<li><a href="/events/conferences">Conferences</a></li>
		<?php endif;?>
		<?php if(\Helper::has_event('training')): ?>
			<li><a href="/events/trainings">Trainings</a></li>
		<?php endif;?>
		<?php if(\Helper::has_event('partner')): ?>
			<li><a href="/events/partners">Trainings</a></li>
		<?php endif;?>
		</ul>
	</div><!-- about-foot -->
	<div id="navigate" class="span3">
		<h3>Navigate</h3>
		<ul class="link-list">
			<li><a href="/request_a_call">How to Buy</a></li>
			<li><a href="http://blog.matrix42.com/" target="_blank">Marix42 Blog</a></li>
			<li><a href="/partners/technology">Technology Partners</a></li>
			<li><a href="/partners">Resellers</a></li>
			<li><a href="/support">Services &amp; Support</a></li>
			<li><a href="/about">Contact Us</a></li>
		</ul>
	</div><!-- navigate -->
</div><!-- footer-links -->
<div class="span16 large-space"></div>
