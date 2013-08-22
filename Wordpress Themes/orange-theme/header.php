<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="pt-br">
	<head>
		<title><?php if (is_home()){

	bloginfo('name');

}elseif (is_category()){

	single_cat_title(); echo ' -  ' ; bloginfo('name');

}elseif (is_single()){

	single_post_title();

}elseif (is_page()){

	bloginfo('name'); echo ': '; single_post_title();

}else {

	wp_title('',true);

} ?></title>
			<?php wp_head();?>
			<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
			<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script>
			<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/cycle.js"></script>
			<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/cycle_function.js"></script>
		
	</head>
	<body>
		<div id="line"></div>
			<div id="box">
				<div id="header">
					<div class="logo">
						<a href="<?php echo get_settings('home'); ?>">
							<img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="Logo Orange Theme" title="Orange Theme" />
						</a>
					</div><!--Classe Logo-->
						<div class="menu">
								<ul>
									<li><a href="<?php echo get_settings('home'); ?>">Home</a></li>
            							<?php wp_list_pages('title_li='); ?>
								</ul>
							</div><!--Fecha Classe Menu Topo-->
</div><!--Fecha Bloco Topo-->