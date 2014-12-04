
//Function for the opening of windows based on what was clicked AJAX
$(document).on("click", ".newWindow", function(){
	var $thisLink = $(this);
	// Setting the window size of the window to be opened
	var windowSize = "";
	var addedWidth = "";
	if( $thisLink.attr('data-size') == 'w-small') {
		var windowSize = "w-small";
		var addedWidth = 350;
	} else if ( $thisLink.attr('data-size') == 'w-medium') {
		var windowSize = "w-medium";
		var addedWidth = 700;
	} else if ($thisLink.attr('data-size') == 'w-large') {
		var windowSize = "w-large";
		var addedWidth = 960;
	}
	var loadedContent = "";
	//Ajax Function to load all the items that belong in the new window goes here

	// Function to open a new window and populate it with all items
	function newWindow(){
		$('#portalContainer').width($('#portalContainer').width() + addedWidth);
		//Scroll all the way to the right;
		$('#portalContainer').append('<section class="window '+ windowSize +'">'+ loadedContent+ '</section>')
	}

	if ($thisLink.parents('.homeDash').length) {
		if ($('.window').length) {
			//Function to save everything in the last opened window
			$('.w-topBar-Close').click();
			newWindow();
		} else {
			newWindow();
		}
	} else {
		var topWindow = $thisLink.parents('.window');
		if(topWindow.is(":last-child")){
			newWindow()
		} else {
			//Save everything Happening in last opened window
			topWindow.nextAll('.window').remove();
			newWindow()
		}
	}
})