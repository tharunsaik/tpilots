<?php include 'header.php';?>
<!--
Main Banner
-->
<section class="bg-grad pt-1 pb-5 py-sm-5 hero pattern-overlay-1 d-flex align-items-center">
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="col col-sm-7 text-center position-relative" uk-scrollspy="cls:uk-animation-slide-left; repeat: true;">
				<h2 class="text-white d-none d-sm-block">Get our 5G App from the Store</h2>
				<p class="fweight-400 d-none d-sm-block">Download the app for exclusive deals and ease of booking </p>
				<nav class="nav a-p-0 a-mx-2 mt-4 justify-content-center d-none d-sm-flex">
					<a href="#" class="nav-item nav-link">
						<img src="assets/img/badge-apple.svg" width="170px" alt="">
					</a>
					<a href="#" class="nav-item nav-link">
						<img src="assets/img/badge-google.svg" alt="" width="170px">
					</a>
					<a href="#" class="nav-item nav-link">
						<img src="assets/img/badge-microsoft.svg" alt="" width="170px">
					</a>
				</nav>
				<!-- Car -->
				<div class="animation d-flex justify-content-center align-items-center mt-sm-4">
					<div class="car">
						<div class="body">
							<div class="upperbody">
								<div class="window">
									<div class="line"></div>
								</div>
							</div>
							<div class="backwheel"></div>
							<div class="frontwheel"></div>
						</div>
						<div class="road"></div>
					</div>
				</div>
				<!-- Car -->
			</div>
			<div class="col-12 col-sm-4">
				<div class="card shadow-8dp bg-grey-200">
					<div class="card-header bg-white p-0 border-light">
						<nav class="nav justify-content-center fweight-500 travel-fleet nav-fill" id="fleet-tab" role="tablist">
							<a class="nav-item nav-link active" id="city-taxi-tab" data-toggle="tab" href="#city-taxi" role="tab" aria-controls="city-taxi" aria-selected="true">City Ride</a>
							<a class="nav-item nav-link" id="airport-tab" data-toggle="tab" href="#airport" role="tab" aria-controls="airport" aria-selected="false">Airport</a>
							<a class="nav-item nav-link" id="outstation-tab" data-toggle="tab" href="#outstation" role="tab" aria-controls="outstation" aria-selected="false">Outstation</a>
							<a class="nav-item nav-link" id="rentals-tab" data-toggle="tab" href="#rentals" role="tab" aria-controls="rentals" aria-selected="false">Rentals</a>
							<a class="nav-item nav-link" id="truck-tab" data-toggle="tab" href="#truck" role="tab" aria-controls="truck" aria-selected="false">Truck</a>
						</nav>
					</div>
					<div class="tab-content px-2 pb-2" id="fleet-tabContent">
						<div class="tab-pane fade show active" id="city-taxi" role="tabpanel" aria-labelledby="city-taxi-tab">
							<div class="my-4">
								<h6 class="text-center mb-1 font-size-3 fweight-400">Safety Integrated &amp; Trusted Travel Partner</h6>
								<p class="text-center mb-1 font-size-2 d-none d-sm-block">Cool Solurtion for City Travel</p>
							</div>
							<form class="booking-form">
								<div class="form-group">
									<label for="" class="sr-only">Pickup Location</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text" id="">Pickup</span>
										</div>
										<input type="text" class="form-control form-control-lg" id="" aria-describedby="" placeholder="Enter Pickup Location">
										<div class="input-group-append">
											<span class="input-group-text"><i class="fas fa-crosshairs mx-auto"></i></span>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="" class="sr-only">Drop Location</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text" id="">Drop</span>
										</div>
										<input type="text" class="form-control form-control-lg" id="" aria-describedby="" placeholder="Enter Drop Location">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="sr-only">When</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text" id="">When</span>
										</div>
										<input type="text" class="form-control form-control-lg" id="" aria-describedby="" placeholder="Now">
									</div>
								</div>
								<div class="row no-gutters mb-3">
									<div class="form-group col-sm">
										<label for="" class="sr-only">Date</label>
										<div class="input-group">
											<div class="input-group-prepend">
												<span class="input-group-text" id=""><i class="fas fa-calendar-alt mx-auto"></i></span>
											</div>
											<input type="text" class="form-control rounded-right-0 form-control-lg" id="" aria-describedby="" placeholder="Date">
										</div>
									</div>
									<div class="form-group col-sm">
										<label for="" class="sr-only">Time</label>
										<div class="input-group">
											<div class="input-group-prepend">
												<span class="input-group-text" id=""><i class="fas fa-clock mx-auto"></i></span>
											</div>
											<input type="text" class="form-control form-control-lg rounded-left-0" id="" aria-describedby="" placeholder="Time">
										</div>
									</div>
								</div>
								<a class="btn btn-primary btn-block btn-lg" href="#">Search Daily Cabs</a>
							</form>
						</div>
					  	<div class="tab-pane fade" id="airport" role="tabpanel" aria-labelledby="airport-tab">
							<div class="my-4">
								<h6 class="text-center mb-1 font-size-3 fweight-400 pt-2">Professional Pilots with On-Time Reporting</h6>
								<p class="text-center mb-1 font-size-2">Hygienic Cabs for Airport Trips</p>
							</div>
							<form class="booking-form">
								<div class="form-group">
									<label for="" class="sr-only">Pickup Location</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text" id="">Pickup</span>
										</div>
										<input type="text" class="form-control" id="" aria-describedby="" placeholder="Enter Pickup Location">
										<div class="input-group-append">
											<span class="input-group-text"><i class="fas fa-crosshairs mx-auto"></i></span>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="" class="sr-only">Drop Location</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text" id="">Drop</span>
										</div>
										<input type="text" class="form-control" id="" aria-describedby="" placeholder="Enter Drop Location">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="sr-only">When</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text" id="">When</span>
										</div>
										<input type="text" class="form-control" id="" aria-describedby="" placeholder="Now">
									</div>
								</div>
								<div class="row no-gutters mb-3">
									<div class="form-group col-sm">
										<label for="" class="sr-only">Date</label>
										<div class="input-group">
											<div class="input-group-prepend">
												<span class="input-group-text" id=""><i class="fas fa-calendar-alt mx-auto"></i></span>
											</div>
											<input type="text" class="form-control rounded-right-0" id="" aria-describedby="" placeholder="Date">
										</div>
									</div>
									<div class="form-group col-sm">
										<label for="" class="sr-only">Time</label>
										<div class="input-group">
											<div class="input-group-prepend">
												<span class="input-group-text" id=""><i class="fas fa-clock mx-auto"></i></span>
											</div>
											<input type="text" class="form-control rounded-left-0" id="" aria-describedby="" placeholder="Time">
										</div>
									</div>
								</div>
								<button type="submit" class="btn btn-primary rounded btn-block btn-lg">Search Airport Cabs</button>
							</form>
						</div>
					  	<div class="tab-pane fade" id="outstation" role="tabpanel" aria-labelledby="outstation-tab">
							<div class="my-4">
								<h6 class="text-center mb-1 font-size-3 fweight-400 pt-2">Experienced Pilots with Well Manner</h6>
								<p class="text-center mb-1 font-size-2">Happy with Tailor Made Packages</p>
							</div>
							<form class="booking-form">
								<div class="form-group">
									<label for="" class="sr-only">Pickup Location</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text" id="">Pickup</span>
										</div>
										<input type="text" class="form-control" id="" aria-describedby="" placeholder="Enter Pickup Location">
										<div class="input-group-append">
											<span class="input-group-text"><i class="fas fa-crosshairs mx-auto"></i></span>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="" class="sr-only">Drop Location</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text" id="">Drop</span>
										</div>
										<input type="text" class="form-control" id="" aria-describedby="" placeholder="Enter Destination">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="sr-only">When</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text" id="">When</span>
										</div>
										<input type="text" class="form-control" id="" aria-describedby="" placeholder="Now">
									</div>
								</div>
								<div class="row no-gutters mb-3">
									<div class="form-group col-sm">
										<label for="" class="sr-only">Date</label>
										<div class="input-group">
											<div class="input-group-prepend">
												<span class="input-group-text" id=""><i class="fas fa-calendar-alt mx-auto"></i></span>
											</div>
											<input type="text" class="form-control rounded-right-0" id="" aria-describedby="" placeholder="Date">
										</div>
									</div>
									<div class="form-group col-sm">
										<label for="" class="sr-only">Time</label>
										<div class="input-group">
											<div class="input-group-prepend">
												<span class="input-group-text" id=""><i class="fas fa-clock mx-auto"></i></span>
											</div>
											<input type="text" class="form-control rounded-left-0" id="" aria-describedby="" placeholder="Time">
										</div>
									</div>
								</div>
								<button type="submit" class="btn btn-primary rounded btn-block btn-lg">Search Outstation Cabs</button>
							</form>
						</div>
						<div class="tab-pane fade" id="rentals" role="tabpanel" aria-labelledby="rentals-tab">
							<div class="my-4">
								<h6 class="text-center mb-1 font-size-3 fweight-400 pt-2">Experienced Pilots with Well Root Knowledge</h6>
								<p class="text-center mb-1 font-size-2">Happy with Affordable Price</p>
							</div>
							<form class="booking-form">
								<div class="form-group">
									<label for="" class="sr-only">Pickup Location</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text" id="">Pickup</span>
										</div>
										<input type="text" class="form-control" id="" aria-describedby="" placeholder="Enter Pickup Location">
										<div class="input-group-append">
											<span class="input-group-text"><i class="fas fa-crosshairs mx-auto"></i></span>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="" class="sr-only">Drop Location</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text" id="">Drop</span>
										</div>
										<input type="text" class="form-control" id="" aria-describedby="" placeholder="Enter Drop Location">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="sr-only">When</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text" id="">When</span>
										</div>
										<input type="text" class="form-control" id="" aria-describedby="" placeholder="Now">
									</div>
								</div>
								<div class="row no-gutters mb-3">
									<div class="form-group col-sm">
										<label for="" class="sr-only">Date</label>
										<div class="input-group">
											<div class="input-group-prepend">
												<span class="input-group-text" id=""><i class="fas fa-calendar-alt mx-auto"></i></span>
											</div>
											<input type="text" class="form-control rounded-right-0" id="" aria-describedby="" placeholder="Date">
										</div>
									</div>
									<div class="form-group col-sm">
										<label for="" class="sr-only">Time</label>
										<div class="input-group">
											<div class="input-group-prepend">
												<span class="input-group-text" id=""><i class="fas fa-clock mx-auto"></i></span>
											</div>
											<input type="text" class="form-control rounded-left-0" id="" aria-describedby="" placeholder="Time">
										</div>
									</div>
								</div>
								<button type="submit" class="btn btn-primary rounded btn-block btn-lg">Search Rental Cabs</button>
							</form>
						</div>
						<div class="tab-pane fade" id="truck" role="tabpanel" aria-labelledby="truck-tab">
							<div class="my-4">
								<h6 class="text-center mb-1 font-size-3 fweight-400 pt-2">Get Your Goods Safely with Live Status Tracking</h6>
								<p class="text-center mb-1 font-size-2">Geo Taged Trusted & Professional Partners</p>
							</div>
							<form class="booking-form">
								<div class="form-group">
									<label for="" class="sr-only">Pickup Location</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text" id="">Pickup</span>
										</div>
										<input type="text" class="form-control" id="" aria-describedby="" placeholder="Enter Pickup Location">
										<div class="input-group-append">
											<span class="input-group-text"><i class="fas fa-crosshairs mx-auto"></i></span>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="" class="sr-only">Drop Location</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text" id="">Drop</span>
										</div>
										<input type="text" class="form-control" id="" aria-describedby="" placeholder="Enter Drop Location">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="sr-only">When</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text" id="">When</span>
										</div>
										<input type="text" class="form-control" id="" aria-describedby="" placeholder="Now">
									</div>
								</div>
								<div class="row no-gutters mb-3">
									<div class="form-group col-sm">
										<label for="" class="sr-only">Date</label>
										<div class="input-group">
											<div class="input-group-prepend">
												<span class="input-group-text" id=""><i class="fas fa-calendar-alt mx-auto"></i></span>
											</div>
											<input type="text" class="form-control rounded-right-0" id="" aria-describedby="" placeholder="Date">
										</div>
									</div>
									<div class="form-group col-sm">
										<label for="" class="sr-only">Time</label>
										<div class="input-group">
											<div class="input-group-prepend">
												<span class="input-group-text" id=""><i class="fas fa-clock mx-auto"></i></span>
											</div>
											<input type="text" class="form-control rounded-left-0" id="" aria-describedby="" placeholder="Time">
										</div>
									</div>
								</div>
								<button type="submit" class="btn btn-primary rounded btn-block btn-lg">Search Trusted Trucks</button>
							</form>
						</div>
					</div>
				</div>					
			</div>
		</div>
		<!--<div class="row">
			<div class="col">
				<div class="card shadow-8dp rounded-6 mt-3">
					<div class="card-body p-0">
						<div class="row align-items-center justify-content-around">
							<div class="col-sm-auto">
								<i class="fas fa-car border rounded-pill p-3"></i>
							</div>
							<div class="col-sm-auto">
								<p class="lead mb-0 fweight-500">16:10 - 17:25</p>
								<small>SVL Go</small>
							</div>
							<div class="col-sm-auto">
								<p class="lead mb-0 fweight-500">1 h 15 m</p>
								<small>Madhapur-Ameerpet</small>
							</div>
							<div class="col-sm-auto">
								<p class="lead mb-0 fweight-500 text-success"><i class="fas fa-rupee-sign"></i> 170</p>
							</div>
							<div class="col-sm-auto">
								<a href="#" class="btn btn-outline-primary">Book This Trip</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>-->
	</div>
</section>
<!--
Sub Navbar
-->
<div class="nav-scroller bg-white shadow-sm sticky-top border-y-1 d-none" id="navbar-sub">
	<nav class="nav align-items-center justify-content-around">
		<a class="nav-item nav-link" href="#HowItWorksSection" rel="PageScroll2id">How It Works</a>
		<a class="nav-item nav-link" href="#WhyTPilotsSection" rel="PageScroll2id" data-ps2id-offset="60">Why T-Pilots</a>
		<a class="nav-item nav-link" href="#CityRideSection" rel="PageScroll2id" data-ps2id-offset="40">City Ride</a>
		<a class="nav-item nav-link" href="#AiportSection" rel="PageScroll2id" data-ps2id-offset="40">Aiport</a>
		<a class="nav-item nav-link" href="#OutstationSection" rel="PageScroll2id" data-ps2id-offset="40">Outstation</a>
		<a class="nav-item nav-link" href="#RentalsSection" rel="PageScroll2id" data-ps2id-offset="40">Rentals</a>
		<a class="nav-item nav-link" href="#TruckSection" rel="PageScroll2id" data-ps2id-offset="40">Truck</a>
		<a class="nav-item nav-link" href="#VehiclesSection" rel="PageScroll2id" data-ps2id-offset="70">Vehicles</a>
		<a class="nav-item nav-link" href="#DownloadAppSection" rel="PageScroll2id" data-ps2id-offset="50">Download App</a>
		<a class="nav-item nav-link" href="#FeedbackSection" rel="PageScroll2id" data-ps2id-offset="80">Feedback</a>
		<a class="nav-item nav-link" href="#ContactSection" rel="PageScroll2id" data-ps2id-offset="70">Contact Us</a>
		<a class="nav-item nav-link" href="#EmailSection" rel="PageScroll2id" data-ps2id-offset="60">Mail Us</a>
	</nav>
</div>
<!--
How It Works
-->
<section class="min-vh-100 align-items-center justify-content-center py-5 d-none" id="HowItWorksSection">
	<div>
		<div class="container-fluid">
			<div class="row">
				<div class="col">
					<h2 class="heading text-uppercase text-center mb-5 position-relative text-primary">How It Works</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<!--Process Block-->
			<div class="col-sm-2 process-block">
				<div class="inner-box">
					<div class="upper-box">
						<div class="icon-box">
							<i class="fas fa-car"></i>
							<div class="block-number wow zoomInStable animated" data-wow-delay="0ms" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-delay: 0ms; animation-name: zoomInStable;">1</div>
						</div>
					</div>
					<div class="lower-box">
						<h3><a href="#">DISCOVER</a></h3>
						<div class="text">Intgrating clients with partners is the focus of everyday business the focus of everyday business</div>
					</div>
				</div>
			</div>
			<!--Process Block-->
			<div class="col-sm-2 process-block">
				<div class="inner-box">
					<div class="upper-box">
						<div class="icon-box">
							<i class="fas fa-car"></i>
							<div class="block-number wow zoomInStable animated" data-wow-delay="0ms" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-delay: 0ms; animation-name: zoomInStable;">2</div>
						</div>
					</div>
					<div class="lower-box">
						<h3><a href="#">BUILD</a></h3>
						<div class="text">Intgrating clients with partners is the focus of everyday business the focus of everyday business</div>
					</div>
				</div>
			</div>
			<!--Process Block-->
			<div class="col-sm-2 process-block">
				<div class="inner-box">
					<div class="upper-box">
						<div class="icon-box">
							<i class="fas fa-car"></i>
							<div class="block-number wow zoomInStable animated" data-wow-delay="0ms" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-delay: 0ms; animation-name: zoomInStable;">3</div>
						</div>
					</div>
					<div class="lower-box">
						<h3><a href="#">CONNECT</a></h3>
						<div class="text">Intgrating clients with partners is the focus of everyday business the focus of everyday business</div>
					</div>
				</div>
			</div>
			<!--Process Block-->
			<div class="col-sm-2 process-block">
				<div class="inner-box">
					<div class="upper-box">
						<div class="icon-box">
							<i class="fas fa-car"></i>
							<div class="block-number wow zoomInStable animated" data-wow-delay="0ms" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-delay: 0ms; animation-name: zoomInStable;">4</div>
						</div>
					</div>
					<div class="lower-box">
						<h3><a href="#">Step 4</a></h3>
						<div class="text">Intgrating clients with partners is the focus of everyday business the focus of everyday business</div>
					</div>
				</div>
			</div>
			<!--Process Block-->
			<div class="col-sm-2 process-block">
				<div class="inner-box">
					<div class="upper-box">
						<div class="icon-box">
							<i class="fas fa-car"></i>
							<div class="block-number wow zoomInStable animated" data-wow-delay="0ms" data-wow-duration="2000ms" style="visibility: visible; animation-duration: 2000ms; animation-delay: 0ms; animation-name: zoomInStable;">5</div>
						</div>
					</div>
					<div class="lower-box">
						<h3><a href="#">LANCH</a></h3>
						<div class="text">Intgrating clients with partners is the focus of everyday business the focus of everyday business</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-sm-auto">
				<div class="card card-body shadow-1 mt-3">
					<div class="row justify-content-center align-items-center">
						<div class="col-sm-auto">
							<h5 class="text-center my-2 position-relative text-muted">Pay as Your Convenience</h5>
						</div>
						<!--Process Block-->
						<div class="col-sm-auto text-center">
							<div class="d-flex align-items-center">
								<i class="fas fa-money-bill-alt fa-2x icon-grad mr-2"></i>
								<a href="#" class="card-link font-size-4 stretched-link text-dark">Cash</a>
							</div>
						</div>
						<!--Process Block-->
						<div class="col-sm-auto">
							<div class="d-flex align-items-center">
								<i class="fab fa-cc-visa fa-2x text-primary icon-grad mr-2"></i>
								<a href="#" class="card-link font-size-4 stretched-link text-dark">Card</a>
							</div>
						</div>
						<!--Process Block-->
						<div class="col-sm-auto">
							<div class="d-flex align-items-center">
								<i class="fas fa-wallet fa-2x text-primary icon-grad mr-2"></i>
								<a href="#" class="card-link font-size-4 stretched-link text-dark">Wallet</a>
							</div>
						</div>
						<!--Process Block-->
						<div class="col-sm-auto">
							<div class="d-flex align-items-center">
								<i class="fas fa-money-check fa-2x text-primary icon-grad mr-2"></i>
								<a href="#" class="card-link font-size-4 stretched-link text-dark">Netbanking</a>
							</div>
						</div>
						<!--Process Block-->
						<div class="col-sm-auto">
							<div class="d-flex align-items-center">
								<i class="fas fa-qrcode fa-2x text-primary icon-grad mr-2"></i>
								<a href="#" class="card-link font-size-4 stretched-link text-dark">UPI</a>
							</div>
						</div>
					</div>
					</div>
				</div>
			</div>
	</div>
</section>
<section class="how-it-works overflow-hidden uk-flex uk-flex-middle py-2" uk-height-viewport uk-parallax="bgy: -300" style="background-image: url('https://picsum.photos/id/1019/1920/1080');">
	<div class="container text-center description">
		<div class="row">
			<div class="col">
				<h2 class="text-uppercase text-center mb-2 position-relative text-white">How T-Pilots Works ?</h2>
			</div>
		</div>
		<div class="row justify-content-center travelo-process">
			<div class="col-6 col-sm">
				<img src="assets/img/travelo_process.png" alt="" class="img-fluid">
			</div>
			<div class="col-sm d-flex flex-sm-row-reverse mb-3 mb-sm-0 process first icon-box style12">
				<div class="icon-wrapper mr-2 mr-sm-0" uk-scrollspy="cls:uk-animation-slide-left; repeat: true; delay: 500">
					<i class="fas fa-bullseye"></i>
				</div>
				<div class="text-left text-sm-right details" uk-scrollspy="cls:uk-animation-slide-bottom; repeat: true; delay: 1000">
					<h4>Explore Destinations</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>
			</div>
			<div class="col-sm d-flex mb-3 mb-sm-0 process second icon-box style12">
				<div class="icon-wrapper mr-2 mr-sm-0" uk-scrollspy="cls:uk-animation-slide-right; repeat: true; delay: 500">
					<i class="fas fa-bullseye"></i>
				</div>
				<div class="text-left details" uk-scrollspy="cls:uk-animation-slide-bottom; repeat: true; delay: 1500">
					<h4>Check Availability</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>
			</div>
			<div class="col-sm d-flex mb-3 mb-sm-0 process third icon-box style12">
				<div class="icon-wrapper mr-2 mr-sm-0" uk-scrollspy="cls:uk-animation-slide-right; repeat: true; delay: 500">
					<i class="fas fa-bullseye"></i>
				</div>
				<div class="text-left details" uk-scrollspy="cls:uk-animation-slide-bottom; repeat: true; delay: 2000">
					<h4>Book Online</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>
			</div>
			<div class="col-sm d-flex flex-sm-row-reverse mb-3 mb-sm-0 process forth icon-box style12">
				<div class="icon-wrapper mr-2 mr-sm-0" uk-scrollspy="cls:uk-animation-slide-left; repeat: true; delay: 500">
					<i class="fas fa-bullseye"></i>
				</div>
				<div class="text-left text-sm-right details" uk-scrollspy="cls:uk-animation-slide-bottom; repeat: true; delay: 2500">
					<h4>Get Ready to Travel</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--
Offers
-->
<div class="container position-relative mt-n5 d-none" style="z-index:1;">
    <div class="row">
        <div class="col">
            <div class="list-group list-group-horizontal shadow offers-slider">
				<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
					<img src="/assets/img/icon-1.svg" class="mr-3" alt="..." width="50px">
					<div class="media-body fweight-300">
						<h5 class="mt-0 fweight-400">Media heading</h5>
						Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque.
					</div>
				</a>
				<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
					<img src="/assets/img/icon-2.svg" class="mr-3" alt="..." width="50px">
					<div class="media-body fweight-300">
						<h5 class="mt-0 fweight-400">Media heading</h5>
						Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque.
					</div>
				</a>
				<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
					<img src="/assets/img/icon-3.svg" class="mr-3" alt="..." width="50px">
					<div class="media-body fweight-300">
						<h5 class="mt-0 fweight-400">Media heading</h5>
						Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque.
					</div>
				</a>
				<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
					<img src="/assets/img/icon-4.svg" class="mr-3" alt="..." width="50px">
					<div class="media-body fweight-300">
						<h5 class="mt-0 fweight-400">Media heading</h5>
						Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque.
					</div>
				</a>
			</div>
        </div>
    </div>
</div>
<!--
Why with Us
-->
<section class="min-vh-100 d-flex align-items-center py-5" id="WhyTPilotsSection">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-4">
				<div class="card border-0 single-feature border-radius-1 mb-4 match-height overflow-hidden">
					<div class="media align-items-center">
						<img class="media-left" src="https://picsum.photos/85/180?random=1" alt="Customizable">
						<div class="media-body">
							<h6>Customizable</h6>
							<p class="card-text">Our support team will get assistance from AI-powered suggestions, making.Our support team will get assistance</p>
						</div>
					</div>
				</div>
				<div class="card border-0 single-feature border-radius-2 mb-4 overflow-hidden">
					<div class="media align-items-center">
						<img class="media-left" src="https://picsum.photos/85/180?random=1" alt="Customizable">
						<div class="media-body">
							<h6>Customizable</h6>
							<p class="card-text">Our support team will get assistance from AI-powered suggestions, making.Our support team will get assistance</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card bg-transparent border-0 mb-4 d-flex align-items-center">
					<div class="text-center wow fadeInUp animated fweight-500" data-wow-duration="0.6s" data-wow-delay="0.1s">
						<p class="text-primary font-size-8 mb-1">Why Customers Choose</p>
						<h1 class="text-warning font-size-10 mb-0">T-Pilots</h1>
					</div>
				</div>
				<div class="card border-0 single-feature mb-4 overflow-hidden" uk-scrollspy="cls:uk-animation-scale-up; repeat: true;">
					<img src="https://picsum.photos/450/270?random=1" alt="Customizable">
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card border-0 single-feature mb-4 border-radius-3 match-height overflow-hidden">
					<div class="media align-items-center">
						<div class="media-body">
							<h6>Customizable</h6>
							<p class="card-text">Our support team will get assistance from AI-powered suggestions, making.Our support team will get assistance</p>
						</div>
						<img src="https://picsum.photos/85/180?random=1" alt="Customizable">
					</div>
				</div>
				<div class="card border-0 single-feature mb-4 border-radius-4 overflow-hidden">
					<div class="media align-items-center">
						<div class="media-body">
							<h6>Customizable</h6>
							<p class="card-text">Our support team will get assistance from AI-powered suggestions, making.Our support team will get assistance</p>
						</div>
						<img src="https://picsum.photos/85/180?random=1" alt="Customizable">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--
Category
-->
<section class="d-flex align-items-center py-5 bg-light" uk-height-viewport>
	<div class="container-fluid">
		<div class="row">
			<div class="col">
				<h2 class="heading text-uppercase text-center mb-5 position-relative">Destination Deals</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="tab-content" id="guides-tabContent">
					<div class="tab-pane fade show active" id="guides-city" role="tabpanel" aria-labelledby="guides-city-tab">
						<div class="row image-box style5" uk-height-match=".card">
							<div class="col-sm-3">
								<article class="box">
									<figure class="animated" data-animation-type="fadeInDown" data-animation-delay="0">
										<a title="" href="#">
											<img width="288" height="162" alt="" src="/assets/img/golconda.jpg">
										</a>
										<figcaption>
											<h3 class="caption-title">Golconda Fort</h3>
											<span>View Deal</span>
										</figcaption>
									</figure>
								</article>
							</div>
							<div class="col-sm-3">
								<article class="box">
									<figure class="animated" data-animation-type="fadeInDown" data-animation-delay="0">
										<a title="" href="#">
											<img width="288" height="162" alt="" src="/assets/img/charminar.jpg">
										</a>
										<figcaption>
											<h3 class="caption-title">Charminar</h3>
											<span>View Deal</span>
										</figcaption>
									</figure>
								</article>
							</div>
							<div class="col-sm-3">
								<article class="box">
									<figure class="animated" data-animation-type="fadeInDown" data-animation-delay="0">
										<a title="" href="#">
											<img width="288" height="162" alt="" src="/assets/img/birlamandir.jpeg">
										</a>
										<figcaption>
											<h3 class="caption-title">Birla Mandir</h3>
											<span>View Deal</span>
										</figcaption>
									</figure>
								</article>
							</div>
							<div class="col-sm-3">
								<article class="box">
									<figure class="animated" data-animation-type="fadeInDown" data-animation-delay="0">
										<a title="" href="#">
											<img width="288" height="162" alt="" src="/assets/img/hussian.jpg">
										</a>
										<figcaption>
											<h3 class="caption-title">Hussain Sagar</h3>
											<span>View Deal</span>
										</figcaption>
									</figure>
								</article>
							</div>
							<div class="col-sm-3">
								<article class="box">
									<figure class="animated" data-animation-type="fadeInDown" data-animation-delay="0">
										<a title="" href="#"><img width="288" height="162" alt="" src="/assets/img/ramoji.png"></a>
										<figcaption>
											<h3 class="caption-title">Ramoji Film City</h3>
											<span>View Deal</span>
										</figcaption>
									</figure>
								</article>
							</div>
							<div class="col-sm-3">
								<article class="box">
									<figure class="animated" data-animation-type="fadeInDown" data-animation-delay="0">
										<a title="" href="#">
											<img width="288" height="162" alt="" src="/assets/img/salarjung.jpg">
										</a>
										<figcaption>
											<h3 class="caption-title">Salar Jung Museum</h3>
											<span>View Deal</span>
										</figcaption>
									</figure>
								</article>
							</div>
							<div class="col-sm-3">
								<article class="box match-height">
									<figure class="animated" data-animation-type="fadeInDown" data-animation-delay="0">
										<a title="" href="#">
											<img width="288" height="162" alt="" src="/assets/img/nehru.jpg"></a>
										<figcaption>
											<h3 class="caption-title">Nehru Zoo Park</h3>
											<span>View Deal</span>
										</figcaption>
									</figure>
								</article>
							</div>
							<div class="col-sm-3">
								<div class="card card-body py-5 py-sm-0 border-0 rounded-0 bg-primary match-height shadow-10dp-hover">
									<a href="#" class="card-link stretched-link vertical-center d-flex align-items-center text-white font-size-10">Destinations Guide <i class="far fa-arrow-alt-circle-right mr-3"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="guides-outstation" role="tabpanel" aria-labelledby="guides-outstation-tab">...</div>
				</div>
			</div>
		</div>
		
	</div>
</section>
<!--
SVL City Ride
-->
<section class="d-flex align-items-center py-5" id="CityRideSection" uk-height-viewport>
	<div class="container">
		<div class="row">
			<div class="col">
				<nav class="nav justify-content-center a-mx-sm-2 mb-4 vehicle-type-mixitup-controls" role="group" aria-label="ServicesFilter">
                    <a class="nav-item nav-link btn btn-light shadow-1 col-4 col-sm" data-mixitup-control data-filter="all">All Vehicles</a>
                    <a class="nav-item nav-link btn btn-light shadow-1 col-4 col-sm" data-mixitup-control data-filter=".CityTrips">City Cabs</a>
                    <a class="nav-item nav-link btn btn-light shadow-1 col-4 col-sm" data-mixitup-control data-filter=".Airport">Airport Cabs</a>
                    <a class="nav-item nav-link btn btn-light shadow-1 col-4 col-sm" data-mixitup-control data-filter=".OutStation">Outstation Cabs</a>
                    <a class="nav-item nav-link btn btn-light shadow-1 col-4 col-sm" data-mixitup-control data-filter=".Rentals">Rental Cabs</a>
                    <a class="nav-item nav-link btn btn-light shadow-1 col-4 col-sm" data-mixitup-control data-filter=".Truck">Truck</a>
                </nav>
                <div class="row align-items-end vehicle-type-mixitup-container" data-ref="mixitup-container">
					<div class="col-sm-12">
						<div class="vehicle-type">
							<div class="row">
								<div class="col-sm-6">
									<img class="mx-auto w-75 img-fluid" src="/assets/img/bike.png" alt="">
								</div>
								<div class="col-sm-6 vehicle-features">
									<h3>Bike</h3>
									<p>Lorem ipsum dolor sit amet</p>
									<hr>
									<ul>
										<li>Nihil error Vero at ad. Facere a nihil vitae Nihil error Vero at ad.</li>
										<li>Expedita temporibus sed aliquam Facere a nihil vitae</li>
										<li>Quasi doloribus, iusto aut! Expedita temporibus sed aliquam</li>
									</ul>
									<nav class="nav justify-content-center a-px-1 a-px-sm-2 vehicle-features-nav">
										<a class="nav-item nav-link"><i class="fas fa-users"></i> 4</a>
										<a class="nav-item nav-link"><i class="fas fa-briefcase"></i> 2</a>
										<a class="nav-item nav-link"><i class="fas fa-fan"></i> AC</a>
										<a class="nav-item nav-link"><i class="fas fa-gas-pump"></i> D</a>
										<a class="nav-item nav-link"><i class="fas fa-location-arrow"></i> Yes</a>
									</nav>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<img class="mx-auto w-75 img-fluid" src="/assets/img/scooty.png" alt="">
								</div>
								<div class="col-sm-6 vehicle-features">
									<h3>Scooty</h3>
									<p>Lorem ipsum dolor sit amet</p>
									<hr>
									<ul>
										<li>Nihil error Vero at ad. Facere a nihil vitae Nihil error Vero at ad.</li>
										<li>Expedita temporibus sed aliquam Facere a nihil vitae</li>
										<li>Quasi doloribus, iusto aut! Expedita temporibus sed aliquam</li>
									</ul>
									<nav class="nav justify-content-center a-px-1 a-px-sm-2 vehicle-features-nav">
										<a class="nav-item nav-link"><i class="fas fa-users"></i> 4</a>
										<a class="nav-item nav-link"><i class="fas fa-briefcase"></i> 2</a>
										<a class="nav-item nav-link"><i class="fas fa-fan"></i> AC</a>
										<a class="nav-item nav-link"><i class="fas fa-gas-pump"></i> D</a>
										<a class="nav-item nav-link"><i class="fas fa-location-arrow"></i> Yes</a>
									</nav>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<img class="mx-auto w-75 img-fluid" src="/assets/img/auto.png" alt="">
								</div>
								<div class="col-sm-6 vehicle-features">
									<h3>Auto Rickshaw</h3>
									<p>Lorem ipsum dolor sit amet</p>
									<hr>
									<ul>
										<li>Nihil error Vero at ad. Facere a nihil vitae Nihil error Vero at ad.</li>
										<li>Expedita temporibus sed aliquam Facere a nihil vitae</li>
										<li>Quasi doloribus, iusto aut! Expedita temporibus sed aliquam</li>
									</ul>
									<nav class="nav justify-content-center a-px-1 a-px-sm-2 vehicle-features-nav">
										<a class="nav-item nav-link"><i class="fas fa-users"></i> 4</a>
										<a class="nav-item nav-link"><i class="fas fa-briefcase"></i> 2</a>
										<a class="nav-item nav-link"><i class="fas fa-fan"></i> AC</a>
										<a class="nav-item nav-link"><i class="fas fa-gas-pump"></i> D</a>
										<a class="nav-item nav-link"><i class="fas fa-location-arrow"></i> Yes</a>
									</nav>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<img class="mx-auto w-75 img-fluid" src="/assets/img/auto-7.png" alt="" height="200px">
								</div>
								<div class="col-sm-6 vehicle-features">
									<h3>E-Rickshaw</h3>
									<p>Lorem ipsum dolor sit amet</p>
									<hr>
									<ul>
										<li>Nihil error Vero at ad. Facere a nihil vitae Nihil error Vero at ad.</li>
										<li>Expedita temporibus sed aliquam Facere a nihil vitae</li>
										<li>Quasi doloribus, iusto aut! Expedita temporibus sed aliquam</li>
									</ul>
									<nav class="nav justify-content-center a-px-1 a-px-sm-2 vehicle-features-nav">
										<a class="nav-item nav-link"><i class="fas fa-users"></i> 4</a>
										<a class="nav-item nav-link"><i class="fas fa-briefcase"></i> 2</a>
										<a class="nav-item nav-link"><i class="fas fa-fan"></i> AC</a>
										<a class="nav-item nav-link"><i class="fas fa-gas-pump"></i> D</a>
										<a class="nav-item nav-link"><i class="fas fa-location-arrow"></i> Yes</a>
									</nav>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<img class="mx-auto w-75 img-fluid" src="/assets/img/UberX.webp" alt="">
								</div>
								<div class="col-sm-6 vehicle-features">
									<h3>Micro</h3>
									<p>Lorem ipsum dolor sit amet</p>
									<hr>
									<ul>
										<li>Nihil error Vero at ad. Facere a nihil vitae Nihil error Vero at ad.</li>
										<li>Expedita temporibus sed aliquam Facere a nihil vitae</li>
										<li>Quasi doloribus, iusto aut! Expedita temporibus sed aliquam</li>
									</ul>
									<nav class="nav justify-content-center a-px-1 a-px-sm-2 vehicle-features-nav">
										<a class="nav-item nav-link"><i class="fas fa-users"></i> 4</a>
										<a class="nav-item nav-link"><i class="fas fa-briefcase"></i> 2</a>
										<a class="nav-item nav-link"><i class="fas fa-fan"></i> AC</a>
										<a class="nav-item nav-link"><i class="fas fa-gas-pump"></i> D</a>
										<a class="nav-item nav-link"><i class="fas fa-location-arrow"></i> Yes</a>
									</nav>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<img class="mx-auto w-75 img-fluid" src="/assets/img/UberX.webp" alt="">
								</div>
								<div class="col-sm-6 vehicle-features">
									<h3>Mini</h3>
									<p>Lorem ipsum dolor sit amet</p>
									<hr>
									<ul>
										<li>Nihil error Vero at ad. Facere a nihil vitae Nihil error Vero at ad.</li>
										<li>Expedita temporibus sed aliquam Facere a nihil vitae</li>
										<li>Quasi doloribus, iusto aut! Expedita temporibus sed aliquam</li>
									</ul>
									<nav class="nav justify-content-center a-px-1 a-px-sm-2 vehicle-features-nav">
										<a class="nav-item nav-link"><i class="fas fa-users"></i> 4</a>
										<a class="nav-item nav-link"><i class="fas fa-briefcase"></i> 2</a>
										<a class="nav-item nav-link"><i class="fas fa-fan"></i> AC</a>
										<a class="nav-item nav-link"><i class="fas fa-gas-pump"></i> D</a>
										<a class="nav-item nav-link"><i class="fas fa-location-arrow"></i> Yes</a>
									</nav>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<img class="mx-auto w-75 img-fluid" src="/assets/img/Select.webp" alt="">
								</div>
								<div class="col-sm-6 vehicle-features">
									<h3>Sedan</h3>
									<p>Lorem ipsum dolor sit amet</p>
									<hr>
									<ul>
										<li>Nihil error Vero at ad. Facere a nihil vitae Nihil error Vero at ad.</li>
										<li>Expedita temporibus sed aliquam Facere a nihil vitae</li>
										<li>Quasi doloribus, iusto aut! Expedita temporibus sed aliquam</li>
									</ul>
									<nav class="nav justify-content-center a-px-1 a-px-sm-2 vehicle-features-nav">
										<a class="nav-item nav-link"><i class="fas fa-users"></i> 4</a>
										<a class="nav-item nav-link"><i class="fas fa-briefcase"></i> 2</a>
										<a class="nav-item nav-link"><i class="fas fa-fan"></i> AC</a>
										<a class="nav-item nav-link"><i class="fas fa-gas-pump"></i> D</a>
										<a class="nav-item nav-link"><i class="fas fa-location-arrow"></i> Yes</a>
									</nav>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<img class="mx-auto w-75 img-fluid" src="/assets/img/Black.webp" alt="">
								</div>
								<div class="col-sm-6 vehicle-features">
									<h3>Prime</h3>
									<p>Lorem ipsum dolor sit amet</p>
									<hr>
									<ul>
										<li>Nihil error Vero at ad. Facere a nihil vitae Nihil error Vero at ad.</li>
										<li>Expedita temporibus sed aliquam Facere a nihil vitae</li>
										<li>Quasi doloribus, iusto aut! Expedita temporibus sed aliquam</li>
									</ul>
									<nav class="nav justify-content-center a-px-1 a-px-sm-2 vehicle-features-nav">
										<a class="nav-item nav-link"><i class="fas fa-users"></i> 4</a>
										<a class="nav-item nav-link"><i class="fas fa-briefcase"></i> 2</a>
										<a class="nav-item nav-link"><i class="fas fa-fan"></i> AC</a>
										<a class="nav-item nav-link"><i class="fas fa-gas-pump"></i> D</a>
										<a class="nav-item nav-link"><i class="fas fa-location-arrow"></i> Yes</a>
									</nav>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<img class="mx-auto w-75 img-fluid" src="/assets/img/XL.webp" alt="">
								</div>
								<div class="col-sm-6 vehicle-features">
									<h3>MUV</h3>
									<p>Lorem ipsum dolor sit amet</p>
									<hr>
									<ul>
										<li>Nihil error Vero at ad. Facere a nihil vitae Nihil error Vero at ad.</li>
										<li>Expedita temporibus sed aliquam Facere a nihil vitae</li>
										<li>Quasi doloribus, iusto aut! Expedita temporibus sed aliquam</li>
									</ul>
									<nav class="nav justify-content-center a-px-1 a-px-sm-2 vehicle-features-nav">
										<a class="nav-item nav-link"><i class="fas fa-users"></i> 4</a>
										<a class="nav-item nav-link"><i class="fas fa-briefcase"></i> 2</a>
										<a class="nav-item nav-link"><i class="fas fa-fan"></i> AC</a>
										<a class="nav-item nav-link"><i class="fas fa-gas-pump"></i> D</a>
										<a class="nav-item nav-link"><i class="fas fa-location-arrow"></i> Yes</a>
									</nav>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<img class="mx-auto w-75 img-fluid" src="/assets/img/BlackSUV.webp" alt="">
								</div>
								<div class="col-sm-6 vehicle-features">
									<h3>SUV</h3>
									<p>Lorem ipsum dolor sit amet</p>
									<hr>
									<ul>
										<li>Nihil error Vero at ad. Facere a nihil vitae Nihil error Vero at ad.</li>
										<li>Expedita temporibus sed aliquam Facere a nihil vitae</li>
										<li>Quasi doloribus, iusto aut! Expedita temporibus sed aliquam</li>
									</ul>
									<nav class="nav justify-content-center a-px-1 a-px-sm-2 vehicle-features-nav">
										<a class="nav-item nav-link"><i class="fas fa-users"></i> 4</a>
										<a class="nav-item nav-link"><i class="fas fa-briefcase"></i> 2</a>
										<a class="nav-item nav-link"><i class="fas fa-fan"></i> AC</a>
										<a class="nav-item nav-link"><i class="fas fa-gas-pump"></i> D</a>
										<a class="nav-item nav-link"><i class="fas fa-location-arrow"></i> Yes</a>
									</nav>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<img class="mx-auto w-75 img-fluid" src="/assets/img/Lux.webp" alt="">
								</div>
								<div class="col-sm-6 vehicle-features">
									<h3>Luxury</h3>
									<p>Lorem ipsum dolor sit amet</p>
									<hr>
									<ul>
										<li>Nihil error Vero at ad. Facere a nihil vitae Nihil error Vero at ad.</li>
										<li>Expedita temporibus sed aliquam Facere a nihil vitae</li>
										<li>Quasi doloribus, iusto aut! Expedita temporibus sed aliquam</li>
									</ul>
									<nav class="nav justify-content-center a-px-1 a-px-sm-2 vehicle-features-nav">
										<a class="nav-item nav-link"><i class="fas fa-users"></i> 4</a>
										<a class="nav-item nav-link"><i class="fas fa-briefcase"></i> 2</a>
										<a class="nav-item nav-link"><i class="fas fa-fan"></i> AC</a>
										<a class="nav-item nav-link"><i class="fas fa-gas-pump"></i> D</a>
										<a class="nav-item nav-link"><i class="fas fa-location-arrow"></i> Yes</a>
									</nav>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<img class="mx-auto w-75 img-fluid" src="/assets/img/Pool.webp" alt="">
								</div>
								<div class="col-sm-6 vehicle-features">
									<h3>Pool</h3>
									<p>Lorem ipsum dolor sit amet</p>
									<hr>
									<ul>
										<li>Nihil error Vero at ad. Facere a nihil vitae Nihil error Vero at ad.</li>
										<li>Expedita temporibus sed aliquam Facere a nihil vitae</li>
										<li>Quasi doloribus, iusto aut! Expedita temporibus sed aliquam</li>
									</ul>
									<nav class="nav justify-content-center a-px-1 a-px-sm-2 vehicle-features-nav">
										<a class="nav-item nav-link"><i class="fas fa-users"></i> 4</a>
										<a class="nav-item nav-link"><i class="fas fa-briefcase"></i> 2</a>
										<a class="nav-item nav-link"><i class="fas fa-fan"></i> AC</a>
										<a class="nav-item nav-link"><i class="fas fa-gas-pump"></i> D</a>
										<a class="nav-item nav-link"><i class="fas fa-location-arrow"></i> Yes</a>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<nav class="nav vehicle-type-nav">
							<a class="nav-item nav-link text-center"><img src="/assets/img/bike.png" alt="" class="img-fluid"> Bike</a>
							<a class="nav-item nav-link text-center"><img src="/assets/img/scooty.png" alt="" class="img-fluid"> Scooty</a>
							<a class="nav-item nav-link text-center"><img src="/assets/img/auto.png" alt="" class="img-fluid"> Auto-3</a>
							<a class="nav-item nav-link text-center"><img src="/assets/img/auto-7.png" alt="" class="img-fluid"> E-Rick</a>
							<a class="nav-item nav-link text-center"><img src="/assets/img/UberX.webp" alt="" class="img-fluid"> Micro</a>
							<a class="nav-item nav-link text-center"><img src="/assets/img/UberX.webp" alt="" class="img-fluid"> Mini</a>
							<a class="nav-item nav-link text-center"><img src="/assets/img/Select.webp" alt="" class="img-fluid"> Sedan</a>
							<a class="nav-item nav-link text-center"><img src="/assets/img/Black.webp" alt="" class="img-fluid"> Prime</a>
							<a class="nav-item nav-link text-center"><img src="/assets/img/XL.webp" alt="" class="img-fluid"> MUV</a>
							<a class="nav-item nav-link text-center"><img src="/assets/img/BlackSUV.webp" alt="" class="img-fluid"> SUV</a>
							<a class="nav-item nav-link text-center"><img src="/assets/img/Lux.webp" alt="" class="img-fluid"> Luxury</a>
							<a class="nav-item nav-link text-center"><img src="/assets/img/Pool.webp" alt="" class="img-fluid"> Pool</a>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--
SVL Airport
-->
<section class="min-vh-100 d-none align-items-center py-5 bg-grey-100" id="AiportSection">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-sm-6 vehicle-features">
				<h1 class="text-primary">SVL <span class="text-warning">Airport</span></h1>
				<p><strong>Lorem ipsum dolor sit amet</strong></p>
				<hr>
				<ul>
					<li>Nihil error Vero at ad. Facere a nihil vitae Nihil error Vero at ad.</li>
					<li>Expedita temporibus sed aliquam Facere a nihil vitae</li>
					<li>Quasi doloribus, iusto aut! Expedita temporibus sed aliquam</li>
				</ul>
				<nav class="nav vehicle-features-nav">
					<a class="nav-item nav-link"><i class="far fa-snowflake"></i></a>
					<a class="nav-item nav-link"><i class="fab fa-cc-visa"></i></a>
					<a class="nav-item nav-link"><i class="fas fa-map-marked-alt"></i></a>
					<a class="nav-item nav-link"><i class="far fa-snowflake"></i></a>
					<a class="nav-item nav-link"><i class="fab fa-cc-visa"></i></a>
				</nav>
				<nav class="nav a-mx-2 nav-justified">
					<a href="#" class="nav-item nav-link btn btn-primary btn-lg shadow fweight-500">Find a Ride</a>
					<a href="#" class="nav-item nav-link btn btn-warning btn-lg shadow text-white fweight-500">Estimate a Ride</a>
				</nav>
			</div>
			<div class="col-sm-6">
				<div class="vehicle-type">
				  <div><img class="mx-auto" src="/assets/img/UberX.webp" alt="" height="260"></div>
				  <div><img class="mx-auto" src="/assets/img/Select.webp" alt="" height="260"></div>
				  <div><img class="mx-auto" src="/assets/img/Pool.webp" alt="" height="260"></div>
				  <div><img class="mx-auto" src="/assets/img/XL.webp" alt="" height="260"></div>
				  <div><img class="mx-auto" src="/assets/img/Black.webp" alt="" height="260"></div>
				  <div><img class="mx-auto" src="/assets/img/BlackSUV.webp" alt="" height="260"></div>
				  <div><img class="mx-auto" src="/assets/img/Lux.webp" alt="" height="260"></div>
				</div>
				
				<nav class="nav vehicle-type-nav">
					<a class="nav-item nav-link text-center"><img src="/assets/img/UberX.webp" alt="" class="img-fluid"> Sedan</a>
					<a class="nav-item nav-link text-center"><img src="/assets/img/Select.webp" alt="" class="img-fluid"> Select</a>
					<a class="nav-item nav-link text-center"><img src="/assets/img/Pool.webp" alt="" class="img-fluid"> Pool</a>
					<a class="nav-item nav-link text-center"><img src="/assets/img/XL.webp" alt="" class="img-fluid"> SUV</a>
					<a class="nav-item nav-link text-center"><img src="/assets/img/Black.webp" alt="" class="img-fluid"> Prime</a>
					<a class="nav-item nav-link text-center"><img src="/assets/img/BlackSUV.webp" alt="" class="img-fluid"> SUV Prime</a>
					<a class="nav-item nav-link text-center"><img src="/assets/img/Lux.webp" alt="" class="img-fluid"> Luxury</a>
				</nav>
			</div>
		</div>
	</div>
</section>
<!--
SVL Outstation
-->
<section class="min-vh-100 d-none align-items-center py-5" id="OutstationSection">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-sm-6">
				<div class="vehicle-type">
				  <div><img class="mx-auto" src="/assets/img/UberX.webp" alt="" height="260"></div>
				  <div><img class="mx-auto" src="/assets/img/Select.webp" alt="" height="260"></div>
				  <div><img class="mx-auto" src="/assets/img/Pool.webp" alt="" height="260"></div>
				  <div><img class="mx-auto" src="/assets/img/XL.webp" alt="" height="260"></div>
				  <div><img class="mx-auto" src="/assets/img/Black.webp" alt="" height="260"></div>
				  <div><img class="mx-auto" src="/assets/img/BlackSUV.webp" alt="" height="260"></div>
				  <div><img class="mx-auto" src="/assets/img/Lux.webp" alt="" height="260"></div>
				</div>
				
				<nav class="nav vehicle-type-nav">
					<a class="nav-item nav-link text-center"><img src="/assets/img/UberX.webp" alt="" class="img-fluid"> Sedan</a>
					<a class="nav-item nav-link text-center"><img src="/assets/img/Select.webp" alt="" class="img-fluid"> Select</a>
					<a class="nav-item nav-link text-center"><img src="/assets/img/Pool.webp" alt="" class="img-fluid"> Pool</a>
					<a class="nav-item nav-link text-center"><img src="/assets/img/XL.webp" alt="" class="img-fluid"> SUV</a>
					<a class="nav-item nav-link text-center"><img src="/assets/img/Black.webp" alt="" class="img-fluid"> Prime</a>
					<a class="nav-item nav-link text-center"><img src="/assets/img/BlackSUV.webp" alt="" class="img-fluid"> SUV Prime</a>
					<a class="nav-item nav-link text-center"><img src="/assets/img/Lux.webp" alt="" class="img-fluid"> Luxury</a>
				</nav>
			</div>
			<div class="col-sm-6 vehicle-features">
				<h1 class="text-primary">SVL <span class="text-warning">Outstation</span></h1>
				<p><strong>Lorem ipsum dolor sit amet</strong></p>
				<hr>
				<ul>
					<li>Nihil error Vero at ad. Facere a nihil vitae Nihil error Vero at ad.</li>
					<li>Expedita temporibus sed aliquam Facere a nihil vitae</li>
					<li>Quasi doloribus, iusto aut! Expedita temporibus sed aliquam</li>
				</ul>
				<nav class="nav vehicle-features-nav">
					<a class="nav-item nav-link"><i class="far fa-snowflake"></i></a>
					<a class="nav-item nav-link"><i class="fab fa-cc-visa"></i></a>
					<a class="nav-item nav-link"><i class="fas fa-map-marked-alt"></i></a>
					<a class="nav-item nav-link"><i class="far fa-snowflake"></i></a>
					<a class="nav-item nav-link"><i class="fab fa-cc-visa"></i></a>
				</nav>
				<nav class="nav a-mx-2 nav-justified">
					<a href="#" class="nav-item nav-link btn btn-primary btn-lg shadow fweight-500">Find a Ride</a>
					<a href="#" class="nav-item nav-link btn btn-warning btn-lg shadow text-white fweight-500">Estimate a Ride</a>
				</nav>
			</div>
		</div>
	</div>
</section>
<!--
SVL Rentals
-->
<section class="min-vh-100 d-none align-items-center py-5 bg-grey-100" id="RentalsSection">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-sm-6 vehicle-features">
				<h1 class="text-primary">SVL <span class="text-warning">Rentals</span></h1>
				<p><strong>Lorem ipsum dolor sit amet</strong></p>
				<hr>
				<ul>
					<li>Nihil error Vero at ad. Facere a nihil vitae Nihil error Vero at ad.</li>
					<li>Expedita temporibus sed aliquam Facere a nihil vitae</li>
					<li>Quasi doloribus, iusto aut! Expedita temporibus sed aliquam</li>
				</ul>
				<nav class="nav vehicle-features-nav">
					<a class="nav-item nav-link"><i class="far fa-snowflake"></i></a>
					<a class="nav-item nav-link"><i class="fab fa-cc-visa"></i></a>
					<a class="nav-item nav-link"><i class="fas fa-map-marked-alt"></i></a>
					<a class="nav-item nav-link"><i class="far fa-snowflake"></i></a>
					<a class="nav-item nav-link"><i class="fab fa-cc-visa"></i></a>
				</nav>
				<nav class="nav a-mx-2 nav-justified">
					<a href="#" class="nav-item nav-link btn btn-primary btn-lg shadow fweight-500">Find a Ride</a>
					<a href="#" class="nav-item nav-link btn btn-warning btn-lg shadow text-white fweight-500">Estimate a Ride</a>
				</nav>
			</div>
			<div class="col-sm-6">
				<div class="vehicle-type">
				  <div><img class="mx-auto" src="/assets/img/UberX.webp" alt="" height="260"></div>
				  <div><img class="mx-auto" src="/assets/img/Select.webp" alt="" height="260"></div>
				  <div><img class="mx-auto" src="/assets/img/Pool.webp" alt="" height="260"></div>
				  <div><img class="mx-auto" src="/assets/img/XL.webp" alt="" height="260"></div>
				  <div><img class="mx-auto" src="/assets/img/Black.webp" alt="" height="260"></div>
				  <div><img class="mx-auto" src="/assets/img/BlackSUV.webp" alt="" height="260"></div>
				  <div><img class="mx-auto" src="/assets/img/Lux.webp" alt="" height="260"></div>
				</div>
				
				<nav class="nav vehicle-type-nav">
					<a class="nav-item nav-link text-center"><img src="/assets/img/UberX.webp" alt="" class="img-fluid"> Sedan</a>
					<a class="nav-item nav-link text-center"><img src="/assets/img/Select.webp" alt="" class="img-fluid"> Select</a>
					<a class="nav-item nav-link text-center"><img src="/assets/img/Pool.webp" alt="" class="img-fluid"> Pool</a>
					<a class="nav-item nav-link text-center"><img src="/assets/img/XL.webp" alt="" class="img-fluid"> SUV</a>
					<a class="nav-item nav-link text-center"><img src="/assets/img/Black.webp" alt="" class="img-fluid"> Prime</a>
					<a class="nav-item nav-link text-center"><img src="/assets/img/BlackSUV.webp" alt="" class="img-fluid"> SUV Prime</a>
					<a class="nav-item nav-link text-center"><img src="/assets/img/Lux.webp" alt="" class="img-fluid"> Luxury</a>
				</nav>
			</div>
		</div>
	</div>
</section>
<!--
SVL Truck
-->
<section class="min-vh-100 d-none align-items-center py-5" id="TruckSection">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-sm-6">
				<div class="vehicle-type">
				  <div><img class="mx-auto" src="/assets/img/UberX.webp" alt="" height="260"></div>
				  <div><img class="mx-auto" src="/assets/img/Select.webp" alt="" height="260"></div>
				  <div><img class="mx-auto" src="/assets/img/Pool.webp" alt="" height="260"></div>
				  <div><img class="mx-auto" src="/assets/img/XL.webp" alt="" height="260"></div>
				  <div><img class="mx-auto" src="/assets/img/Black.webp" alt="" height="260"></div>
				  <div><img class="mx-auto" src="/assets/img/BlackSUV.webp" alt="" height="260"></div>
				  <div><img class="mx-auto" src="/assets/img/Lux.webp" alt="" height="260"></div>
				</div>
				
				<nav class="nav vehicle-type-nav">
					<a class="nav-item nav-link text-center"><img src="/assets/img/UberX.webp" alt="" class="img-fluid"> Sedan</a>
					<a class="nav-item nav-link text-center"><img src="/assets/img/Select.webp" alt="" class="img-fluid"> Select</a>
					<a class="nav-item nav-link text-center"><img src="/assets/img/Pool.webp" alt="" class="img-fluid"> Pool</a>
					<a class="nav-item nav-link text-center"><img src="/assets/img/XL.webp" alt="" class="img-fluid"> SUV</a>
					<a class="nav-item nav-link text-center"><img src="/assets/img/Black.webp" alt="" class="img-fluid"> Prime</a>
					<a class="nav-item nav-link text-center"><img src="/assets/img/BlackSUV.webp" alt="" class="img-fluid"> SUV Prime</a>
					<a class="nav-item nav-link text-center"><img src="/assets/img/Lux.webp" alt="" class="img-fluid"> Luxury</a>
				</nav>
			</div>
			<div class="col-sm-6 vehicle-features">
				<h1 class="text-primary">SVL <span class="text-warning">Truck</span></h1>
				<p><strong>Lorem ipsum dolor sit amet</strong></p>
				<hr>
				<ul>
					<li>Nihil error Vero at ad. Facere a nihil vitae Nihil error Vero at ad.</li>
					<li>Expedita temporibus sed aliquam Facere a nihil vitae</li>
					<li>Quasi doloribus, iusto aut! Expedita temporibus sed aliquam</li>
				</ul>
				<nav class="nav vehicle-features-nav">
					<a class="nav-item nav-link"><i class="far fa-snowflake"></i></a>
					<a class="nav-item nav-link"><i class="fab fa-cc-visa"></i></a>
					<a class="nav-item nav-link"><i class="fas fa-map-marked-alt"></i></a>
					<a class="nav-item nav-link"><i class="far fa-snowflake"></i></a>
					<a class="nav-item nav-link"><i class="fab fa-cc-visa"></i></a>
				</nav>
				<nav class="nav a-mx-2 nav-justified">
					<a href="#" class="nav-item nav-link btn btn-primary btn-lg shadow fweight-500">Find a Ride</a>
					<a href="#" class="nav-item nav-link btn btn-warning btn-lg shadow text-white fweight-500">Estimate a Ride</a>
				</nav>
			</div>
		</div>
	</div>
</section>
<!--
Services
-->
<section class="min-vh-100 d-none align-items-center py-5 bg-grey-100" id="VehiclesSection">
    <div class="container">
        <div class="row">
            <div class="col-12 animated fadeIn">
				<h2 class="heading text-uppercase text-center mb-5 position-relative">Vehicles</h2>
							
                <div class="btn-group mb-4 d-flex justify-content-between mixitup-controls flex-wrap overflow-hidden" role="group" aria-label="ServicesFilter">
                    <button type="button" class="btn btn-link" data-mixitup-control data-filter="all">All</button>
                    <button type="button" class="btn btn-link" data-mixitup-control data-filter=".CityTrips">City Trips</button>
                    <button type="button" class="btn btn-link" data-mixitup-control data-filter=".Airport">Airport</button>
                    <button type="button" class="btn btn-link" data-mixitup-control data-filter=".OutStation">Out Station</button>
                    <button type="button" class="btn btn-link" data-mixitup-control data-filter=".Rentals">Rentals</button>
                    <button type="button" class="btn btn-link" data-mixitup-control data-filter=".Truck">Truck</button>
                </div>
                <div class="row mixitup-container pt-2" data-ref="mixitup-container">
                    <div class="col-sm-3 mix CityTrips" data-ref="mixitup-target">
                        <div class="card border-0 mb-4">
							<a class="hover-effect" href="details.html" data-toggle="modal" data-target="#vehicleDetailsModal">
								<img src="/assets/img/UberX.webp" alt="" class="card-img-top">
							</a>
							<div class="card-header bg-white border-bottom-0 d-flex align-items-center justify-content-between py-2">
								<h6 class="card-title feature-box-title mb-0 font-size-3 fweight-400">Micro</h6>
								<a class="btn btn-light btn-sm font-size-1 text-uppercase" href="details.html" role="button" title="View Details"  data-toggle="modal" data-target="#vehicleDetailsModal">Details</a>
							</div>
                        </div>
                    </div>
                    <div class="col-sm-3 mix CityTrips" data-ref="mixitup-target">
                        <div class="card border-0 mb-4">
							<a class="hover-effect" href="details.html" data-toggle="modal" data-target="#vehicleDetailsModal">
								<img src="/assets/img/Pool.webp" alt="" class="card-img-top">
							</a>
							<div class="card-header bg-white border-bottom-0 d-flex align-items-center justify-content-between py-2">
								<h6 class="card-title feature-box-title mb-0 font-size-3 fweight-400">Mini</h6>
								<a class="btn btn-light btn-sm font-size-1 text-uppercase" href="details.html" role="button" title="View Details"  data-toggle="modal" data-target="#vehicleDetailsModal">Details</a>
							</div>
                        </div>
                    </div>
                    <div class="col-sm-3 mix CityTrips" data-ref="mixitup-target">
                        <div class="card border-0 mb-4">
							<a class="hover-effect" href="details.html" data-toggle="modal" data-target="#vehicleDetailsModal">
								<img src="/assets/img/XL.webp" alt="" class="card-img-top">
							</a>
							<div class="card-header bg-white border-bottom-0 d-flex align-items-center justify-content-between py-2">
								<h6 class="card-title feature-box-title mb-0 font-size-3 fweight-400">Prime Sedan</h6>
								<a class="btn btn-light btn-sm font-size-1 text-uppercase" href="details.html" role="button" title="View Details"  data-toggle="modal" data-target="#vehicleDetailsModal">Details</a>
							</div>
                        </div>
                    </div>
                    <div class="col-sm-3 mix CityTrips" data-ref="mixitup-target">
                        <div class="card border-0 mb-4">
							<a class="hover-effect" href="details.html" data-toggle="modal" data-target="#vehicleDetailsModal">
								<img src="/assets/img/Select.webp" alt="" class="card-img-top">
							</a>
							<div class="card-header bg-white border-bottom-0 d-flex align-items-center justify-content-between py-2">
								<h6 class="card-title feature-box-title mb-0 font-size-3 fweight-400">Prime Play</h6>
								<a class="btn btn-light btn-sm font-size-1 text-uppercase" href="details.html" role="button" title="View Details"  data-toggle="modal" data-target="#vehicleDetailsModal">Details</a>
							</div>
                        </div>
                    </div>
                    <div class="col-sm-3 mix Airport" data-ref="mixitup-target">
                        <div class="card border-0 mb-4">
							<a class="hover-effect" href="details.html" data-toggle="modal" data-target="#vehicleDetailsModal">
								<img src="/assets/img/Black.webp" alt="" class="card-img-top">
							</a>
							<div class="card-header bg-white border-bottom-0 d-flex align-items-center justify-content-between py-2">
								<h6 class="card-title feature-box-title mb-0 font-size-3 fweight-400">Prime SUV</h6>
								<a class="btn btn-light btn-sm font-size-1 text-uppercase" href="details.html" role="button" title="View Details"  data-toggle="modal" data-target="#vehicleDetailsModal">Details</a>
							</div>
                        </div>
                    </div>
                    <div class="col-sm-3 mix Airport" data-ref="mixitup-target">
                        <div class="card border-0 mb-4">
							<a class="hover-effect" href="details.html" data-toggle="modal" data-target="#vehicleDetailsModal">
								<img src="/assets/img/WAV.webp" alt="" class="card-img-top">
							</a>
							<div class="card-header bg-white border-bottom-0 d-flex align-items-center justify-content-between py-2">
								<h6 class="card-title feature-box-title mb-0 font-size-3 fweight-400">Lux</h6>
								<a class="btn btn-light btn-sm font-size-1 text-uppercase" href="details.html" role="button" title="View Details"  data-toggle="modal" data-target="#vehicleDetailsModal">Details</a>
							</div>
                        </div>
                    </div>
                    <div class="col-sm-3 mix Airport" data-ref="mixitup-target">
                        <div class="card border-0 mb-4">
							<a class="hover-effect" href="details.html" data-toggle="modal" data-target="#vehicleDetailsModal">
								<img src="/assets/img/Lux.webp" alt="" class="card-img-top">
							</a>
							<div class="card-header bg-white border-bottom-0 d-flex align-items-center justify-content-between py-2">
								<h6 class="card-title feature-box-title mb-0 font-size-3 fweight-400">Pool</h6>
								<a class="btn btn-light btn-sm font-size-1 text-uppercase" href="details.html" role="button" title="View Details"  data-toggle="modal" data-target="#vehicleDetailsModal">Details</a>
							</div>
                        </div>
                    </div>
                    <div class="col-sm-3 mix Airport" data-ref="mixitup-target">
                        <div class="card border-0 mb-4">
							<a class="hover-effect" href="details.html" data-toggle="modal" data-target="#vehicleDetailsModal">
								<img src="/assets/img/BlackSUV.webp" alt="" class="card-img-top">
							</a>
							<div class="card-header bg-white border-bottom-0 d-flex align-items-center justify-content-between py-2">
								<h6 class="card-title feature-box-title mb-0 font-size-3 fweight-400">Bike</h6>
								<a class="btn btn-light btn-sm font-size-1 text-uppercase" href="details.html" role="button" title="View Details"  data-toggle="modal" data-target="#vehicleDetailsModal">Details</a>
							</div>
                        </div>
                    </div>
					<div class="col-sm-3 mix OutStation" data-ref="mixitup-target">
						<div class="card border-0 mb-4">
							<a class="hover-effect" href="details.html" data-toggle="modal" data-target="#vehicleDetailsModal">
								<img src="/assets/img/UberX.webp" alt="" class="card-img-top">
							</a>
							<div class="card-header bg-white border-bottom-0 d-flex align-items-center justify-content-between py-2">
								<h6 class="card-title feature-box-title mb-0 font-size-3 fweight-400">Auto</h6>
								<a class="btn btn-light btn-sm font-size-1 text-uppercase" href="details.html" role="button" title="View Details"  data-toggle="modal" data-target="#vehicleDetailsModal">Details</a>
							</div>
						</div>
					</div>
					<div class="col-sm-3 mix OutStation" data-ref="mixitup-target">
						<div class="card border-0 mb-4">
							<a class="hover-effect" href="details.html" data-toggle="modal" data-target="#vehicleDetailsModal">
								<img src="/assets/img/Pool.webp" alt="" class="card-img-top">
							</a>
							<div class="card-header bg-white border-bottom-0 d-flex align-items-center justify-content-between py-2">
								<h6 class="card-title feature-box-title mb-0 font-size-3 fweight-400">Carrier</h6>
								<a class="btn btn-light btn-sm font-size-1 text-uppercase" href="details.html" role="button" title="View Details"  data-toggle="modal" data-target="#vehicleDetailsModal">Details</a>
							</div>
                        </div>
					</div>
					<div class="col-sm-3 mix OutStation" data-ref="mixitup-target">
						<div class="card border-0 mb-4">
							<a class="hover-effect" href="details.html" data-toggle="modal" data-target="#vehicleDetailsModal">
								<img src="/assets/img/XL.webp" alt="" class="card-img-top">
							</a>
							<div class="card-header bg-white border-bottom-0 d-flex align-items-center justify-content-between py-2">
								<h6 class="card-title feature-box-title mb-0 font-size-3 fweight-400">Prime</h6>
								<a class="btn btn-light btn-sm font-size-1 text-uppercase" href="details.html" role="button" title="View Details"  data-toggle="modal" data-target="#vehicleDetailsModal">Details</a>
							</div>
						</div>
					</div>
					<div class="col-sm-3 mix OutStation" data-ref="mixitup-target">
						<div class="card border-0 mb-4">
							<a class="hover-effect" href="details.html" data-toggle="modal" data-target="#vehicleDetailsModal">
								<img src="/assets/img/Select.webp" alt="" class="card-img-top">
							</a>
							<div class="card-header bg-white border-bottom-0 d-flex align-items-center justify-content-between py-2">
								<h6 class="card-title feature-box-title mb-0 font-size-3 fweight-400">Prime</h6>
								<a class="btn btn-light btn-sm font-size-1 text-uppercase" href="details.html" role="button" title="View Details"  data-toggle="modal" data-target="#vehicleDetailsModal">Details</a>
							</div>
						</div>
					</div>
					<div class="col-sm-3 mix Rentals" data-ref="mixitup-target">
						<div class="card border-0 mb-4">
							<a class="hover-effect" href="details.html" data-toggle="modal" data-target="#vehicleDetailsModal">
								<img src="/assets/img/Black.webp" alt="" class="card-img-top">
							</a>
							<div class="card-header bg-white border-bottom-0 d-flex align-items-center justify-content-between py-2">
								<h6 class="card-title feature-box-title mb-0 font-size-3 fweight-400">Prime</h6>
								<a class="btn btn-light btn-sm font-size-1 text-uppercase" href="details.html" role="button" title="View Details"  data-toggle="modal" data-target="#vehicleDetailsModal">Details</a>
							</div>
						</div>
					</div>
					<div class="col-sm-3 mix Rentals" data-ref="mixitup-target">
						<div class="card border-0 mb-4">
							<a class="hover-effect" href="details.html" data-toggle="modal" data-target="#vehicleDetailsModal">
								<img src="/assets/img/WAV.webp" alt="" class="card-img-top">
							</a>
							<div class="card-header bg-white border-bottom-0 d-flex align-items-center justify-content-between py-2">
								<h6 class="card-title feature-box-title mb-0 font-size-3 fweight-400">Prime</h6>
								<a class="btn btn-light btn-sm font-size-1 text-uppercase" href="details.html" role="button" title="View Details"  data-toggle="modal" data-target="#vehicleDetailsModal">Details</a>
							</div>
						</div>
					</div>
					<div class="col-sm-3 mix Rentals" data-ref="mixitup-target">
						<div class="card border-0 mb-4">
							<a class="hover-effect" href="details.html" data-toggle="modal" data-target="#vehicleDetailsModal">
								<img src="/assets/img/Lux.webp" alt="" class="card-img-top">
							</a>
							<div class="card-header bg-white border-bottom-0 d-flex align-items-center justify-content-between py-2">
								<h6 class="card-title feature-box-title mb-0 font-size-3 fweight-400">Prime</h6>
								<a class="btn btn-light btn-sm font-size-1 text-uppercase" href="details.html" role="button" title="View Details"  data-toggle="modal" data-target="#vehicleDetailsModal">Details</a>
							</div>
						</div>
					</div>
					<div class="col-sm-3 mix Rentals" data-ref="mixitup-target">
						<div class="card border-0 mb-4">
								<a class="hover-effect" href="details.html" data-toggle="modal" data-target="#vehicleDetailsModal">
									<img src="/assets/img/BlackSUV.webp" alt="" class="card-img-top">
								</a>
								<div class="card-header bg-white border-bottom-0 d-flex align-items-center justify-content-between py-2">
									<h6 class="card-title feature-box-title mb-0 font-size-3 fweight-400">Prime</h6>
									<a class="btn btn-light btn-sm font-size-1 text-uppercase" href="details.html" role="button" title="View Details"  data-toggle="modal" data-target="#vehicleDetailsModal">Details</a>
								</div>
							</div>
					</div>
					<div class="col-sm-3 mix Truck" data-ref="mixitup-target">
						<div class="card border-0 mb-4">
								<a class="hover-effect" href="details.html" data-toggle="modal" data-target="#vehicleDetailsModal">
									<img src="/assets/img/UberX.webp" alt="" class="card-img-top">
								</a>
								<div class="card-header bg-white border-bottom-0 d-flex align-items-center justify-content-between py-2">
									<h6 class="card-title feature-box-title mb-0 font-size-3 fweight-400">Prime</h6>
									<a class="btn btn-light btn-sm font-size-1 text-uppercase" href="details.html" role="button" title="View Details"  data-toggle="modal" data-target="#vehicleDetailsModal">Details</a>
								</div>
							</div>
					</div>
					<div class="col-sm-3 mix Truck" data-ref="mixitup-target">
						<div class="card border-0 mb-4">
								<a class="hover-effect" href="details.html" data-toggle="modal" data-target="#vehicleDetailsModal">
									<img src="/assets/img/Pool.webp" alt="" class="card-img-top">
								</a>
								<div class="card-header bg-white border-bottom-0 d-flex align-items-center justify-content-between py-2">
									<h6 class="card-title feature-box-title mb-0 font-size-3 fweight-400">Prime</h6>
									<a class="btn btn-light btn-sm font-size-1 text-uppercase" href="details.html" role="button" title="View Details"  data-toggle="modal" data-target="#vehicleDetailsModal">Details</a>
								</div>
							</div>
					</div>
					<div class="col-sm-3 mix Truck" data-ref="mixitup-target">
						<div class="card border-0 mb-4">
								<a class="hover-effect" href="details.html" data-toggle="modal" data-target="#vehicleDetailsModal">
									<img src="/assets/img/XL.webp" alt="" class="card-img-top">
								</a>
								<div class="card-header bg-white border-bottom-0 d-flex align-items-center justify-content-between py-2">
									<h6 class="card-title feature-box-title mb-0 font-size-3 fweight-400">Prime</h6>
									<a class="btn btn-light btn-sm font-size-1 text-uppercase" href="details.html" role="button" title="View Details"  data-toggle="modal" data-target="#vehicleDetailsModal">Details</a>
								</div>
							</div>
					</div>
					<div class="col-sm-3 mix Truck" data-ref="mixitup-target">
						<div class="card border-0 mb-4">
								<a class="hover-effect" href="details.html" data-toggle="modal" data-target="#vehicleDetailsModal">
									<img src="/assets/img/Select.webp" alt="" class="card-img-top">
								</a>
								<div class="card-header bg-white border-bottom-0 d-flex align-items-center justify-content-between py-2">
									<h6 class="card-title feature-box-title mb-0 font-size-3 fweight-400">Prime</h6>
									<a class="btn btn-light btn-sm font-size-1 text-uppercase" href="details.html" role="button" title="View Details"  data-toggle="modal" data-target="#vehicleDetailsModal">Details</a>
								</div>
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--
Download App
-->
<section id="DownloadAppSection" class="d-flex align-items-center py-5 bg-dark text-white" uk-height-viewport>
	<div class="container">
		<div class="row align-items-center">
			<div class="col-sm-5 order-sm-last" uk-scrollspy="cls:uk-animation-slide-bottom; repeat: true; delay: 500">
				<img src="assets/img/iPhone.png" alt="" class="img-fluid">
			</div>
			<div class="col-sm" uk-scrollspy="cls:uk-animation-slide-left; repeat: true; delay: 500">
				<h1 class="text-white text-center text-sm-left font-size-10">Get our <span class="text-warning">5G App</span> <span class="d-none d-sm-inline-flex"> from the Store</span></h1>
				<p class="fweight-400 grey-500">Download the app for exclusive deals and ease of booking </p>
				<nav class="nav nav-fill a-mx-2 a-px-0 mb-4">
					<a href="#" class="nav-item nav-link">
						<img src="assets/img/badge-apple.svg" alt="">
					</a>
					<a href="#" class="nav-item nav-link">
						<img src="assets/img/badge-google.svg" alt="">
					</a>
					<a href="#" class="nav-item nav-link">
						<img src="assets/img/badge-microsoft.svg" alt="">
					</a>
				</nav>
				<div class="row">
					<div class="col-sm-6">
						<div class="media mb-3">
							<i class="fas fa-bullseye fa-2x mr-3 grey-400"></i>
							<div class="media-body">
								<h6 class="mt-0 fweight-400 grey-400">Absolute Convenience</h6>
								<p class="font-size-2 fweight-400 grey-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, corporis</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="media mb-3">
							<i class="fas fa-bullseye fa-2x mr-3 grey-400"></i>
							<div class="media-body">
								<h6 class="mt-0 fweight-400 grey-400">Transparent Billing</h6>
								<p class="font-size-2 fweight-400 grey-500">accusantium? Tempore itaque cupiditate recusandae facere amet optio, officia</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="media mb-3">
							<i class="fas fa-bullseye fa-2x mr-3 grey-400"></i>
							<div class="media-body">
								<h6 class="mt-0 fweight-400 grey-400">Time &amp; Cost Savings</h6>
								<p class="font-size-2 fweight-400 grey-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, corporis</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="media mb-3">
							<i class="fas fa-bullseye fa-2x mr-3 grey-400"></i>
							<div class="media-body">
								<h6 class="mt-0 fweight-400 grey-400">One Clikc for All Services</h6>
								<p class="font-size-2 fweight-400 grey-500">accusantium? Tempore itaque cupiditate recusandae facere amet optio, officia</p>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</div>
</section>
<!--
Testimonials
-->
<section class="min-vh-100 d-flex align-items-center py-5 testimonials bg-blue-50 position-relative" id="FeedbackSection">
	<div class="container py-5">
		<div class="row align-items-center">
			<div class="col-sm-8">
				<h2 class="heading text-uppercase text-center mb-5 position-relative">What Our Customer Says!</h2>
				<div class="testimonials-carousel owl-carousel owl-theme">
					<div class="item row align-items-center justify-content-center">
						<div class="col-sm-2">
							<img src="https://picsum.photos/150/150?random=1" alt="" class="rounded-circle img-fluid w-auto mx-auto">
						</div>
						<div class="col-sm">
							<h6 class="text-primary">Person Name <small class="text-warning">Subtitle</small></h6>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores nemo optio similique quidem ratione distinctio est sapiente aperiam accusamus consequatur officiis odio, ipsum ipsa earum aliquam sequi esse veniam blanditiis.</p>
						</div>
					</div>
					<div class="item row align-items-center">
						<div class="col-sm-2">
							<img src="https://picsum.photos/150/150?random=1" alt="" class="rounded-circle img-fluid w-auto mx-auto">
						</div>
						<div class="col-sm">
							<h6 class="text-primary">Person Name <small class="text-warning">Subtitle</small></h6>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores nemo optio similique quidem ratione distinctio est sapiente aperiam accusamus consequatur officiis odio, ipsum ipsa earum aliquam sequi esse veniam blanditiis.</p>
						</div>
					</div>
					<div class="item row align-items-center">
						<div class="col-sm-2">
							<img src="https://picsum.photos/150/150?random=2" alt="" class="rounded-circle img-fluid w-auto mx-auto">
						</div>
						<div class="col-sm">
							<h6 class="text-primary">Person Name <small class="text-warning">Subtitle</small></h6>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores nemo optio similique quidem ratione distinctio est sapiente aperiam accusamus consequatur officiis odio, ipsum ipsa earum aliquam sequi esse veniam blanditiis.</p>
						</div>
					</div>
					<div class="item row align-items-center">
						<div class="col-sm-2">
							<img src="https://picsum.photos/150/150?random=3" alt="" class="rounded-circle img-fluid w-auto mx-auto">
						</div>
						<div class="col-sm">
							<h6 class="text-primary">Person Name <small class="text-warning">Subtitle</small></h6>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores nemo optio similique quidem ratione distinctio est sapiente aperiam accusamus consequatur officiis odio, ipsum ipsa earum aliquam sequi esse veniam blanditiis.</p>
						</div>
					</div>
					<div class="item row align-items-center">
						<div class="col-sm-2">
							<img src="https://picsum.photos/150/150?random=4" alt="" class="rounded-circle img-fluid w-auto mx-auto">
						</div>
						<div class="col-sm">
							<h6 class="text-primary">Person Name <small class="text-warning">Subtitle</small></h6>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores nemo optio similique quidem ratione distinctio est sapiente aperiam accusamus consequatur officiis odio, ipsum ipsa earum aliquam sequi esse veniam blanditiis.</p>
						</div>
					</div>
				</div>
				<nav class="nav justify-content-center a-mx-2">
					<a href="#" class="nav-item nav-link btn btn-primary shadow my-5 fweight-500">Reviews - Dashboard</a>
					<a href="#" class="nav-item nav-link btn btn-warning shadow my-5 text-white fweight-500">Feedback</a>
				</nav>
			</div>
		</div>
	</div>
</section>
<!--
Contact Us
-->
<section class="contact-us" id="ContactSection">
	<header class="min-vh-100 d-flex align-items-center bg-light py-5" id="contact-us">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="heading text-uppercase text-center mb-3 position-relative">Contact Us</h2>
				</div>
			</div>
			<div class="row py-4">
				<div class="col-sm">
					<div class="list-group list-group-flush mb-3">
						<a href="#" class="list-group-item list-group-item-action">
							<h5>Registered and Corporate Office</h5>
							<h6 class="text-muted my-3">SVL Global</h6>
							<p class="text-muted font-size-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente ea officiis necessitatibus commodi.</p>
						</a>
						<a href="#" class="list-group-item list-group-item-action">
							<h5>Hyderabad</h5>
							<h6 class="text-muted my-3">SVL Global</h6>
							<p class="text-muted font-size-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente ea officiis necessitatibus commodi.</p>
						</a>
						<a href="#" class="list-group-item list-group-item-action border-bottom">
							<h5>Bangalore</h5>
							<h6 class="text-muted my-3">SVL Global</h6>
							<p class="text-muted font-size-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente ea officiis necessitatibus commodi.</p>
						</a>
					</div>
				</div>
				<div class="col-sm position-relative">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243647.31698248573!2d78.26795853991645!3d17.4122998009489!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb99daeaebd2c7%3A0xae93b78392bafbc2!2sHyderabad%2C%20Telangana!5e0!3m2!1sen!2sin!4v1581677103531!5m2!1sen!2sin" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					<a class="btn btn-primary position-absolute map-share-btn fweight-500" href="#" role="button" data-toggle="modal" data-target="#shareMapModal">Get Location Info <i class="fas fa-share"></i></a>
				</div>
			</div>
		</div>
	</header>
	<div class="min-vh-100 d-flex align-items-center" id="EmailSection">
		<div class="container">
			<div class="row" id="mail-us">
				<div class="col-sm-3 hidden-xs">
					<div class="nav flex-column nav-pills nav-fill contact-us-tabs mb-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="feed-on-info-list" data-toggle="pill" href="#feed-on-info" role="tab" aria-controls="FeedbackOnInfo" aria-selected="true">Feedback on T-Pilots APP Accessibility</a>
						<a class="nav-link" id="feed-on-staff-list" data-toggle="pill" href="#feed-on-staff" role="tab" aria-controls="FeedbackOnStaff">Feedback on T-Pilots</a>
						<a class="nav-link" id="online-services-list" data-toggle="pill" href="#online-services" role="tab" aria-controls="OnlineServices">Issues with Web Access</a>
						<a class="nav-link" id="new-tie-up-list" data-toggle="pill" href="#new-tie-up" role="tab" aria-controls="NewTieUp">Corporate Tie-up with T-Pilots</a>
						<a class="nav-link" id="suggestions-on-ui-list" data-toggle="pill" href="#suggestions-on-ui" role="tab" aria-controls="SuggestionsOnUI">Suggestions on User Interface?</a>
						<a class="nav-link" id="other-issue-list" data-toggle="pill" href="#other-issue" role="tab" aria-controls="OtherIssue">Any Other Issue</a>
					</div>
				</div>
				<div class="col-sm-9">
					<div class="tab-content" id="v-pills-tabContent">
						<div class="tab-pane fade show active" id="feed-on-info" role="tabpanel" aria-labelledby="feed-on-info-list">
							<h4 class="fweight-400 border-bottom pb-2 mb-3">Feedback on T-Pilots APP Accessibility</h4>
							<p class="text-muted">Your feedback will help us improve</p>
							<form>
								<div class="form-group">
										<input type="text" class="form-control" id="" placeholder="Select City Name*" value="">    
								</div>
								<div class="form-group">
										<input type="text" class="form-control" id="fbnamid" placeholder="Name*" value="">
								</div>
								<div class="form-group dt">
									<div class="input-group">
										<div class="input-group-prepend"><span class="input-group-text" id="">+91</span></div>
										<input type="number" onkeypress="return isNumber(event,this.id)" class="form-control form-control-bdr-nn" maxlength="10" id="fbmobile" placeholder="Mobile Number*" value="">
									</div>
								</div>
								<div class="form-group">
									<input type="email" class="form-control" id="fbemail" placeholder="Email" value="">
								</div>
								<div class="form-group">
									<textarea class="form-control" id="fbcomment" rows="4" placeholder="Message*"></textarea>
								</div>
								<div class="form-row justify-content-between align-items-center">
									<div class="form-group col-sm-auto">
										<span class="smltx tcon">* Marked Fields Mandatory</span>
									</div>
									<div class="form-group col-sm-3">
										<img src="/assets/img/newCaptchaAnchor.gif" alt="" class="img-fluid">
									</div>
									<div class="form-group col-sm-auto">
										<div class="text-right text-left-xs">
											<button type="button" class="btn btn-primary btn-lg">Submit</button>
										</div>
									</div>
								</div>
							</form>
						</div>
						<div class="tab-pane fade" id="feed-on-staff" role="tabpanel" aria-labelledby="feed-on-staff-list">
							<h4 class="fweight-400 border-bottom pb-2 mb-3">Feedback on T-Pilots</h4>
							<p class="text-muted">Your feedback will help us improve</p>
							<form>
										<div class="form-group">
												<input type="text" class="form-control" id="" placeholder="Select City Name*" value="">    
										</div>
										<div class="form-group">
												<input type="text" class="form-control" id="fbnamid" placeholder="Name*" value="">
										</div>
										<div class="form-group dt">
											<div class="input-group">
												<div class="input-group-prepend"><span class="input-group-text" id="">+91</span></div>
												<input type="number" onkeypress="return isNumber(event,this.id)" class="form-control form-control-bdr-nn" maxlength="10" id="fbmobile" placeholder="Mobile Number*" value="">
											</div>
										</div>
										<div class="form-group">
											<input type="email" class="form-control" id="fbemail" placeholder="Email" value="">
										</div>
										<div class="form-group">
											<textarea class="form-control" id="fbcomment" rows="4" placeholder="Message*"></textarea>
										</div>
										<div class="form-row justify-content-between align-items-center">
											<div class="form-group col-sm-auto">
												<span class="smltx tcon">* Marked Fields Mandatory</span>
											</div>
											<div class="form-group col-sm-auto">
												<div class="text-right text-left-xs">
														<button type="button" onclick="feedbackresult('Other Issues');" class="btn btn-primary btn-lg" id="feedBtnId"><span class="tcon">Submit</span> <span class="white_lodr" style="display:none;"></span></button>
												</div>
											</div>
										</div>
								</form>
						</div>
						<div class="tab-pane fade" id="online-services" role="tabpanel" aria-labelledby="online-services-list">
							<h4 class="fweight-400 border-bottom pb-2 mb-3">Issues with Web Access</h4>
							<p class="text-muted">Your feedback will help us improve</p>
							<form>
										<div class="form-group">
												<input type="text" class="form-control" id="" placeholder="Select City Name*" value="">    
										</div>
										<div class="form-group">
												<input type="text" class="form-control" id="fbnamid" placeholder="Name*" value="">
										</div>
										<div class="form-group dt">
											<div class="input-group">
												<div class="input-group-prepend"><span class="input-group-text" id="">+91</span></div>
												<input type="number" onkeypress="return isNumber(event,this.id)" class="form-control form-control-bdr-nn" maxlength="10" id="fbmobile" placeholder="Mobile Number*" value="">
											</div>
										</div>
										<div class="form-group">
											<input type="email" class="form-control" id="fbemail" placeholder="Email" value="">
										</div>
										<div class="form-group">
											<textarea class="form-control" id="fbcomment" rows="4" placeholder="Message*"></textarea>
										</div>
										<div class="form-row justify-content-between align-items-center">
											<div class="form-group col-sm-auto">
												<span class="smltx tcon">* Marked Fields Mandatory</span>
											</div>
											<div class="form-group col-sm-auto">
												<div class="text-right text-left-xs">
														<button type="button" onclick="feedbackresult('Other Issues');" class="btn btn-primary btn-lg" id="feedBtnId"><span class="tcon">Submit</span> <span class="white_lodr" style="display:none;"></span></button>
												</div>
											</div>
										</div>

								</form>
						</div>
						<div class="tab-pane fade" id="new-tie-up" role="tabpanel" aria-labelledby="new-tie-up-list">
							<h4 class="fweight-400 border-bottom pb-2 mb-3">Corporate Tie-up with T-Pilots</h4>
							<p class="text-muted">We are Happy to associate with you for Growing Together</p>
							<form>
								<div class="form-row">
									<div class="form-group col-sm-9">
										<input type="text" class="form-control" placeholder="Company Name" value="">    
									</div>
									<div class="form-group col-sm-3">
										<input type="text" class="form-control" placeholder="Hyderabad" value="">    
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-sm-2">
										<select class="form-control">
										  <option selected>Title</option>
										  <option value="1">One</option>
										  <option value="2">Two</option>
										  <option value="3">Three</option>
										</select>  
									</div>
									<div class="form-group col-sm-5">
										<input type="text" class="form-control" placeholder="First Name" value="">    
									</div>
									<div class="form-group col-sm-5">
										<input type="text" class="form-control" placeholder="Last Name" value="">    
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-sm">
										<div class="input-group">
											<div class="input-group-prepend">
												<span class="input-group-text" id="">+91</span>
											</div>
											<input type="number" class="form-control" placeholder="Mobile Number*" value="">
										</div>
									</div>
									<div class="form-group col-sm">
										<input type="email" class="form-control" placeholder="Email" value="">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-sm">
										<select class="form-control">
										  <option selected>Service Category*</option>
										  <option value="1">One</option>
										  <option value="2">Two</option>
										  <option value="3">Three</option>
										</select>  
									</div>
									<div class="form-group col-sm">
										<select class="form-control">
										  <option selected>Services List*</option>
										  <option value="1">One</option>
										  <option value="2">Two</option>
										  <option value="3">Three</option>
										</select>    
									</div>
								</div>
								<div class="form-group">
									<textarea class="form-control" id="fbcomment" rows="4" placeholder="Message*"></textarea>
								</div>
								<div class="form-row justify-content-between align-items-center">
									<div class="form-group col-sm-auto">
										<span class="smltx tcon">* Marked Fields Mandatory</span>
									</div>
									<div class="form-group col-sm-auto">
										<div class="text-right text-left-xs">
											<button type="button" class="btn btn-primary btn-lg">Submit</button>
										</div>
									</div>
								</div>

							</form>
						</div>
						<div class="tab-pane fade" id="suggestions-on-ui" role="tabpanel" aria-labelledby="suggestions-on-ui-list">
							<h4 class="fweight-400 border-bottom pb-2 mb-3">Suggestions on User Interface?</h4>
							<p class="text-muted">Your feedback will help us improve</p>
							<form>
								<div class="form-group">
									<input type="text" class="form-control" id="" placeholder="URL*" value="" required>    
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Reference URL" value="">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Enter Email Id or Phone Number" value="">
								</div>
								<div class="form-group">
									<textarea class="form-control" rows="4" placeholder="Message*"></textarea>
								</div>
								<div class="custom-file mb-3">
									<input type="file" class="custom-file-input" id="customFile">
									<label class="custom-file-label" for="customFile">Add File</label>
								</div>
								<div class="form-row justify-content-between align-items-center">
									<div class="form-group col-sm-auto">
										<span class="smltx tcon">* Marked Fields Mandatory</span>
									</div>
									<div class="form-group col-sm-3">
										<img src="/assets/img/newCaptchaAnchor.gif" alt="" class="img-fluid">
									</div>
									<div class="form-group col-sm-auto">
										<div class="text-right text-left-xs">
											<button type="button" class="btn btn-primary btn-lg">Submit</button>
										</div>
									</div>
								</div>
							</form>
						</div>
						<div class="tab-pane fade" id="other-issue" role="tabpanel" aria-labelledby="other-issue-list">
							<h4 class="fweight-400 border-bottom pb-2 mb-3">Any other issue? </h4>
							<p class="text-muted">Your feedback will help us improve</p>
							<form>
								<div class="form-group">
									<input type="text" class="form-control" id="" placeholder="Select City Name*" value="">    
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="fbnamid" placeholder="Name*" value="">
								</div>
								<div class="form-group dt">
									<div class="input-group">
										<div class="input-group-prepend"><span class="input-group-text" id="">+91</span></div>
										<input type="number" onkeypress="return isNumber(event,this.id)" class="form-control form-control-bdr-nn" maxlength="10" id="fbmobile" placeholder="Mobile Number*" value="">
									</div>
								</div>
								<div class="form-group">
									<input type="email" class="form-control" id="fbemail" placeholder="Email ID" value="">
								</div>
								<div class="form-group">
									<textarea class="form-control" id="fbcomment" rows="4" placeholder="Message*"></textarea>
								</div>
								<div class="form-row justify-content-between align-items-center">
									<div class="form-group col-sm-auto">
										<span class="smltx tcon">* Marked Fields Mandatory</span>
									</div>
									<div class="form-group col-sm-auto">
										<div class="text-right text-left-xs">
											<button type="button" class="btn btn-primary btn-lg">Submit</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div><!--end of How are we doing?-->
				</div>
			</div>
		</div>
	</div>
</section>
<!--
Footer
-->
<a href="#" class="cd-top js-cd-top text-uppercase"><i class="fas fa-chevron-up"></i></a>
<div w3-include-html="footer.html"></div>
<!-- Optional JavaScript --> 
<!-- jQuery first, then Popper.js, then Bootstrap JS --> 
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.3.3/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script>
	UIkit.parallax(element, options);
	UIkit.heightMatch(element, options);
</script>
<!--
Nav Scroller
-->
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
$(document).ready(function(){
  $('.fleet-slider').slick({
	  slidesToShow: 4,
	  infinite: false,
  });
	
	$('.offers-slider').slick({
		slidesToShow: 3,
		infinite: false,
	});
	
	$('.vehicle-type').slick({
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  arrows: false,
	  fade: true,
	  asNavFor: '.vehicle-type-nav'
	});
	$('.vehicle-type-nav').slick({
		slidesToShow: 7,
		slidesToScroll: 1,
		arrows: true,
		asNavFor: '.vehicle-type',
		centerMode: true,
		focusOnSelect: true,
		responsive: [
			{
			  breakpoint: 1024,
			  settings: {
				slidesToShow: 3,
				slidesToScroll: 3,
				infinite: true,
				dots: true
			  }
			},
			{
			  breakpoint: 600,
			  settings: {
				slidesToShow: 2,
				slidesToScroll: 2
			  }
			},
			{
			  breakpoint: 480,
			  settings: {
				slidesToShow: 3,
				slidesToScroll: 1
			  }
			}
			// You can unslick at a given breakpoint now by adding:
			// settings: "unslick"
			// instead of a settings object
		  ]
	});
});
</script>
<script src="assets/js/animated-headlines.js"></script> 
<script src="assets/js/back-to-top.js"></script>
<script>document.getElementsByTagName("html")[0].className += " js";</script>
<script src="assets/js/jquery.matchHeight-min.js"></script>
<script>

	$(function() {

		$('.match-height').matchHeight({

			byRow: true,

			property: 'height',

			target: null,

		});

	});

</script>
<script src="assets/js/wow.min.js"></script>
<script>
	new WOW().init();
</script>
<script src="assets/js/mixitup.min.js"></script> 
<script>
var mixer = mixitup('[data-ref~="mixitup-container"]', {
	selectors: {
		target: '[data-ref~="mixitup-target"]',
		control: '[data-mixitup-control]'
	}
});
</script> 
<script src="assets/js/owl.carousel.min.js"></script> 
<script>
	$(document).ready(function(){
    $('.domains-carousel').owlCarousel({
		margin:10,
		nav:true,
		dots:false,
		loop:true,
		autoplayHoverPause:true,
		autoplayTimeout: 5000,
		responsive:{
				0:{
						items:1
				},
				600:{
						items:3
				},
				1000:{
						items:5
				}
        }
    })
		// Testimonials Carousel
		$('.testimonials-carousel').owlCarousel({
				margin:10,
				dots:true,
				autoplay:true,
				loop:true,
				autoplayHoverPause:true,
				autoplayTimeout: 2600,
				responsive:{
						0:{
								items:1
						},
						600:{
								items:1
						},
						1000:{
								items:1
						}
        }
    })
	});
</script> 
<script>
$(window).scroll(function() {
	if ($(".navbar").offset().top > 40) {
		$(".navbar").addClass("shadow");
		$(".navbar").addClass("navbarFixed");
	} else {
		$(".navbar").removeClass("shadow");
		$(".navbar").removeClass("navbarFixed");
	}   
});
</script>
<script>
	$(document).ready(function(){
		$('.domain-link').hover(function(){
				$(this).addClass('animated bounceIn');
		});
	});
</script>
<script src="assets/js/jquery.malihu.PageScroll2id.min.js"></script> 
<script>
(function($){
	$(window).on("load",function(){
		$("a[rel='PageScroll2id']").mPageScroll2id();
	});
})(jQuery);
</script>
<script src="https://www.w3schools.com/lib/w3.js"></script>
<script>
w3.includeHTML();
</script>
</body>
</html>