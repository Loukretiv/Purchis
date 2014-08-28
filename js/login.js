$(document).ready(function(){
	$(document).on("click",".switching", function(){
		var container = $(this).parent('div');
		var other = container.siblings('div');
		console.log(other.html())
		container.fadeOut("fast", function(){
			other.fadeIn();
			})
		})
	
	});