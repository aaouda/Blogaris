<?php get_header(); ?>

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

							<div class="post-title">
								
							</div>
              <div class="post-footer">
								<div class="post-info">
							    <span class="recent recent-author"><i class="fa fa-user"></i> <?php the_author(); ?> </span>
                  <span class="recent recent-time"><i class="fa fa-clock-o"></i> <?php the_time('d F, Y'); ?> </span>
								</div>
							</div>
							<div class="post-content">

							</div>
						</article>

            <?php endwhile; else: ?>
               <h2> post not found </h2>
            <?php endif; ?>

					</div>
				</div>
				<div class="col-md-4">
					<div class="sidebar">
						<aside class="widget author">
							<div class="author-bg">
								<div class="author-bg__overlay"></div>
							</div>
							<div class="author-profil">
								<div class="author-photo">
									<img src="images/profile.jpg">
								</div>
							    <div class="author-about">
							    	<h2> AAOUADA Mbark </h2>
							    	<p>
							    		A graphic designer, a web designer and developper, a friend and a legend...
							    	</p>
							    </div>
							</div>
						</aside>
						<aside class="widget popularpost">
							<div class="widget__title">
								<h2> popular posts </h2>
							</div>
							<?php for ($i=1; $i <=4 ; $i++): ?>
							<a href="#">
							    <div class="widget__post">
							    	<img src="images/image-<?= $i ?>.jpg">
							    	<div class="widget__post-meta">
							    		<div class="widget__post-title">Lorem ipsum dolor sit amet.</div>
							    		<div class="widget__post-date">
										<time>  31 Mai 2016 </time>
							    		</div>
							    	</div>
							    </div>
							</a>
							<?php endfor; ?>
						</aside>
						<aside class="widget subscribe">
							<div class="widget__title">
								<h2> subscribe now </h2>
							</div>
							<div class="widget__form">
								<p>
									Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit.
                                </p>
                                <form class="subscribe-form">
                                   <input type="email" name="email" class="subscribe-input" placeholder="Email address" autofocus>
                                   <button type="submit" class="subscribe-submit">Subscribe</button>
                                </form>
							</div>
						</aside>
					</div>
				</div>
			</div>


<?php get_footer(); ?>
