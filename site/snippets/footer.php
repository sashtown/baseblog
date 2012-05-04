<?php
/* 
Footer Snippet for the Baseblog Kirby Theme
*******************************************/
?>
		<footer id="colophon">
    	<?php echo kirbytext($site->copyright()) ?>
  		</footer>

  	</div><!-- #site -->

<!-- Piwik --> 
<script type="text/javascript">
var pkBaseURL = (("https:" == document.location.protocol) ? "https://stats.slstudio.de/" : "http://stats.slstudio.de/");
document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
</script><script type="text/javascript">
try {
var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 7);
piwikTracker.trackPageView();
piwikTracker.enableLinkTracking();
} catch( err ) {}
</script><noscript><p><img src="http://stats.slstudio.de/piwik.php?idsite=7" style="border:0" alt="" /></p></noscript>
<!-- End Piwik Tracking Code -->

</body>

</html>