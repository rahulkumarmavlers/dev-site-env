<?php
/*
Template Name: Homepage Template
*/
?>

<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-md-8">
            
            <h1>Home page</h1>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content();?>
			<?php endwhile; endif;?>
		</div>
		<div class="col-md-4">
			<?php get_sidebar();?>
		</div>
	</div>
</div>
<?php get_footer();?>