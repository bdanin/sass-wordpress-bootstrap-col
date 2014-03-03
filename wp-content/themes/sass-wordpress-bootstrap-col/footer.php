			<footer role="contentinfo" class="footer-wrapper clearfix">
			
				<div id="inner-footer" class="clearfix">
		          <hr />
		          <div id="widget-footer" class="clearfix row-fluid">
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : ?>
		            <?php endif; ?>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) : ?>
		            <?php endif; ?>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3') ) : ?>
		            <?php endif; ?>
		          </div>
					
					<nav class="clearfix">
						<?php bones_footer_links(); // Adjust using Menus in Wordpress Admin ?>
					</nav>
				
				</div> <!-- end #inner-footer -->
				
				<div id="footcopy">
          <h4>Georgia State University College of Law</h4>
          
          <p id="footaddress">
          140 Decatur St., Atlanta, Georgia 30303<br>
          Phone: (404) 413-9000<br> 
          </p>
          
          <p id="footlegal">
          &copy; <?php echo date("Y"); ?> Georgia State University College of Law &bull; <a href="http://law.gsu.edu/legal_statement.html" title="View Legal Statement">View Legal Statement</a> &bull; <a href="http://law.gsu.edu/about/5004.html">Contact us</a> &bull; <a href="http://law.gsu.edu/technology/forms/web_issue.php" target="_blank">Report a problem</a>
          <br>
          &copy; <?php echo date("Y"); ?> Georgia State University &bull; <a href="http://www.gsu.edu/legal-statement">View legal statement</a> &bull; <a href="http://www.gsu.edu/contact.html">Contact us</a> &bull; <a href="http://gsu.uservoice.com">Send feedback</a>
          </p>
        </div>

        <div id="socialicons">
          <a href="http://law.gsu.edu/facebook.com" id="fb"></a>
          <a href="http://law.gsu.edu/twitter.com" id="twitter"></a>
          <a href="http://law.gsu.edu/linkedin.com" id="linkedin"></a>
          <a href="http://gsu.edu/itunesu/" id="itunes"></a>
          <a href="http://law.gsu.edu/gsulawnews.rss" id="rss"></a>
        </div>

			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->
				
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>

	</body>

</html>