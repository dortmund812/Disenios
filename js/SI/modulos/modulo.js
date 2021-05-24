// window.onload = function(){
// 	$('#preloader').removeClass('active');
// }
$(document).ready(function(){
	// VALIDAR ESTADO DE BARRA LATERAL
	resizeBarLat();
	heightNot();
	$(window).resize(function(){
		$('.barra-lateral').removeClass('act');
		resizeBarLat();
		heightNot();
	});
	// AJUSTAR IMAGEN DE USUARIO
	$('.imgUstLat').height($('.imgUstLat').width());
	$('.menu-opcion').on('click', function(){
		$('.menu-opcion').removeClass('seleccionado');
		$(this).addClass('seleccionado');
	});
	$('.contenedor-notif').hide();
	// OPCIONES BARRA DE NOTIFICACIONES
	$('.opc-mnu-not').on('click', function(e){
		e.preventDefault();
		if ($('#'+$(this).attr('name')).hasClass('en_pantalla')) {
			$('#'+$(this).attr('name')).removeClass('en_pantalla');
		} else {
			$('.seccion-notif').removeClass('en_pantalla');
			$('#'+$(this).attr('name')).addClass('en_pantalla');
		}
	});
	// TOOLTIP BARRA LATERAL
	$('.menu-opcion').hover(function(){
		if($('.barra-lateral').hasClass('act')){
			let ancho = $('.barra-lateral').width();
			$('#tooltitle').text($(this).attr('data-title'));
			$('#toolicon').addClass($(this).children('i').attr('class'));
			$('.toolmenu').css({
				'opacity':'1',
				'top': ($(this).position().top + $('.menu-opcion').height()),
				'left':($(this).offset().left + ancho + $('.toolmenu').width())
			});
		}
	}, function(){
		$('.toolmenu').css({'opacity':'0'});
		$('#toolicon').attr('class', '');
	});
	// CLICK BARRA LATERAL
	$('.tglBarLat').on('click', function(){
		togBarLat();
	});
	// BARRA LATERAL DE NOTIFICACIONES
	$('.contenido-notif').on('click', function(e){
		if ($('.menu-notif').is(':hover') == true) {
			e.preventDefault();
		} else {
			cerrarNotif();
		}
	});
	$(".seccion-notif").on("click",function(e){
	    return false;
	});
	// ELIMINAR FUNCION CLICK DERECHO
	$("body").on("contextmenu",function(e){
		alert('Accion prohibida');
		return false;
	});
	// CERRAR NOTIFICACIONES
	$('#cerrar_notificaciones').on('click', function(){
		cerrarNotif();
	});
	// ABRIR NOTIFICACIONES
	$('#notifBarSupIc').on('click', function(){
		abrirNotif();
	});
	// ANIMACIONES BARRA LATERAL
	function togBarMin(){
		$('.barra-lateral').toggleClass('actRs');
		if ($('.barra-lateral').hasClass('actRs')) {
			$('.tglBarLat').css({'z-index':'110','left':$('.barra-lateral').width() - 45});
		} else {
			$('.tglBarLat').css({'z-index':'0','left':'0'});
		}
	}
	// TOGGLE BARRA LATERAL
	function togBarLat(){
		if ($(window).width() > 576) {
			$('.barra-lateral').toggleClass('act');
			var excTog = setInterval(function(){
				$('.imgUstLat').height($('.imgUstLat').width());
				heightOpc();
			}, 1);
			setTimeout(function(){
				clearInterval(excTog);
			}, 500);
			if ($('.barra-lateral').hasClass('act')) {
				localStorage.setItem('barNav', 'true');
			} else {
				localStorage.setItem('barNav', 'false');
			}
		} else {
			togBarMin();
			$('.menu-opcion').on('click', function(){
				$('.tglBarLat').click();
			});
		}
		$('.tglBarLat').toggleClass('act');
		$('.imgUstLat').height($('.imgUstLat').width());
	}
	// RESIZE BARRA LATERAL
	function resizeBarLat(){
		if ($(window).width() > 576){
			if (localStorage.getItem('barNav') === 'true') {
				$('.barra-lateral').addClass('act');
				var excTog = setInterval(function(){
					$('.imgUstLat').height($('.imgUstLat').width());
					heightOpc();
				}, 1);
				setTimeout(function(){
					clearInterval(excTog);
					heightOpc();
				}, 500);
			} else {
				$('.barra-lateral').removeClass('act');
			}
		}
		heightOpc();
	}
	// ABRIR NOTIFICACIONES
	function abrirNotif(){
		$('.contenedor-notif').show(0, function(){
			$('.menu-notif').animate({
				right: '0px'
			}, 500);
		});
	}
	// CERRAR NOTIFICACIONES
	function cerrarNotif(){
		$('.titular-notif').toggleClass('act');
		$('.menu-notif').animate({
			right: '-285'
		}, 500, function(){
			$('.contenedor-notif').hide();
		});
		$('.seccion-notif').removeClass('en_pantalla');
	}
	function heightOpc(){
		var heightTiUs = $('.titular').height() + $('.usrLat').height();
		var height = $(window).height() - heightTiUs;
		$('.menu-lateral-princ').height(height);
	}
	function heightNot(){
		var heightTiNot = $('.titular-notif').height() + 36;
		var height = $('.contenedor-notif').height() - heightTiNot;
		$('.opc-mnu').height(height);
	}
	// INFORMACION USUARIO
	$.ajax({
		url: '../../php/SI/modulos/infoUser',
		type: 'POST',
		dataType: 'json'
	})
	.done(function(response){
		$('.usrImgJson').attr('src', response[0]);
		$('.nombre-usuario').text(response[1]);
		$('.rol-cliente').text(response[2]);
		$('#preloader').removeClass('active');
	})
	.fail(function(response){
		console.log('Error: ' + response);
	});
});