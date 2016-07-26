  </div>
 </section>

    <!-- footer -->
	<footer class="footer">
		<div class="container">
			<div class="pages">
        <?PHP
          wp_nav_menu(array(
             'theme_location' => 'secondary'
          ));
        ?>
			</div>
			<div class="footer-copyright">
				© 2016 blogaris, All rights reserved.
			</div>
		</div>
	</footer>

<?php wp_footer(); ?>
</body>
</html>
