<div id="wrapper">
	<div id="header-wrapper">
		<div id="header">
			<div id="logo">
				<?php if(current_theme_supports("custom-logo")): ?>
				<div class="logo" >
					<?php the_custom_logo(); ?>
				</div>
			<?php 
			endif;  
			?>
				<h1><a href="<?php echo site_url(); ?>"> Site Name: <?php bloginfo("name"); ?> </a></h1>
				<p>Design by <a href="http://mamurjor.com" rel="nofollow"> <?php bloginfo("description"); ?></a></p>
			</div>
		</div>
	</div>
	<div id="menu">
		<?php 
			wp_nav_menu( array(
				'theme_location'		=>	'topmenu',
				'menu_id'				=>	'menu',
				'menu_class'			=>	'current_page_item'
			) );
		
		?>
	</div>
	<div class="container">
		<div class="row1">
			<div class="col-md-12 text-center ">
				<?php
				if(is_search()){
					?>
					<h2>
					 <?php _e("you are searching for ","mamurjor")?><?php the_search_query();?>	
					</h2>
					<?php
				}
				?>
				<?php
				echo get_search_form();
				?>
			</div>
		</div>
	</div>