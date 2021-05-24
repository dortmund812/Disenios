window.onload = function(){
	$('#preloader').removeClass('active');
}
$(document).ready(function(){
	const obj = new CardContClass('#datatable', function(){externa($(this).attr('id'))}).parse();

	function externa(clase){
		console.log('Accedi desde una funcion externa: ' + clase);
		
	}
});