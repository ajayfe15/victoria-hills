$(document).ready(function () {
	$(".toggle").click(function () {
		$(".sidebar-contact").toggleClass("active"), $(".toggle").toggleClass("active");
	});
});

var lightbox = GLightbox();

var lightboxVideo = GLightbox({
	selector: ".sitemapImg",
});
var lightboxVideo = GLightbox({
	selector: ".event-2",
});
var lightboxVideo = GLightbox({
	selector: ".event-3",
});
var lightboxVideo = GLightbox({
	selector: ".event-4",
});
