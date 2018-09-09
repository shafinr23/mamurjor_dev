
<?php
/**
 *  Template Name:Wp CQ
 */

?>
<?php get_header(); ?>
<body <?php body_class(); ?> >

<?php get_template_part("templates/common/hero"); ?>
	<!-- end #header -->

	<!-- end #menu -->
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					<div class="post text-center ">
                        <?php
                        $paged = get_query_var("paged")? get_query_var("paged"):1;
                        $posts_per_page = 5;
                        //$post_id = array(59,62,26,36,40,64,51);

                            $_post = $query = new WP_Query( array(
//                              'category_name' => 'uncategorized',
//                              'tag' => 'dhaka',
                                'paged' => $paged,
                                'posts_per_page' =>  $posts_per_page,
                                'tax_query' => array(
                                        'relation' => 'OR',
                                    array(
                                      'taxonomy' => 'post_format',
                                      'field'   => 'slug',
                                        'terms' => array(
                                                'post-format-audio',
                                                'post-format-video',
                                            ),


                                    ),


                                )
                            ) );


                        ?>
                    </div>
					<?php 
						while($_post->have_posts()) {
                            $_post->the_post();

                            ?>
                            <h2>
                                <a href="<?php the_permalink();?>">
                            <?php
                            the_title();
                            ?>
                            </a>
                            </h2>
                            
                            <?php
						}
						wp_reset_query();

					
					?>


					
					
					<div class="page-bgtop" >
						
						<div>
							<?php

                            echo paginate_links(array(
                                    'total' => $_post->max_num_pages,
                                'current'   => $paged,
                                'prev_next'=> false

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
