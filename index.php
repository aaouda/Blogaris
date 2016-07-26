<?php get_header(); ?>

<div class="row">
		<div class="col-md-8">
			<div class="main">
        <?php if(have_posts()) : while(have_posts()) : the_post (); ?>
				  <?php get_template_part('content',get_post_format()); ?>
        <?php endwhile; ?>

					 <div class="col-xs-6 text-left">
						 <?php next_posts_link('<< Older Posts'); ?>
					 </div>
					 <div class="col-xs-6 text-right">
						 <?php previous_posts_link('Newer Posts >>'); ?>
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
