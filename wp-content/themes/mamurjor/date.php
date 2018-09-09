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
                        <h1>
                           posts in <?php 
                           if(is_month()){
                               $month = get_query_var("monthnum");
                               $dateobj = DateTime::createFromFormat("!m",$month);
                               echo $dateobj->format("F");
                           }else if (is_year()){
                               echo esc_html(get_query_var("year"));
                           }else if(is_day()){
                            $day   = esc_html( get_query_var("day") );
                            $month =  esc_html(get_query_var("monthnum"));
                            $year  =  esc_html( get_query_var("year") );
                            printf("%s/%s/%s",$day,$month,$year);
                           }
                           ?>
                        </h1>
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
