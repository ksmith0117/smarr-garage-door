@extends('layout.master')

@sections('meta-data')
	<title itemprop="name">Contact | Smarr Garage Door - Columbia MO</title>
    <meta itemprop="about" name="description" content="Please contact Smarr Garage Door in Columbia, MO for all of your garage door needs!">
    <meta itemprop="author" name="author" content="Smarr Garage Door">
@stop

@section('content')
<div class="ten columns offset-by-one">
	<h1>Contact Us</h1>
</div>
<span>
	<div class="row">
		<div id="address" class="three columns offset-by-one center resize">
			<img src="/smarr-garage-door/local/resources/assets/images/icon/location-pin-70x70.png" alt="Location" />
			<h2>Location:</h2>
			3011 David Dr. <br />
			Columbia, MO 65202<br />
			<b>Hours</b>: <time itemprop="openingHours" datetime="Mo-Fr 8:00-17:00">M-F 8am - 5pm</time>
		</div>
		<div id="hours" class="three columns center resize">
			<img src="/smarr-garage-door/local/resources/assets/images/icon/phone-icon-70x70.jpg" alt="Phone Number" />
			<h2>Office:</h2>
			Phone: <a class="nolink" href="tel:+15734422948">573-442-2948</a><br />
			Fax: <span itemprop="faxNumber">573-874-6069</span>
		</div>
		<div id="Email" class="three columns center resize">
			<img src="/smarr-garage-door/local/resources/assets/images/icon/email-icon-70x70.jpg" alt="Email" />
			<h2>Email:</h2>
			<a href="mailto:truthgaragedoor@gmail.com?Subject=Contact%20from%20website" target="_top">truthgaragedoor@gmail.com</a>
		</div>
	</div>
	<div class="row">
		<div class="ten columns offset-by-one center">
			<h2>Please call or email to schedule an appointment or free estimate!</h2>
		</div>
	</div>

	<div class="row lower">
		<div class="ten columns offset-by-one lower" itemprop="hasMap" itemscope itemtype="http://schema.org/Map">
			<link itemprop="mapType" href="http://schema.org/VenueMap" />
			<iframe width="100%"
			height="400"
			frameborder="0" style="border:0"
			src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAtuY5KB30LMR7HF5UOO7F-x4UX35VXFZ0&q=3011+David+Drive,Columbia,MO,65201"></iframe>
		</div>
	</div>
</span>
@stop