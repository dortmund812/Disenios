window.onload = function(){
	$('#preloader').removeClass('active');
}
$(document).ready(function(){
	// INPUT FOCUS
	$('.input').focus(function(){
		let parent = $(this).parent().parent();
		parent.addClass('focus');
	});
	$('.input').focusout(function(){
		let parent = $(this).parent().parent();
		if ($(this).val() == '') {
			parent.removeClass('focus');
		}
	});
	// LOGIN
	$('#form').submit(function(e){
		e.preventDefault();
		$('#preloader').addClass('active');
		var datos = [];
		$('.input').each(function(index, valor){
			datos.push($(this).val());
		});
		$.ajax({
			url: 'php/SI/sistema/indexlogic',
			type: 'POST',
			dataType: 'html',
			data: {datos: datos},
		})
		.done(function(response){
			if (response) {
				window.location.href = 'config/direccion';
			} else {
				$('#preloader').removeClass('active');
			}
		})
		.fail(function(response){
			$('#preloader').removeClass('active');
			console.log('Error: ' + response);
		});
		return false;
	});
});