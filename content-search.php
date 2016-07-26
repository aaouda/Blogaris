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
    <h2>
     <a href="<?php the_permalink(); ?>">
       <?php the_title(); ?>
     </a>
     </h2>
  </div>
  <div class="post-content">
    <?php echo substr(get_the_excerpt(), 0, 250) ?>
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

    <button class="readmore">
      <a href="<?php the_permalink(); ?>">Read More</a>
    </button>
  </div>
</article>
