<div id="content" class="site-content" tabindex="-1">
	<div class="container">

		<nav class="woocommerce-breadcrumb"><a href="index.php">Home</a><span class="delimiter"><i class="fa fa-angle-right"></i></span>Blog</nav>

		<div id="primary" class="content-area">
			<main id="main" class="site-main">
				<?php require_once 'inc/blocks/blog-post.php'; ?>
				<?php require_once 'inc/components/blog-pagination.php'; ?>
			</main><!-- #main -->
		</div><!-- #primary -->

		<div id="sidebar" class="sidebar-blog" role="complementary">
			<?php require_once 'inc/components/sidebar/search-widget.php'; ?>
			<?php require_once 'inc/components/sidebar/about-widget.php'; ?>
			<?php require_once 'inc/components/sidebar/post-categories-widget.php'; ?>
			<?php require_once 'inc/components/sidebar/recent-post-widget.php'; ?>
			<?php require_once 'inc/components/sidebar/tag-widget.php'; ?>
		</div>
	</div><!-- .container -->
</div><!-- #content -->
