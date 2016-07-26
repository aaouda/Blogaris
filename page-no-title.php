<?php
/*
  Template Name: page no title
*/
get_header(); ?>

<div class="row">
				<div class="col-md-8">
					<div class="main">

            <?php if(have_posts()) : while(have_posts()) : the_post (); ?>
						<article class="post-container">
							<div class="post-img">
                 <?php if (has_post_thumbnail()){
                   The_post_thumbnail();
                 } ?>
							</div>
							<div class="post-categorie">
								<?php the_category(); ?>
							</div>
							<div class="post-title">
								<h2>this is a static title</h2>
							</div>
              <div class="post-footer">
								<div class="post-info">
							    <span class="recent recent-author"><i class="fa fa-user"></i> <?php the_author(); ?> </span>
                  <span class="recent recent-time"><i class="fa fa-clock-o"></i> <?php the_time('d F, Y'); ?> </span>
                  <span class="recent recent-comments">
                    <i class="fa fa-comment-o"></i>
                    <?php
                    comments_popup_link( 'No comments yet', '1 comment', '% comments', 'comments-link', 'Comments off');
                    ?>
                  </span>
								</div>
							</div>
							<div class="post-content">
								<?php the_content(); ?>
							</div>
						</article>

            <?php endwhile; else: ?>
               <h2> post not found </h2>
            <?php endif; ?>
            <div class="comments_template">
               <?php comments_template(); ?>
            </div>
					</div>
				</div>

        <div class="col-md-4">
      		<?php get_sidebar(); ?>
      	</div>
</div>


<?php get_footer(); ?>
