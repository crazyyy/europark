
(function($){ 

$(document).ready(function() {
/*
$("#UploadButton").ajaxUpload({
url : "http://dev.europark.by/wp-content/upload.php",
name: "file",
onSubmit: function() {
    $('#InfoBox').html('Uploading ... ');
},
onComplete: function(result) {
    $('#InfoBox').html('File uploaded with result' + result);
}
});*/

$('.ninja-forms-field-error').on('click',function(){
	$(this).css("display","none");
});


/* респонсив вконтактика */
/*$('.g_maps').load(function() {
	console.log( $('.g_maps').contents().find('body').attr('display','none'));
});*/

var block_layer= $('.block-layer');
block_layer.click(function(){
	$(this).detach();
});

/*
$('.wrap-element').hover(function(){
	//console.log('тык');
	//$(this).find('.img-title').show("slide", { direction: "right" }, 2000);  show
	//if( $(this).css('display')=='none' ){
		$(this).find('.img-title').animate({width: "show"}, 1000,
				function(){
				$(this).find('h5').animate({opatity: "show"}, 200);
				$(this).find('p').animate({opatity: "show"}, 200);
				$(this).find('button').animate({opatity: "show"}, 200);
			}
		);
	//}
},
function(){
	//console.log('НЕтык');
	//if( $(this).css('overflow')=='auto' ){
		$(this).find('.img-title').animate({width: "hide"}, 1000);
		$(this).find('h5').animate({opatity: "hide"}, 100);
		$(this).find('p').animate({opatity: "hide"}, 100);
		$(this).find('button').animate({opatity: "hide"}, 100);
	//}
}
);*/


$('.wrap-element').hover(
function(){
	if($(this).find('.img-title h5 p').text()!=""){
		$(this).find('.img-title').css('opacity',1);
	}
},
function(){
	if($(this).find('.img-title h5 p').text()!=""){
		$(this).find('.img-title').css('opacity',0);
	}
});


/*
	$(this).find('.img-title').toggle( 
       function() { 
            $('.wrap-element').hide("slide", { direction: "right" }, 1000); 
       }, 
         function() { 
             $('.wrap-element').show("slide", { direction: "right" }, 500); 
        } 
     );
*/


	// = Добавляем ссылку наверх к заголовку
	//$('h2').append('<a href="#header">top</a>');

	// = Вешаем событие прокрутки к нужному месту
	//	 на все ссылки якорь которых начинается на #
	$('a[href^="#"]').bind('click.smoothscroll',function (e) {
		e.preventDefault();

		var target = this.hash,
		$target = $(target);

		$('html, body').stop().animate({
			'scrollTop': $target.offset().top
		}, 900, 'swing', function () {
			window.location.hash = target;
		});
	});


	//$('.top-menu li a').slabText();
	
	
	$(window).scroll(function(){
			var distanceTop = 350;
			if  ($(window).scrollTop() > distanceTop){
				//$('.top_menu').animate({'bottom':'0px'},300);
				if(!$('.top_menu').hasClass('navbar-fixed-top')){
					$('.top_menu').addClass('navbar-fixed-top').addClass('top_menu_fixed');
				}
			}
			else{
				//console.log('lol '+$(window).scrollTop()+':'+ distanceTop);
				if($('.top_menu').hasClass('navbar-fixed-top')){
					$('.top_menu').removeClass('top_menu_fixed navbar-fixed-top');
				}
				//setTimeout(function() { $('.top_menu').removeClass('navbar-fixed-top'); }, 500);
			}
		});
		
		
	$(window).scroll(function(){
			if ($(window).scrollTop() > 823){
				//$('.top_menu').animate({'bottom':'0px'},300);
				if($('.add_new_item').hasClass('opatity_hide')){
					$('.add_new_item').removeClass('opatity_hide');
					//console.log($(window).scrollTop());
				}

			}
			else{
				if(!$('.add_new_item').hasClass('opatity_hide')){
					$('.add_new_item').addClass('opatity_hide');
					//console.log($(window).scrollTop());
				}
			}
		});
		

});

})(jQuery);




