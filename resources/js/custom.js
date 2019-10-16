/*==================================================================
[ Account ]*/
$('.js-show-account').on('click',function(){
	$('.js-panel-account').addClass('show-header-account');
});

$('.js-hide-cart').on('click',function(){
	$('.js-panel-account').removeClass('show-header-account');
});