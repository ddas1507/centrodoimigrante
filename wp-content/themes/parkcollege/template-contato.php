<?php 
/*
	template name: Contato
*/
	get_header();
?>	
	<!-- BEGIN .page-header -->
	<div class="page-header clearfix">
		
		<div class="page-header-inner clearfix">
		
		<div class="page-title">
			<h2><?php the_title(); ?></h2>
			<div class="page-title-block"></div>
		</div>
		
		<div class="breadcrumbs">
			<p><a href="index.html">Home</a> &#187; Contact Us</p>
		</div>
		
		</div>
		
	<!-- END .page-header -->
	</div>
	
	<!-- BEGIN .content-wrapper -->
	<div class="content-wrapper page-content-wrapper clearfix">
		
		<!-- BEGIN .main-content -->
		<div class="main-content page-content">
			
			<!-- BEGIN .inner-content-wrapper -->
			<div class="inner-content-wrapper">
			
			<p>Integer congue ligula at massa suscipit condimentum. Pellentesque euismod, justo eu elementum sollicitudin, ligula lacus vehicula est, sit amet bibendum ante ante non tortor. Sed tempor erat ut tortor eleifend condimentum. Quisque vel orci nulla, et ultrices urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
			
			<form action="#" id="contactform" class="clearfix" method="post">

				<div class="field-row">
					<label for="contact_name">Name <span>(required)</span></label>
				    <input type="text" name="contact_name" id="contact_name" class="text_input" value="" />
				</div>

				<div class="field-row">
					<label for="email">Email <span>(required)</span></label>
					<input type="text" name="email" id="email" class="text_input" value="" />		
				</div>

				<div class="field-row">
					<label for="message_text">Message</label>
					<textarea name="message" id="message_text" class="text_input" cols="60" rows="9"></textarea>
				</div>

				<input class="button1" type="submit" value="Send Email" id="submit" name="submit">

			</form>
			
			<!-- END .inner-content-wrapper -->
			</div>
			
		<!-- END .main-content -->
		</div>
		
		<!-- BEGIN .sidebar-right -->
		<div class="sidebar-right page-content">
			
			<!-- BEGIN .content-block -->
			<div class="content-block">
				
				<h3 class="block-title">Contact Info</h3>
				
				<ul class="contact-widget">
					<li><span class="contact-phone">1-800-888-8888</span></li>
					<li><span class="contact-email">email@website.com</span></li>
				</ul>
				
			<!-- END .content-block -->	
			</div>
			
			<!-- BEGIN .content-block -->
			<div class="content-block">
				
				<h3 class="block-title"><a href="#">Location</a></h3>
				
				<p>Park College,<br />
				49 Kings Road West,<br />
				Islington,<br />
				London, N1</p>
				
				<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
				<div id="google-map"></div>
				
				<script type="text/javascript">
					
					var latlng = new google.maps.LatLng(0, 0);
					var myOptions = {
						zoom: 14,
						center: latlng,
						scrollwheel: true,
						scaleControl: false,
						disableDefaultUI: false,
						mapTypeId: google.maps.MapTypeId.ROADMAP
					};
					
					var map = new google.maps.Map(document.getElementById("google-map"),
						myOptions);

					    var geocoder_map = new google.maps.Geocoder();var map_address = 'London, UK';geocoder_map.geocode( { 'address': map_address}, function(results, status) {
							if (status == google.maps.GeocoderStatus.OK) {
								map.setCenter(results[0].geometry.location);

									var marker = new google.maps.Marker({
										map: map, 

										position: map.getCenter()
									});var contentString = "<h4>StyleMag</h4><p>1 London Road, SE1</p>";
						
										var infowindow = new google.maps.InfoWindow({
											content: contentString
										});google.maps.event.addListener(marker, 'click', function() {
									 		infowindow.open(map,marker);
										});} else {
									alert("Geocode was not successful for the following reason: " + status);
								}
					});
				</script>
				
			<!-- END .content-block -->	
			</div>
		
		<!-- END .sidebar-right -->
		</div>
	
	<!-- END .content-wrapper -->
	</div>

	<?php get_footer();?>	
	
	<!--JavaScript-->
	<script type="text/javascript" src="js/jquery-1.9.1.js"></script>
	<script type='text/javascript' src='js/jquery-ui.js'></script>
	<script type="text/javascript" src="js/superfish.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="js/tinynav.min.js"></script>
	<script type="text/javascript" src="js/jquery.uniform.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>

<!-- END body -->
</body>
</html>