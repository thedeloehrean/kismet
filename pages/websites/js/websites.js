setTimeout(function () {
	$('.website-screenshots').removeClass('loading');

	setTimeout(function () {
		$('.website-screenshots').addClass('prepared');

		$('.website-image').each(function () {
			var containerHt = $(this).parents('.website-screenshots').height() * 0.8,
				imageHt = $(this).find('img').height(),
				diffHt = imageHt / containerHt * 100,
				fixedHt = (diffHt - 5.5),
				siteName = $(this).attr('class');

			// console.log(siteName + ': ' + containerHt + ' / ' + imageHt + ' Percentage Short = ' + fixedHt);

			if (containerHt > imageHt) {
				$(this).css('height', fixedHt + '%');
			}
		});
	}, 1000);
}, 1000);

$('.website-image').on('click', function() {
	$(this).toggleClass('active').scrollTop();
});