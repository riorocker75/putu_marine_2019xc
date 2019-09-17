$(function() {
	$('[data-toggle="tooltip"]').tooltip();
});

$(document).ready(function () {
	$('#cv-lihat').click(function () { 
		$('.body-cv-2').toggle();	
	});
});
$(document).ready(function () {
	$('#tampil-search').click(function () { 
		$('.body-search').toggle();
		
	});
});