<?php get_header();?>
<div id="err">
	<h1 style="color:#f00; float:left; padding:3px;">Página não encontrada!</h1>
				<div id="conteudoEsquerda">
							<h1>Continue navegando em nosso blog</h1>
							<ul>
							<?php query_posts('showposts=4');?>
							  <?php if (have_posts()): while (have_posts()) : the_post();?>	
								<li>
									<?php $key="img";
									$img = get_post_meta($post->ID,$key,true);?>
								<span><a href="#" title="#"><?php comments_popup_link('0','1','%'); ?></a></span>
								<a href="<?php the_Permalink();?>" title="<?php the_title(); ?>">
									<h2><?php the_title();?></h2>
									<?php if(isset($img) && $img >= '1'){ ?> 
									<img src="<?php $key="img";echo get_post_meta($post->ID,$key,true);?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" width="660" height="175">
										<?php }else{}?>
										<p><?php the_excerpt();?></p>
									</a>
								</li>			
							  <?php endwhile; else:?>
						<?php endif;?>
				<?php wp_reset_query(); ?> 	
		</ul>
</div>
<?php get_sidebar();?>
<?php get_footer();?>