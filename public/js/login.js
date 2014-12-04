$(document).ready(function(){
	$(document).on("click",".switching", function(){
		var container = $(this).parent('div');
		var other = container.siblings('div');
		container.fadeOut("fast", function(){
			other.fadeIn();
			})
		})
	$(document).on("click", ".signin", function(){
		event.preventDefault()
		if ($('input[name="pw"]').val() == "Loukretiv" && $('input[name="user"]').val() == "demo@purchis.com") {
			window.location.href = "0/dash.html";
			} else {
				$('.loginNote').after('<p class="ft-light ft-red">Incorrect Email and Password configuration.</p>')
				}
		})
	$(document).on("click", ".agreementMade", function(){
		event.preventDefault();
		window.location.href = "signUpForm2.html"
		})
		/*
	$(document).on("click", ".authenticate", function(){
		event.preventDefault();
		if($('input[name="inviteCode"]').val() == "123-123-456") {
			window.location.href = "signUpForm.html"
			} else {
				alert("Invite code invalid.")
				}
		})*/
	$(document).on("click", ".paymentOpts li a", function(){
		$(".paymentOpts li a").css('opacity', .7);
		$(this).css('opacity', 1);
		var visaCode = "\uf1f0";
		var msCode = "\uf1f1";
		var amexCode = "\uf1f3";
		var disCode = "\uf1f2";
		var card = $(this).attr("class")
		var box = $('input[name="cardNumber"]')

		if( card == "visa"){
			box.attr('placeholder', visaCode);
			} else if( card == "mastercard") {
				box.attr('placeholder', msCode)
				} else if( card == "amex") {
					box.attr('placeholder', amexCode)
					} else if(card == "discover") {
						box.attr('placeholder', disCode);
						}
		})

	$(document).on("click", ".bringPay", function(){
		event.preventDefault()
		var address = $('input[name="address"]').val();
		var city = $('input[name="city"]').val();
		var state = $('input[name="state"]').val();
		var zip = $('input[name="zip"]').val();
		$('.billAdd').html('BILLING ADDRESS <br>'+address+',<br>'+city+', '+state+' '+zip+'<br><a style="text-align:left;" class="ft-loukblue changeAddy">Change this</a>');
		$('.paymentSet').slideDown();
		$(this).hide();
		$('html, body').animate({
			scrollTop: $('.paymentSet').offset().top
			});

		})
	$(document).on("click", ".changeAddy", function(){
		var box = $('.billAdd').parent('div');
		$('.billAdd').fadeOut("fast", function(){
			box.html('<fieldset>'+$('.billingAddress').html()+'</fieldset>')
			})
		})

	});
