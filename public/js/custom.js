/*==================================================================
[ Login ]*/
$('.js-show-login').on('click',function(){
	$('.js-panel-login').addClass('show-header-cart');
});
$('.js-hide-login').on('click',function(){
	$('.js-panel-login').removeClass('show-header-cart');
});
/*==================================================================
[ Register ]*/
$('.js-show-register').on('click',function(){
	$('.js-panel-login').removeClass('show-header-cart');
	$('.js-panel-register').addClass('show-header-cart');
});
$('.js-hide-register').on('click',function(){
	$('.js-panel-register').removeClass('show-header-cart');
});