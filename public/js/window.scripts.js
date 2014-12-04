$(document).ready(function(){

	$('.w-menu').easytabs({
		panelContext: $(document),
		updateHash: false
		});  
	$(document).on("click", ".w-menu-a", function(){
		if ( $('.w-menu-container').is(':hidden') ){
			$('.w-menu-container').slideDown();
			}
		})
	$('.w-prop-tabs').easytabs({
		updateHash: false});
	$('.prop-info table tr td label').addClass('ft-semi');	
})






