$(document).ready(function () {
	$(".toggle").click(function () {
		$(".sidebar-contact").toggleClass("active"), $(".toggle").toggleClass("active");
	});

	var backButton = '<span class="slick-arrow slick-prev"><i class="bi bi-arrow-left"></i></span>';
	var nextButton = '<span class="slick-arrow slick-next"><i class="bi bi-arrow-right"></i></span>';

	$('.gallerySlider').slick({
		centerMode: true,
		slidesToShow: 3,
		infinite: true,
		prevArrow: backButton,
		adaptiveHeight: true,
		draggable: false,
		nextArrow: nextButton,
		centerPadding: '0px',
		arrows: false,
		responsive: [{
				breakpoint: 768,
				settings: {
					arrows: true,
					centerMode: false,
					slidesToShow: 1,
					draggable: true,
					adaptiveHeight: true
				}
                },
			{
				breakpoint: 480,
				settings: {
					arrows: true,
					centerMode: true,
					slidesToShow: 1
				}
                }
            ]
	});

	setTimeout(function () {
		$('#popup-modalForm').modal('show');
	}, 5000);

	$('.counter').counterUp({
		delay: 10,
		time: 2000
	});


});

var lightbox = GLightbox();

var lightboxVideo = GLightbox({
	selector: ".sitemapImg",
});

//var lightboxVideo = GLightbox({
//	selector: ".gallerySliderVideo",
//});
