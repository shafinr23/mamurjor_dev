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
										$thumbnail_url = get_the_post_thumbnail_url();
										echo '<a href="'.$thumbnail_url.'" data-featherlight="image">';
										the_post_thumbnail("thumbnail","class => 'alignleft border'" );
										echo '</a>';
									}



								?>
							</p>
							<p><?php 
								
									the_content();
									?>

<!--                                --><?php
//									if (function_exists("the_field")):
//									?>
<!---->
<!--                                    <div class="metadata">-->
<!--                                        <strong>-->
<!--                                            parts name : --><?php //the_field("parts_name_"); ?>
<!--                                        </strong><br/>-->
<!--                                        <strong>-->
<!--                                            Proccesor  name :-->
<!--                                        </strong>-->
<!--                                        --><?php //$mamurjor_procecorname = get_field("processor_name_");
//                                                echo esc_html($mamurjor_procecorname);
//                                        ?>
<!--                                        <br/>-->
<!--                                        <strong>-->
<!--                                            parts name : --><?php //the_field("manufacture_date_"); ?>
<!--                                        </strong><br/>-->
<!--                                        <strong>-->
<!--                                            warrenty  :-->
<!---->
<!--                                        </strong>-->
<!--                                        --><?php //if(get_field("warranty_")): ?>
<!--                                            --><?php //echo apply_filters("the_content", get_field("time_")); ?>
<!--                                        --><?php //endif; ?>
<!--                                        <br/>-->
<!--                                        <p>-->
<!--                                    --><?php
//                                    $mamurjor_image  = get_field("image");
//
//                                    $mamurjor_image_detail = wp_get_attachment_image_src($mamurjor_image, "mammurjor-square");
//
//
//                                    echo "<img src='".esc_url($mamurjor_image_detail[0])."'/>'"
//                                    ?>
<!--                                      </p>-->
<!--                                <p>-->
<!---->
<!--                                    --><?php
//                                    $file = get_field("attachment");
//                                    if( $file ){
//                                        $file_url = wp_get_attachment_url($file);
//                                        $file_thumb = get_field("thumbnail",$file);
//                                        if($file_thumb){
//                                            $file_thumb_det = wp_get_attachment_image_src( $file_thumb);
//
//                                            echo "<a target='_blank' href='{$file_url}'><img src='".esc_url($file_thumb_det[0])."'/> </a>";
//
//
//                                        }else{
//                                            echo "<a target='_blank' href='{$file_url}'>{$file_url} </a>";
//
//                                        }
//
//                                    }
//                                    ?>
<!---->
<!--                                </p>-->
<!--                                    </div>-->
<!--                            --><?php //endif; ?>


                                <?php
                                if (class_exists("CMB2")):


                                $mamurjor_device_name = get_post_meta(get_the_ID(),"_mammurjor_device_name_",true);
                                $mamurjor_processor_name = get_post_meta(get_the_ID(),"_mammurjor_processor_",true);
                                $mamurjor_manufacturer_date = get_post_meta(get_the_ID(),"_mammurjor_manufacturer_date_",true);
                                $mamurjor_warrenty = get_post_meta(get_the_ID(),"_mammurjor_warrenty",true);
                                $mamurjor_warenty_info = get_post_meta(get_the_ID(),"_mammurjor_warenty_info_",true);
                                ?>

                                <div class="metadata">
                                    <strong>
                                        parts name : <?php echo esc_html($mamurjor_device_name); ?>
                                    </strong><br/>
                                    <strong>
                                        Proccesor  name :
                                    </strong>
                                    <?php
                                    echo esc_html($mamurjor_processor_name);
                                    ?>
                                    <br/>
                                    <strong>
                                        parts name : <?php echo esc_html($mamurjor_manufacturer_date); ?>
                                    </strong><br/>
                                    <strong>
                                        warrenty  :

                                    </strong>
                                    <?php if($mamurjor_warrenty): ?>
                                        <?php echo esc_html($mamurjor_warenty_info); ?>
                                    <?php endif; ?>
                                    <br/>

                        </div>
                            <?php endif; ?>







                            <?php

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
										echo get_avatar(get_the_author_meta("ID"));
									?>
								</div>
								<div class="col-md-9 authordis ">
									<h4>
										<?php echo get_the_author_meta("display_name"); ?>
									</h4>
									<p>
										<?php echo get_the_author_meta("description"); ?>
									</p>
                                    <?php if(function_exists("the_field")):?>
                                    <p>
                                        facebook URL : <?php the_field("facebook","user_".get_the_author_meta("ID")); ?><br/>
                                        twitter URL : <?php the_field("twitter_","user_".get_the_author_meta("ID")); ?>
                                    </p>
                                    <?php endif;?>
								</div>
							</div>
						</div>

                        <?php if(function_exists("the_field")): ?>
                            <div>
                                <h1><?php _e("Related post","mamurjor") ?></h1>
                                <?php
                                $related_post= get_field("related");
                                $mamurjor_rp = new WP_Query(array(
                                        'post__in'          =>  $related_post,
                                        'orderby'           => 'post__in'

                                ));

                                while ($mamurjor_rp->have_posts()){
                                    $mamurjor_rp->the_post();?>
                                <h4><?php the_title(); ?></h4>
                                <?php
                                }
                                wp_reset_query();

                                ?>
                            </div>
                        <?php endif; ?>





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

