<?php get_header();?>
	<div id="single">
		<div id="singleCont">
			<?php if (have_posts()): while (have_posts()): the_post();?>
			<div class="titu">
				<span class="titulo"><?php the_title();?></span>
				<span class="meta">Por: <strong><?php the_author();?> </strong>  em:  <strong><?php the_time('d/M/Y');?> </strong> | 
         Comentários: <a href=""><?php comments_popup_link('0 comentário','1 comentário','% Comentários'); ?></a> |
         Views: <a href=""><?php if(function_exists('the_views')) { the_views(); } ?></a>
				</span>
			</div><!--Informações titulo, data etc-->	
					<?php the_content();?>
					
					<span class="comentarios"><?php comments_template(); ?></span>		
			<?php endwhile; else:?>
		<?php endif;?>
</div><!--Fecha div single conteudo-->
<?php get_sidebar();?>
</div><!--Fecha div single-->
<?php get_footer();?>