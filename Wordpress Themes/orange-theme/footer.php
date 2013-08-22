<div id="clear"></div>
</div><!--Conteudo do Blog-->
			<div id="paginacao"><?php if(function_exists('wp_pagenavi')){ wp_pagenavi();}	?></div>
	</div><!--Fecha Bloco Mãe Conteudo-->
			<div id="footer">
				<div id="footerContent">
					<a href="<?php echo get_settings('home'); ?>" class="logo_footer" title="Orange Theme">
						<img src="<?php bloginfo('template_directory'); ?>/img/logo_footer.png" alt="Orange Theme" title="Orange Theme"/>
					</a>	
					<a href="http://www.cssexperts.net" class="logo_dev" title="Agência CSS Experts - Soluções Web" target="_blank">
						<img src="<?php bloginfo('template_directory'); ?>/img/dev.png" alt="Agência CSS Experts - Soluções Web" title="Agência CSS Experts - Soluções Web"/>
					</a>
				</div><!--Fecha Div Conteudo Do Rodapé-->
			</div><!--Fecha Div Footer-->
		<?php wp_footer();?>
			</body>
</html>