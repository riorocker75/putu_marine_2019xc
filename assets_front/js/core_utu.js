$(function() {
	$('[data-toggle="tooltip"]').tooltip();
});

$(document).ready(function() {
	$("#cv-lihat").click(function() {
		$(".body-cv-2").toggle();
		$(".body-search").hide();

	});
});
$(document).ready(function() {
	$("#tampil-search").click(function() {
		$(".body-search").toggle();
		$(".body-cv-2").hide();
	});
});

$(document).ready(function() {
	$("#togle-barku").click(function() {
		$(".togle-sidenav").toggle("slide", { direction: "left" },700);
		$("#sideku-trigger").toggle("slide", { direction: "left" },650);
	});
	$(".rest-sidenav").click(function() {
		$(".togle-sidenav").toggle("slide", { direction: "left" },300);
		$("#sideku-trigger").toggle("slide", { direction: "left" },500);
	});

	$('#ts-back').click(function () { 
		$(".togle-sidenav").toggle("slide", { direction: "left" },300);
		$("#sideku-trigger").toggle("slide", { direction: "left" },500);	
	});
});

$(document).ready(function () {
	$('#close-tc').click(function () { 
		$('.togle-cart').toggle("slide",{direction: "right"},400);
		$('.body-cart-togle').toggle("slide",{direction: "right"},500);
		
	});
	$('#cv-lihat').click(function () { 
		$('.togle-cart').toggle("slide",{direction: "right"},300);
		$('.body-cart-togle').toggle("slide",{direction: "right"},500);
	});

	$('.rest-cart').click(function () { 
		$('.togle-cart').toggle("slide",{direction: "right"},500);
		$('.body-cart-togle').toggle("slide",{direction: "right"},700);

		
	});
});