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
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet placeat delectus nam deleniti cupiditate est quis rem aut ex minima eos repudiandae dolores voluptas blanditiis omnis, ipsum deserunt, consequuntur nihil?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet placeat delectus nam deleniti cupiditate est quis rem aut ex minima eos repudiandae dolores voluptas blanditiis omnis, ipsum deserunt, consequuntur nihil?</p>

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