<div class="app-store links" id="inline-popups">
	<a class="app-store-btn button-wrap" target="_blank" href="https://itunes.apple.com/us/app/grow-invest-to-better-tomorrow/id1082499822?"><img src="images/download-grow-app.png" /></a>
	<a href="#signup" class="android-btn button-wrap open-popup-link app-store-btn" data-effect="mfp-zoom-in"><img src="images/coming-soon-to-android.png" /></a>
</div>

<div id="signup" class="white-popup mfp-hide">
  <div class="android-email-signup">
    <p>Our android app isn't out in the wild yet but you can still get it by joining our beta, all we need is an email to get started</p>
    <form action="">
      <ul class="signup">
        <li><input class="text-field signup-field" type="text" placeholder="Type email here" /></li>
        <li class="button-wrap"><input class="button button-green signup-field" type="submit" value="Sign up" /></li>
      </ul>
    </form>
  </div> 
</div>

<!-- Or like so: -
<a href="mobile-friendly-page.html" data-mfp-src="#test-popup" class="open-popup-link">Show inline popup</a> -->

<script type="text/javascript">
	$( document ).ready(function() {
		// Initialize popup as usual
		$('.open-popup-link').magnificPopup({
		  // Delay in milliseconds before popup is removed
		  removalDelay: 300,

		  // Class that is added to popup wrapper and background
		  // make it unique to apply your CSS animations just to this exact popup
		  mainClass: 'mfp-fade'
		});
	});
</script>