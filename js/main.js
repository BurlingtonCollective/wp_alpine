$(function(){
	$('.carousel').carousel({
		interval: 10000
	});
	$('.carousel-indicators [data-target="#testimonial-slider"]').first().addClass('active');
	$('.carousel')
		.on('slide.bs.carousel', function(e){
			var newHeight = $(e.relatedTarget).height();
			$(this).find('.item.active').parent().animate({
				'height': newHeight
			}, 500);
		});
	$('#testimonial-slider')
		.on('slid.bs.carousel', function(){
			var slideIndex = $(this).find('.item.active').index();
			$('.carousel-indicators [data-target="#testimonial-slider"]').each(function(indicatorIndex){
				if(indicatorIndex == slideIndex){
					$(this).addClass('active');
				}else{
					$(this).removeClass('active');
				}
			});
		});
})