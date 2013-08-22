<?php get_header();?>
	<div id="categoria">
	<span class="tituloO">Categoria: <?php the_category(" , ");?></span>
		<ul>
		<?php if (have_posts()): while (have_posts()): the_post();?>
				<li>
					<span >
					<strong class="dia"><?php the_time('j');?></strong>
					<strong class="mes"><?php the_time('M');?></strong>
					<strong class="mes"><?php the_time('Y');?></strong>
					</span>
					<a href="<?php the_Permalink();?>">
					<h1><?php the_title();?></h1>
					<p><?php the_excerpt();?></p>
					</a>
				</li>
					<?php endwhile; else:?>
		<?php endif;?>
		</ul>
	</div><!--Fecha Div Categoria-->
<?php get_footer();?>
