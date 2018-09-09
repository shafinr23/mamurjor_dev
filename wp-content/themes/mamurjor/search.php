<?php get_header(); ?>
<body <?php body_class(); ?> >

<?php get_template_part("templates/common/hero"); ?>
	<!-- end #header -->

	<!-- end #menu -->
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					
                    <?php 
                    if(! have_posts()){
                        ?>
                        <div class="container">
                            <div class="row">
                                <div class="com-md-12  ">
                                    <h4>
                                        <?php _e('No result found','mamurjor'); ?>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        
                        <?php
                    }
						while (have_posts()) {
							the_post();
							get_template_part("post-templates/content",get_post_format());
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

				
				<!-- end #sidebar -->
				<div style="clear: both;">&nbsp;</div>
			</div>
		</div>
	</div>
	<!-- end #page -->
</div>
<?php get_footer(); ?>
