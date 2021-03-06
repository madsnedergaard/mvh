<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
	<main id="top" class="container">
		<article id="content" class="row">
			<div class="headline col s12"><h1><?php the_title(); ?></h1></div>
			<div class="text-content col s12 m7"><?php the_content(); ?></div>
<!--Custom-->	<div class="text-techs right-align col s12 m4 offset-m1">
					<?php the_facts(); ?>
				</div>
		</article>
	</main>
<?php endwhile; ?>

<?php get_footer(); ?>