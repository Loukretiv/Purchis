@extends('layouts.default')

@section('content')
	<!-- Sidebar -->
	<nav id="sideMenu" class="ft-thin">

		<ul>
			<li><a href="" class="navSelected">Properties</a></li>
			<li><a href="">Marketing</a></li>
			<li><a href="">Funding</a></li>
		</ul>
		<ul>
			<li><a href="">Resources</a></li>
			<li><a href="">Admin</a></li>
		</ul>

		<footer>
			<div class="copyInfo">
				<p>&copy; CopyRight Loukretiv, LLC. All Rights Reserved.
					<br>
					<img src="img/footer_logo.png" alt="Loukretiv, LLC.">
				</p>
			</div>
			<div id="contactHelp">
				<i class="fa fa-headphones"></i> HELP
			</div>
			<div class="helpOptions">
				<ul>
					<li><a href=""><i class="fa fa-comments-o"></i> Chat</a></li>
					<li><a href=""><i class="fa fa-phone"></i> Call</a></li>
					<li><a href=""><i class="fa fa-envelope"></i> E-Mail</a></li>
				</ul>
			</div>
		</footer>
	</nav>
	<!-- end sidebar -->


	<div id="portalContainer">
		<!-- home dashboard -->
		<section class="homeDash">

			<!-- Top Search -->
			<div class="homeSearch fl-row ft-ltblue ft-light">
				<p class="fl-half">&nbsp;</p>
				<form class="fl-half">
					<input type="search" placeholder="Search..." name="search" class="ft-light ft-ltblue">
					<input type="submit" value="search" class="ft-light ft-ltblue">
				</form>
			</div>
			<div class="clear"></div>

			<!-- logo and user information -->
			<header class="ft-white fl-row">
				<div class="fl-row">
					<h1 class="ft-thin fl-half">Purchis</h1>
					<ul class="fl-half userInfo">
						<li>
							<div class="userInfoWrapper">
								<div class="userInfo-nm">
									<span class="ft-semi">Joram Clervius</span>
									<span class="ft-light">clervius@loukretiv.com</span>
								</div>
								<img src="img/locked.jpg" class="">
							</div>
							<ul class="ft-light">
								<li><a href="" class="ft-white"><i class="fa fa-user"></i> Account Settings</a></li>
								<li><a href="" class="ft-white"><i class="fa fa-comments-o"></i> Give Feedback</a></li>
								<li><a href="{{ URL::route('logout') }}" class="ft-white"><i class="fa fa-sign-out"></i> Sign Out</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</header>
			<div class="clear"></div>
			<div class="dashContainer">
				<!-- tiles -->
				<div class="homeTiles">
					<div class="tl-thirds-wrapper">
						<div class="a-tile tl-large tl-marg-bot tl-map ft-white">
							<span class="tl-header ft-light">Notifications</span>
							<select class="tl-select ft-white ft-semi">
								<option value="deals" selected="selected">Deals</option>
								<option value="prospects" style="color:black;">Prospects</option>
								<option value="leads">Leads</option>
							</select>
							<img src="img/tl-map.png">
						</div>
						<div class="a-tile tl-square tl-marg-side tl-click tl-notifs ft-dark">
							<span class="tl-header ft-semi">Notifications</span>
							<span class="tl-counter ft-light">5</span>
							<a href="newProperty.html"></a>
						</div>
						<div class="a-tile tl-wide tl-click tl-tasks ft-dark">
							<span class="tl-header ft-semi">Tasks</span>
							<span class="tl-counter ft-light">10</span>
							<ul class="tl-tasks-wrapper">
								<li class="">
									<span class="tl-task-head ft-semi">Coral Springs Shopping Center</span>
									<span class="tl-task-content ft-light"><i class="fa fa-calendar"></i> July 31, 2014 || Call Broker</span>
								</li>
								<li class="">
									<span class="tl-task-head ft-semi">Charly Plaza</span>
									<span class="tl-task-content ft-light">Complete Deal Modeling</span>
								</li>
								<li class="">
									<span class="tl-task-head ft-semi">Sunshine Apartments</span>
									<span class="tl-task-content ft-light"><i class="fa fa-calendar"></i> August 1, 2014 || Go view Property</span>
								</li>
							</ul>
						</div>
					</div>
					<div class="tl-single-wrapper ft-white">
						<div class="a-tile tl-square tl-marg-bot tl-click tl-deals">
							<span class="tl-header ft-semi">Deals</span>
							<span class="tl-counter ft-light">4</span>
							<ul class="tl-counts-wrapper">
								<li class="tl-counts"></li>
								<li class="tl-counts"></li>
								<li class="tl-counts"></li>
								<li class="tl-counts"></li>
							</ul>
							<a href="js/json/property.json"></a>
						</div>
						<div class="a-tile tl-square tl-marg-bot tl-click tl-prospects">
							<span class="tl-header ft-semi">Prospects</span>
							<span class="tl-counter ft-light">7</span>
							<ul class="tl-counts-wrapper">
								<li class="tl-counts"></li>
								<li class="tl-counts"></li>
								<li class="tl-counts"></li>
								<li class="tl-counts"></li>
								<li class="tl-counts"></li>
								<li class="tl-counts"></li>
								<li class="tl-counts"></li>
							</ul>
							<a href="PropertyNew.html"></a>
						</div>
						<div class="a-tile tl-small-wide tl-marg-bot tl-click tl-leads">
							<span class="tl-header ft-semi">Leads</span>
							<span class="tl-counter ft-light">12</span>
						</div>
						<div class="a-tile tl-small-square tl-click tl-add">
							<span class="tl-header ft-semi ft-dark">Add Property</span>
						</div>
					</div>
				</div>
				<div class="clear"></div>

				<!-- recent properties -->
				<div class="ft-white" style="padding-bottom:25px;">
					<h2 class="ft-thin">Recent</h2>

					<div class="prop-chart">
						<div class="ft-semi">
							<span class="pro-name ">Name</span>
							<span class="pro-add ">Address</span>
							<span class="pro-type ">Type</span>
							<span class="pro-gla ">GLA <small class="ft-light">(sqft)</small></span>
							<span class="pro-units ">Units</span>
							<span class="pro-vac ">Vac.</span>
						</div>

						<a href="" title="" class="ft-white ft-thin">
							<span class="pro-name ">Jasmine Homes</span>
							<span class="pro-add ">4846 N. University Dr. #297</span>
							<span class="pro-type ">MF</span>
							<span class="pro-gla ">121,385</span>
							<span class="pro-units ">316</span>
							<span class="pro-vac ">30%</span>
						</a>
						<a href="" title="" class="ft-white ft-thin">
							<span class="pro-name ">Jasmine Homes</span>
							<span class="pro-add ">4846 N. University Dr. #297</span>
							<span class="pro-type ">MF</span>
							<span class="pro-gla ">121,385</span>
							<span class="pro-units ">316</span>
							<span class="pro-vac ">30%</span>
						</a>
						<a href="" title="" class="ft-white ft-thin">
							<span class="pro-name ">Jasmine Homes</span>
							<span class="pro-add ">4846 N. University Dr. #297</span>
							<span class="pro-type ">MF</span>
							<span class="pro-gla ">121,385</span>
							<span class="pro-units ">316</span>
							<span class="pro-vac ">30%</span>
						</a>
						<a href="" title="" class="ft-white ft-thin">
							<span class="pro-name ">Jasmine Homes</span>
							<span class="pro-add ">4846 N. University Dr. #297</span>
							<span class="pro-type ">MF</span>
							<span class="pro-gla ">121,385</span>
							<span class="pro-units ">316</span>
							<span class="pro-vac ">30%</span>
						</a>
					</div>
				</div>
			</div>
		</section>
		<!-- End of home dashboard section -->

		<section class="window w-small">
			<!-- Taskbar to close and expand -->
			<div class="w-topBar-Wrapper">
				<ul class="w-topBar ft-white">
					<li class="w-topBar-Open">
						<i class="fa fa-expand"></i>
					</li>
					<li class="w-topBar-Close">
						<i class="fa fa-chevron-left"></i>
					</li>
				</ul>
			</div>
			<!-- End taskbar -->

			<aside>
				<header class="ft-white">
					<h3 class="ft-light">Deals</h3>
					<span class="w-bread ft-light">
						Properties / Deals
					</span>
				</header>

				<nav class="w-menu">
					<ul>
						<li>
							<a href="" class="ft-white">
								<i class="fa fa-plus"></i> Add
							</a>
						</li>
						<li>
							<a href="" class="ft-white">
								<i class="fa fa-plus"></i> Add
							</a>
						</li>
					</ul>
				</nav>
			</aside>

			<article class="w-content">
				<div class="w-content-container">
					<!-- content area for the pages -->
				</div>
			</article>
		</section>
	</div>


	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="js/jquery.easytabs.js"></script>
	<script src="js/Scripts.js"></script>
	<script src="js/json/propertycall.js"></script>
	<script>


		(function($){
			$(window).load(function(){
				$("body").mCustomScrollbar({
					axis:"x",
					autoHideScrollbar:true,
					theme:"light-2",
					mouseWheel:{ enable: false }
				});
				$(".dashContainer").mCustomScrollbar({
					autoHideScrollbar:true,
					theme:"light-thin"
				});
				$(".w-content-container").mCustomScrollbar({
					autoHideScrollbar:true,
					theme:"dark-thin",
					scrollbarPosition: "outside"
				});

			});
		})(jQuery);

		$(document).ajaxComplete(function(){

			//  $('.w-menu').easytabs({
			// panelContext: $(document),
			//  updateHash: false
			//  });
			(function($){
				$(document).load(function(){
					$(".w-content-container").mCustomScrollbar({
						autoHideScrollbar:true,
						theme:"dark-thin",
						scrollbarPosition: "outside"
					});
				})
			})(jQuery);
			$('.w-prop-tabs').easytabs({
				updateHash: false});
			})
		</script>
@stop
