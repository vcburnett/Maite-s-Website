<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript">

	$(document).ready(function() {

		console.log("working");

		// Variable declarations ----------
		// IDs and Classes
		var browserWindow = $(window);
		var wrapper = $("#wrapper");
		var quote = $("#quote");
		var content = $("#content");
		var footer = $("footer")

		var browserH, wrapperH, quoteH, contentH, footerH;

		// Dynamic values
		function elementsUpdate() {
			browserH = browserWindow.height();
			wrapperH = wrapper.height();
			quoteH = quote.outerHeight(true);
			contentH = content.height();
			footerH = footer.height();

			var innerHeight = quoteH + contentH;
			var delta = browserH - (innerHeight + footerH);

			if (delta > 0) {
				footer.addClass("ftStick");
				heightAddition = (browserH - (footerH + innerHeight)) / 2;
				wrapper.css("padding-top", heightAddition + "px");
			} else {
				footer.removeClass("ftStick");
			}

		}

		// Declared functions ----------


		// Start functions ----------
		elementsUpdate();

		// ON RESIZE
		browserWindow.on("resize", function() {
			elementsUpdate();
		}).trigger("resize");

	});

</script>