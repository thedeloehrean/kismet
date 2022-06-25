jQuery(document).ready(function ($) {
	// Album Stuffs
	let albumGroup = $('.album-group');

	albumGroup.wrapInner('<div class="active-reset"></div>');

	albumGroup.hover(function() {
		$(this).removeClass('getouttahere');
	});

	albumGroup.click(function() {
		if ($(this).hasClass('active')) {
			$(this).addClass('getouttahere').removeClass('active');
			setTimeout(function() {
				$(this).removeClass('getouttahere');
			},2000);
		} else {
			$(this).addClass('active');
		}
	});

});