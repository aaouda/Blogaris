<?php get_header(); ?>

<div class="row">
		<div class="col-md-6">
			<div class="main">
        <?php if(have_posts()) : while(have_posts()) : the_post (); ?>
          <div class="page-header">
            <?php
               the_archive_title('<h1 class="page-title">','</h1>');
               the_archive_description('<div class="taxonomy-description">','</div>');
            ?>
          </div>
				  <?php get_template_part('content','archive'); ?>
        <?php endwhile; ?>

        <div class="col-xs-12 text-center">
          <?php the_posts_navigation(); ?>
        </div>
        <?php endif; ?>

				<div class="blog-pagger">
					<span class="pagenumber"> <a href="#"> prev </a> </span>
							<span class="pagenumber page-active"> <a href="#"> 1 </a> </span>
					<?php for ($i=2; $i <=4 ; $i++): ?>
					<span class="pagenumber"> <a href="#"> <?= $i ?> </a> </span>
				    <?php endfor; ?>
				    <span class="pagenumber"> <a href="#"> next </a> </span>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<?php get_sidebar(); ?>
		</div>
</div>

<?php get_footer(); ?>
