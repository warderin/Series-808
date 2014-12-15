		<footer>
			<div>© Series 8:08, 2014. All Rights Reserved.</div>

		</footer>

		<script type="text/javascript">
		/*$( "nav li" ).hover(
		  function() {
		    $(this).css("color", "#F26523");
		  }, function() {
		    $(this).css("color", "black");
		  }
		);
		$( "nav li:nth-child(3) > li" ).hover(
		  function() {
		    $("ul.dropdown").css("right", "200px");
		  }, function() {
		    $("ul.dropdown").css("right", "-9999px");
		  }
		);*/

		$(document).ready(
			$('nav li ul').hide().removeClass('fallback');
			$('nav li').hover(
			  function () {
			  	$(this).css("color", "#F26523");
			    $('ul', this).stop().slideDown(100);
			  },
			  function () {
			  	$(this).css("color", "black");
			    $('ul', this).stop().slideUp(100);
			  }
			);
		);
		</script>
	</body>
</html>