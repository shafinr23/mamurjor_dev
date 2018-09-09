<?php get_header(); ?>
<body <?php body_class(); ?> >

<?php get_template_part("templates/common/hero"); ?>
	<!-- end #header -->

	<!-- end #menu -->
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
                <div class="author">
							<div class="row">
								<div class="col-md-3 authorimg ">
									<?php
										echo get_avatar(get_the_author_meta("id"));
									?>
								</div>
								<div class="col-md-9 authordis ">
									<h4>
										<?php echo get_the_author_meta("display_name"); ?>
									</h4>
									<p>
										<?php echo get_the_author_meta("description"); ?>
									</p>
								</div>
							</div>
						</div>
					

					<?php 
						while (have_posts()) {
							the_post();
                            ?>
                            <h2>
                                <a href="<?php the_permalink(); ?>">
                            <?php
                            the_title();
                            ?>
                            </a>
                            </h2>
                            
                            <?php
						}				
					
					?>

					
					
					<div class="page-bgtop" >
						
						<div>
							<?php 
								
								the_posts_pagination(array(
									"screen_reader_text" => ' ',
									"prev_text" => "< ",
									"next_text" => ">"
								));

							?>
						</div>

					</div>
					
				</div>

				
				<div style="clear: both;">&nbsp;</div>
			</div>
		</div>
	</div>
	<!-- end #page -->
</div>
<?php get_footer(); ?>
