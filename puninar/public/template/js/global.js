$(document).ready(function(){
		
	$('.partSubmenu').hover(function(){
		var no = $(this).attr('data-img');
		$('.imgSubmenu img').hide();
		$('.imgMenu' + no).fadeIn(200);
	});
	
	$('.icon-search').click(function(){
		if($(this).hasClass('active')){
			$('.isSearch').fadeOut();
			$(this).removeClass('active');
		}else{
			$('.isSearch').fadeIn();
			$('.isSearch input[type="text"]').focus();
			$(this).addClass('active');
		}
	});

	if($(window).width() < 1191){		
		$('#bottomMenu li').click(function(){
			if($(this).children().next().hasClass('submenuActive')){
				$(this).children().next().slideUp('normal');
				$(this).children().next().removeClass('submenuActive');
			}else{
				$(this).children().next().slideDown('normal');
				$(this).children().next().addClass('submenuActive');
			}
		});
	}


	$("#clickMenu").click(function(){
		if($(this).hasClass('active')){
			$('#bottomMenu').slideUp();
			$(this).removeClass('active');
		}else{
			$('#bottomMenu').slideDown();
			$(this).addClass('active');
		}
	});

});