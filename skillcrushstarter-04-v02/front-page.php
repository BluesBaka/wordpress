<?php
/**
 * The template for the homepage
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 2.0
 */

get_header(); ?>

<section class="home-page">
	<div class="main-content">
		<div class="content">
			<?php while ( have_posts() ): the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
				<div class="social-btns">  <!-- populate or remove as many of these as you want -->
					<a href="https://twitter.com/bluesbaka" class="soc-icon tw"></a>
					<a href="https://facebook.com/badunnells" class="soc-icon fb"></a>
					<a href="https://linkedin.com/brynadunnells" class="soc-icon ln"></a>
					<a href="https://github.com/bluesbaka" class="soc-icon gh"></a>
					<a href="https://instagram.com/adventureswithbryn" class="soc-icon in"></a>
				</div>
				<a href="<?php echo site_url('/blog/'); ?>" class="btn">View My Blog</a>
			<?php endwhile; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
