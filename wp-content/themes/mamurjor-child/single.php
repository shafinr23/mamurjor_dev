<?php 
	$mamurjor_layout_class = "col-md-8";
	if (!is_active_sidebar("sidebar1")){
		$mamurjor_layout_class = "col-md-12 offset-md-1 text-center ";
	}
?>

<?php get_header(); ?>

<body <?php body_class(array("mamurjor" , "shafin" )); ?> >
<?php get_template_part("templates/common/hero"); ?>
	<!-- end #header -->
	<!-- <div id="menu">
		<ul>
			<li class="current_page_item"><a href="#">Home</a></li>
			<li><a href="#">Blog</a></li>
			<li><a href="#">Photos</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Links</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
	</div> -->
	<!-- end #menu -->
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div class="<?php echo $mamurjor_layout_class ?>">
					
					<?php 
						while (have_posts()) {
							the_post();?>

						<div  <?php post_class(array("mamurjor"));?> >
						<h2 class="title"> <?php the_title(); ?> </h2>
						<p class="meta">Posted by <p class="meta">Posted by <?php the_author_posts_link();?> <?php echo get_the_date(); ?>
							&nbsp;&bull;&nbsp; <a href="#" class="comments">Comments (64)</a> &nbsp;&bull;&nbsp; <?php echo get_the_tag_list(); ?> </p>
						<div class="entry">
							<p>
								<?php 
									if(has_post_thumbnail()){
										$thumbnail_url = get_the_post_thumbnail_url(null,"large");
										echo '<a href="'.$thumbnail_url.'" data-featherlight="image">';
										the_post_thumbnail("thumbnail","class => 'alignleft border'" );
										echo '</a>';
									}



								?>
							</p>
							<p><?php 
								
									the_content();
									
									wp_link_pages();
                                    
                                    next_post_link();
                                    echo "<br/>";
                                    previous_post_link();
							?></p>
							</div>
						</div>
						
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



                        <?php if(comments_open()){
                            ?>
                        <div class="col-md-10 offset-md-1" >
                            <?php 
                                comments_template();
                            ?>
                        </div>

                            <?php 
                        } ?>
                        
					

							<?php
						}				
					
					?>

					
					
					
					
				</div>
				<?php if(is_active_sidebar("sidebar1")): ?>
                <div class="col-md-4">
                    <?php 
                        if(is_active_sidebar("sidebar1")){
                            dynamic_sidebar("sidebar1");
                        }
                        
                    ?>
				</div>
				<?php endif ?>

				<!-- end #content -->
				<!-- <div id="sidebar">
					<ul>
						<li>
							<h2>Aliquam tempus</h2>
							<p>Mauris vitae nisl nec metus placerat perdiet est. Phasellus dapibus semper consectetuer hendrerit.</p>
						</li>
						<li>
							<h2>Categories</h2>
							<ul>
								<li><a href="#">Aliquam libero</a></li>
								<li><a href="#">Consectetuer adipiscing elit</a></li>
								<li><a href="#">Metus aliquam pellentesque</a></li>
								<li><a href="#">Suspendisse iaculis mauris</a></li>
								<li><a href="#">Urnanet non molestie semper</a></li>
								<li><a href="#">Proin gravida orci porttitor</a></li>
							</ul>
						</li>
						<li>
							<h2>Blogroll</h2>
							<ul>
								<li><a href="#">Aliquam libero</a></li>
								<li><a href="#">Consectetuer adipiscing elit</a></li>
								<li><a href="#">Metus aliquam pellentesque</a></li>
								<li><a href="#">Suspendisse iaculis mauris</a></li>
								<li><a href="#">Urnanet non molestie semper</a></li>
								<li><a href="#">Proin gravida orci porttitor</a></li>
							</ul>
						</li>
						<li>
							<h2>Archives</h2>
							<ul>
								<li><a href="#">Aliquam libero</a></li>
								<li><a href="#">Consectetuer adipiscing elit</a></li>
								<li><a href="#">Metus aliquam pellentesque</a></li>
								<li><a href="#">Suspendisse iaculis mauris</a></li>
								<li><a href="#">Urnanet non molestie semper</a></li>
								<li><a href="#">Proin gravida orci porttitor</a></li>
							</ul>
						</li>
					</ul>
				</div> -->
				<!-- end #sidebar -->
				<div style="clear: both;">&nbsp;</div>
			</div>
		</div>
	</div>
	<!-- end #page -->
</div>
<?php get_footer(); ?>

