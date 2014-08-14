$(document).ready(function(){
	/*AJAX Loading of panes (Sections)*/
	//Tiles

	/* End AJAX Codes*/
	$('#contactHelp').click(function(){
		$('.helpOptions').slideToggle();
		});
	$('.userInfoWrapper').click(function(){
		$('.userInfo li ul').slideToggle("fast");
	});
	
	$(document).height($(document).height() - 35);
    function goodHeight(){
		$('.dashContainer').height($(document).height() - 150);
		$('.window article').height($(document).height() - 188);
		
		}	
	$("body").on("mouseenter", goodHeight)
	$(window).resize(function(){
		goodHeight();
		});
	
	/* Open and close containers*/
	function toggleContainer(button,container){
		var txt = container.is(':visible') ? '[open]' : '[close]';
		button.html(txt);
		container.slideToggle("fast");
		};
	$(document).on("click", ".w-menu-closer", function(){
		button = $(this);
		container = $('.w-menu-container');
		toggleContainer(button,container);	
	})
	
	/* end container toggling  */

	/* Windows */
	$(document).on("click", ".w-topBar-Close", function(){
		//$('body').mCustomScrollbar("scrollTo", "left");
		var theWindow = $(this).parents('.window')
		theWindow.slideUp("fast", function(){
			theWindow.remove()
		});
		
		})

	$(document).on("click", ".w-menu-select-type", function(){
		$('.w-menu-items').slideDown();
		})
		
	/* Code for tabs on the property page
	$(document).on("load", ".w-menu", function(){
		$('.w-menu').easytabs({
		panelContext: $(document),
		updateHash: false
		});
	})*/
	
	
	 
	$(document).on("click", ".w-menu-a", function(){
		if ( $('.w-menu-container').is(':hidden') ){
			$('.w-menu-container').slideDown();
			}
		})
	//$('.w-menu').easytabs({
	//	panelContext: $(document),
	//	updateHash: false
	//	});  
	//$('.w-prop-tabs').easytabs({
	//	updateHash: false});
	$('.prop-info table tr td label').addClass('ft-semi');	
	

})