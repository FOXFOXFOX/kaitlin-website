$(document).ready(
	function() {
		$('.thumbnail').fadeTo('normal', 1);
		$('.thumbnail').hover(
			function() { $(this).fadeTo('normal', 0.5); },
			function() { $(this).fadeTo('normal', 1); }
		);
	}
);