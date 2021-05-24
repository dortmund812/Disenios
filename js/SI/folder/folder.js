window.onload = function(){
	$('#preloader').removeClass('active');
}
$(document).ready(function(){
	$('*[data-use="acordion"]').on('click', function(){
		let acordion = $($(this).attr('data-info'));
		if(!acordion.height()){
			acordion.height(acordion[0].scrollHeight);
			$(this).children('.icon').children('i').attr('class', 'fa fa-minus');
		} else {
			acordion.height(0);
			$(this).children('.icon').children('i').attr('class', 'fa fa-plus');
		}
	});
});