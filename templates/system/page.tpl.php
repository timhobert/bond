<div id="page-wrapper">
	<?php if (!empty($page['navigation'])): ?>
		<nav id="navigation" role="navigation" class="navigation clearfix">
			<div class="container">
				<?php if ($logo): ?>
					<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" id="logo">
						<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
					</a>
				<?php endif; ?>
				<?php if ($site_name || $site_slogan): ?>
					<hgroup id="site-name-slogan">
						<?php if ($site_name): ?>
							<h1 id="site-name">
								<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><span><?php print $site_name; ?></span></a>
							</h1>
						<?php endif; ?>
						<?php if ($site_slogan): ?>
							<h2 id="site-slogan"><?php print $site_slogan; ?></h2>
						<?php endif; ?>
					</hgroup>
				<?php endif; ?>
				<?php print render($page['navigation']); ?>
			</div>
		</nav>
	<?php endif; ?>
	<?php // if ($page['header']): ?>
		<header id="header" role="banner" class="header clearfix">
			<div class="container">
				<?php print render($page['header']); ?>
			</div>
		</header>
	<?php // endif; ?>
	<?php if ($page['highlighted']): ?>
		<div id="highlighted" class="highlighted clearfix">
			<div class="container">
				<?php print render($page['highlighted']); ?>
			</div>
		</div>
	<?php endif; ?>
	<section id="main" role="main" class="main clearfix">
		<div class="container">
			<?php print $messages; ?>
			<?php print render($page['help']); ?>
			<?php print $breadcrumb; ?>
			<div class="content-wrapper">
				<?php if (!empty($tabs['#primary'])): ?>
					<div class="tabs-wrapper clearfix"><?php print render($tabs); ?></div>
				<?php endif; ?>
				<?php if ($action_links): ?>
					<ul class="action-links"><?php print render($action_links); ?></ul>
				<?php endif; ?>
				<?php print render($title_prefix); ?>
					<?php if ($title): ?>
						<h1 class="title" id="page-title"><?php print $title; ?></h1>
					<?php endif; ?>
				<?php print render($title_suffix); ?>
				<?php print render($page['content']); ?>
			</div>
			<?php if (!empty($page['sidebar_first'])): ?>
				<aside id="sidebar-first" role="complementary" class="sidebar-first sidebar">
					<?php print render($page['sidebar_first']); ?>
				</aside>
			<?php endif; ?>
			<?php if (!empty($page['sidebar_second'])): ?>
				<aside id="sidebar-second" role="complementary" class="sidebar-second sidebar">
					<?php print render($page['sidebar_second']); ?>
				</aside>
			<?php endif; ?>
		</div>
	</section>
	<?php if ($page['content_bottom']): ?>
		<div id="content-bottom" role="complementary" class="content-bottom clearfix">
			<div class="container">
				<?php print render($page['content_bottom']); ?>
			</div>
		</div>
	<?php endif; ?>
	<footer id="footer" role="contentinfo" class="footer clearfix">
		<div class="container">
			<?php print render($page['footer']); ?>
			<?php print $feed_icons; ?>
			<div class="hidden div-credit">Dev by <a href="http://www.div.digital" target="_blank" title="Div, Drupal Web Developers" alt="Div, Drupal Web Developers">Div</a></div>
		</div>
	</footer>
</div>