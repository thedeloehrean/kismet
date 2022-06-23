$('.website-stack').removeClass('loading');
setTimeout(function() {
	$('.website-stack').addClass('prepared');

	console.log('hey there');

	$('.website-image').each(function() {
		var containerHt = $(this).parents('.col-sm-8').height()*0.8,
			imageHt     = $(this).find('img').height(),
			diffHt      = imageHt/containerHt*100,
			fixedHt     = (diffHt-5.5);
		// 	siteName    = $(this).attr('class');
		//
		// console.log(siteName + ': ' + containerHt + ' / ' + imageHt + ' Percentage Short = ' + fixedHt);

		if (containerHt > imageHt) {
			$(this).css('height',fixedHt + '%');
		}
	});
},1000);

$('.website-image').on('click', function() {
	$(this).toggleClass('active').scrollTop();
});
