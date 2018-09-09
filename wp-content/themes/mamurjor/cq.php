
<?php
/**
 *  Template Name:CQ
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
                        $posts_per_page = 2;
                        $post_id = array(59,62,26,36,40,64,51);
                            $_post = get_posts(array(
                               'post__in' => $post_id ,
                                'orderby'   => 'post__in',
                                'posts_per_page'   => $posts_per_page,
                                'paged'     => $paged


                            ));


                        ?>
                    </div>
					<?php 
						foreach($_post as $p) {


                            ?>
                            <h2>
                                <a href="<?php echo esc_url($p->guid)?>">
                            <?php
                            echo apply_filters("the_title",$p->post_title);
                            ?>
                            </a>
                            </h2>
                            
                            <?php
						}

					
					?>

					
					
					<div class="page-bgtop" >
						
						<div>
							<?php 
								
								echo paginate_links(array(
								    'total' => ceil(count($post_id)/$posts_per_page)
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
