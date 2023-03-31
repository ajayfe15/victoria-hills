$(document).ready(function () {
	$(".toggle").click(function () {
		$(".sidebar-contact").toggleClass("active"), $(".toggle").toggleClass("active");
	});
	var backButton = '<span class="slick-arrow slick-prev">&#8592;</span>';
	var nextButton = '<span class="slick-arrow slick-next">&#8594;</span>'
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
