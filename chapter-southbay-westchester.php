<?php include("header.php"); ?>
	
<div id="fh5co-page">
		<div id="fh5co-wrap">
			<header id="fh5co-hero" data-section="home" role="banner" style="background: url(images/2012-LAXSign4-5112012.jpg) top left; background-size: cover;" >
				<div class="fh5co-overlay"></div>
				<div class="fh5co-intro">
					<div class="container">
						<div class="row">
							
							<div class="col-md-12 fh5co-text text-center">
								<h2 class="to-animate intro-animate-1">SOUTH BAY (WESTCHESTER) Chapter</h2>
								<p class="to-animate intro-animate-2">6081 Center Drive<br />Los Angeles, CA 90045</p>
								<p class="to-animate intro-animate-3"><a href="#" class="btn btn-primary btn-md">Register Today <i class="icon-check"></i></a></p>
							</div>

						</div>
					</div>						
				</div>
			</header>
			<!-- END .header -->

		<div id="fh5co-main">
			    <div id="fh5co-features-2" data-section="benefits">
					<div class="fh5co-features-2-content">
					    <div class="container">
					    	<div class="row">
					    		<div class="col-md-8 col-md-offset-2 fh5co-section-heading text-center">
									<h2 class="fh5co-lead to-animate">Taking the BS out of the cannabis business.</h2>
									<p class="fh5co-sub to-animate">A unique event connecting high quality, legitimate California cannabis entrepreneurs and key decision makers. Find additional sources, connect with solution providers and discover new opportunities.</p>
								</div>
					    		<div class="col-md-3 col-md-offset-1 fh5co-text-wrap">
					    			<div class="row text-center">
												<figure>
													<img src="images/stage1.jpg" class="img-responsive" style="width:90%;margin:auto;opacity:0.7;">
												</figure>
											<h4 class="fh5co-uppercase-sm">Collectives and Delivery Services</h4>
											<p>Spending too much time and energy sourcing your inventory?<br />
											Get quality engagement with legitimate sources of fine cannabis products and superior services all under one roof, in an easily accessible, safe and fun environment. Avoid the backpack brigade, kitchen cooks and bathtub chemists.</p>
										
									</div>
					    		</div>
					    		<div class="col-md-3 col-md-push-4 fh5co-text-wrap">
					    			<div class="row text-center">
												<figure class="text-center">
													<img src="images/stage2.jpg" class="img-responsive" style="width:90%;margin:auto;opacity:0.7;">
												</figure>
											<h4 class="fh5co-uppercase-sm">Cultivators and Infused Product Manufacturers</h4>
											<p>Tired of the haggling, the rip-offs and lack of professionalism?<br />
											Connect with legitimate Collective and Delivery Services in your local area and maximize your valuable time in a friendly, professional and productive atmosphere. Avoid legal risks, shady characters and bad deals.</p>
										
									</div>
					    		</div>
					    		<div class="col-md-4 col-md-offset-1 col-md-pull-4 fh5co-image animate-object features-2-animate-2">
					    			<p class="text-center">
					    			<img src="images/vendorsesh-logo-lrg.png" class="" style="margin-top:5em" alt="VendorSesh">
					    			</p>
					    		</div>
					    		
					    	</div>
					    </div>
					</div>	

			    </div>
				<div id="fh5co-map" data-section="benefits">
							<div id="map_canvas"><!-- Smoke Weed Everyday --></div>
							<div id="overlay"><!-- Blunts all day --></div>
					<div class="container">
						<div class="row">
							<div class="col-md-8 col-md-offset-2 fh5co-section-heading text-center">
								<h2 class="fh5co-lead">Location</h2>
								<p class="fh5co-sub">6081 Center Drive<br />Los Angeles, CA 90045</p>
							</div>

						</div>
					</div>
				</div>


				<div id="fh5co-register" data-section="register">
					<div class="container">
						<div class="row"  style="background-image: url(images/stage5.jpg); background-attachment: fixed;">
							<div class="col-md-4">
								<script type="text/javascript" src="https://form.jotform.com/jsform/62725406597161"></script>
							</div>
							<div class="col-md-7 col-md-offset-1">
							</div>
						</div>
					</div>
				</div>




				<?php include("vendors.php"); ?>


				<?php include("newsletter.php"); ?>

				

			</div>
		</div>



	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&.js"></script>
	<script>
	var map;
	function initialize() {
	  var mapOptions = {
	    zoom: 14,
	    center: new google.maps.LatLng(33.978030, -118.391548),
	    mapTypeId: google.maps.MapTypeId.ROADMAP,
	  };
	  map = new google.maps.Map(document.getElementById('map_canvas'),mapOptions);
	  new google.maps.Marker({map:map,position:map.getCenter()});
	 }
	google.maps.event.addDomListener(window, 'load', initialize);
      </script>

<?php include("footer.php"); ?>