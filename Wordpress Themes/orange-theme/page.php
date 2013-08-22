<?php get_header();?>
	<div id="single">
		<div id="singleCont">
			<?php if (have_posts()): while (have_posts()): the_post();?>
			<div class="titu">
				<span class="titulo"><?php the_title();?></span>
			</div><!--Informações titulo, data etc-->	
					<?php the_content();?>
							
			<?php endwhile; else:?>
		<?php endif;?>
</div><!--Fecha div single conteudo-->
<?php get_sidebar();?>
</div><!--Fecha div single-->
<?php get_footer();?>