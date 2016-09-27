$(document).ready(function() {
	$(".menuLogo a, .menuNav a").smoothScroll({
		afterScroll: function() {
			$(".menuNav a").removeClass("active");
			$(this).addClass("active");
		}
	});
	
	$("pre.htmlCode").snippet("html",{style:"ide-msvcpp",showNum:false});
	// Finds <pre> elements with the class "htmlCode"
	// and snippet highlights the HTML code within.

	$("pre.styles").snippet("css",{style:"zellner",showNum:false});
		// Finds <pre> elements with the class "styles"
		// and snippet highlights the CSS code within
		// using the "greenlcd" styling.
	
	$("pre.js").snippet("javascript",{style:"golden",showNum:false});
		// Finds <pre> elements with the class "js"
		// and snippet highlights the JAVASCRIPT code within
		// using a random style from the selection of 39
		// with a transparent background
		// without showing line numbers.
});