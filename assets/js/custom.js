$(document).ready(function () {
	$(".toggle").click(function () {
		$(".sidebar-contact").toggleClass("active"), $(".toggle").toggleClass("active");
	});
	var backButton = '<span class="slick-arrow slick-prev"><i class="bi bi-arrow-left"></i></span>';
	var nextButton = '<span class="slick-arrow slick-next"><i class="bi bi-arrow-right"></i></span>'
	$('.gallerySlider').slick({
		centerMode: true,
		slidesToShow: 3,
		prevArrow: backButton,
		nextArrow: nextButton,
		centerPadding: '0px',
		arrows: false,
		responsive: [{
				breakpoint: 768,
				settings: {
					arrows: true,
					centerMode: true,
					slidesToShow: 3
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

});

var lightbox = GLightbox();

var lightboxVideo = GLightbox({
	selector: ".sitemapImg",
});

var lightboxVideo = GLightbox({
	selector: ".gallerySliderVideo",
});
