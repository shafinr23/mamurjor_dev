
						<div <?php post_class();?> >
						<h2 class="title"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h2>
						<p class="meta">Posted by <a href="#"><?php the_author(); ?></a> <?php echo get_the_date(); ?>
							&nbsp;&bull;&nbsp; <a href="#" class="comments">Comments (64)</a> &nbsp;&bull;&nbsp; <?php echo get_the_tag_list(); ?> </p>
                            <span class="dashicons dashicons-controls-skipforward"></span>
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
								
									the_excerpt();
								
							?></p>
							</div>
						</div>
					