jQuery(document).ready(function ($) {
	// Album Stuffs
	let albumGroup = $('.album-group');

	albumGroup.wrapInner('<div class="active-reset"></div>').append('<span class="expand-close">+</span>');

	albumGroup.hover(function() {
		$(this).removeClass('getouttahere');
	});

	albumGroup.click(function() {
		albumGroup.removeClass('getouttahere');
		if ($(this).hasClass('active')) {
			$(this).addClass('getouttahere').removeClass('active');
			$('.album-hires-wrap').removeClass('active');
			setTimeout(function() {
				$(this).removeClass('getouttahere');
			},2000);
		} else {
			$(this).addClass('active');
			$('.album-hires-wrap').addClass('active');
		}
	});

	$('.expand-close').click(function() {
		$('.album-hires-wrap').removeClass('active');

		albumGroup.addClass('getouttahere').removeClass('active');
		setTimeout(function() {
			albumGroup.removeClass('getouttahere');
		},2000);
	});

});