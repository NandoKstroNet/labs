<?php get_header();?>
                  <div id="bannerSlider">
						<div class="slide" id="slide">
						<ul>
							<li>
							<a href="#">
								<img src="<?php bloginfo('template_directory'); ?>/img/banner_giratorio.jpg" alt="Orange Theme" title="Orange Theme" width="1000" height="350"/>
							</a>
							</li>
							<li>
							<a href="#">
								<img src="<?php bloginfo('template_directory'); ?>/img/banner_giratorio_1.jpg" alt="Orange Theme" title="Orange Theme" width="1000" height="350"/>
							</a>
							</li>	
							<li>
							<a href="#">
								<img src="<?php bloginfo('template_directory'); ?>/img/banner_giratorio_2.jpg" alt="Orange Theme" title="Orange Theme" width="1000" height="350"/>
							</a>
							</li>
						</ul>
						</div><!--Classe Slide Conteudo-->
				</div><!--Fecha Bloco bannerSlider-->
			<div class="lineArco"></div><!--Fecha Div Line Arco-->
					<div id="conteudo">
						<div id="conteudoEsquerda">
							<h1>Mais Posts</h1>
							<ul>
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
			           <div id="conteudoBottom">
							</div><!--Fecha Div Conteudo Bottom-->
						</div><!--Conteudo Direita Blog-->						

				<?php get_sidebar();?>
<?php get_footer();?>