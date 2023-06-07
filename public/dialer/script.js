$('.row a').on('click', function() {
	var $store = $('input'),
			$number = $('.call'),			
			dialed = $(this).text();
	
	$store.val($store.val() + dialed);
	$number.attr('href', 'tel:' + $store.val());
	$store.focus();
});