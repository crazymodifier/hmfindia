<main>
<section class="py-5 bg-primary">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 text-light text-lg-left text-sm-center">
				<div class="slider_1 border h-100">
					<img src="<?=base_url('assets/images/slider2.jpg')?>" alt="Slider" class="object-fit" height="330">
					<img src="<?=base_url('assets/images/slider2.jpg')?>" alt="Slider" class="object-fit" height="330">
					<img src="<?=base_url('assets/images/slider2.jpg')?>" alt="Slider" class="object-fit" height="330">
					<img src="<?=base_url('assets/images/slider2.jpg')?>" alt="Slider" class="object-fit" height="330">
				</div>
			</div>
			<div class="col-lg-4">
				<div>
					<div class="card p-2">
						<div class="card-body p-4">
							<form method="post" action="Welcome/donate">
								<div class="form-group text-center">
									<h6 class="m-0">We Need</h6>
									<h4>Your Contribution</h4> 
								</div>
	                            <div class="form-group">
	                                <input type="text" name="name" class="form-control pl-5" placeholder="Full Name*" value="<?=set_value('name')?>" required>
	                                <i class="input-icon fa fa-user"></i>
	                            </div>
	                            <div class="form-group">
	                                <input type="number" class="form-control pl-5" minlength="10" maxlength="10" name="mobile" value="<?=set_value('mobile')?>" placeholder="Mobile Number* (10-Digits)" required>
	                                <i class="input-icon fa fa-phone"></i>
	                            </div>
	                            <div class="form-group">
	                                <input type="number" class="form-control pl-5" name="ammount" value="<?=set_value('ammount')?>" placeholder="Enter Ammount" required>
	                                <i class="input-icon fa fa-inr"></i>
	                            </div>
	                            <div class="text-center">
	                                <button class="btn btn-block btn-primary text-center iq-mt-30"><i class="fa fa-handshake-o mr-2"></i>Donate Now</button>
	                            </div>
	                        </form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
	<!-- <section class="pt-4 my-5">
		<div class="container text-center">
			<div class="heading pb-3">
				<h2 class="mb-4"><span>Our Rewards</span></h2>
				<div class="divider"><span></span></div>
			</div>

			<div class="slider-5 ">
				<div class="p-2">
					<img class="object-fit w-100 border" height="250" src="<?=base_url('assets/images/bags.jpeg')?>" alt="Bags Awards">
				</div>
				<div class="p-2">
					<img class="object-fit w-100 border" height="250" src="<?=base_url('assets/images/smartwatch.jpg')?>" alt="Bags Awards">
				</div>
				<div class="p-2">
					<img class="object-fit w-100 border" height="250" src="<?=base_url('assets/images/tablets.webp')?>" alt="Bags Awards">
				</div>
				<div class="p-2">
					<img class="object-fit w-100 border" height="250" src="<?=base_url('assets/images/woofer.jpeg')?>" alt="Bags Awards">
				</div>
				<div class="p-2">
					<img class="object-fit w-100 border" height="250" src="<?=base_url('assets/images/laptops.jpg')?>" alt="Bags Awards">
				</div>
				<div class="p-2">
					<img class="object-fit w-100 border" height="250" src="<?=base_url('assets/images/solarlamp.png')?>" alt="Bags Awards">
				</div>
				<div class="p-2">
					<img class="object-fit w-100 border" height="250" src="<?=base_url('assets/images/bike.png')?>" alt="Bags Awards">
				</div>
			</div>
			
		</div>
	</section> -->
	<section class="pt-4 my-5">
		<div class="container text-center">
			<div class="heading pb-4">
				<h2 class="mb-4"><span>Our Works</span></h2>
				<div class="divider"><span></span></div>
			</div>
				<h3 class="font-weight-lighter">HMF is a non govt organization (NGO) which has been working in several dynamics like Eduaction, Healthcare & Employment etc to support society in best posible way. </h3>

			<div class="row py-5">
				<div class="col-lg-4">
					<div class="p-3">
						<div class="display-4 mb-4 work-icon">
							<i class="fa fa-heartbeat"></i>
						</div>
						<h3>Healthcare</h3>
						<p>We have launched some healthcare activities like causes and prevention of the communicable diseases, population control and also promoting health awareness programs.</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="p-3">
						<div class="display-4 mb-4 work-icon">
							<i class="fa fa-graduation-cap"></i>
						</div>
						<h3>Education</h3>
						<p>We provides free coaching classes for primary school children. And also provides them study kits like books, notes, pen,  pencil etc.</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="p-3">
						<div class="display-4 mb-4 work-icon">
							<i class="fa fa-users"></i>
						</div>
						<h3>Employment</h3>
						<p>The basic objective of this foundation is to create employment opportunities for educated unemployed young men and women who are self-reliant.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="bg-primary py-5">
		<div class="container">
			<div class="heading pb-4 text-center">
				<h2 class="mb-4 text-light font-weight-bold"><span>फाउंडेशन</span></h2>
				<div class="divider border-light"><span></span></div>
			</div>
			<div class="row">
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 text-center">
					<img src="<?=base_url('assets/images/hmfindia-logo.jpg')?>" class="w-100" alt="">
				</div>
				<div class="col-xl-8 col-lg-8 col-md-8 col-sm-6 text-light">
					<p class="text-justify">भारत सरकार द्वारा मान्यता प्राप्त एनजीओ, हिलियोस मल्टीजोन फाउंडेशन जहां समाज सेवा के साथ-साथ स्वरोजगार का भी अवसर प्राप्त होता है। हिलियोस मल्टीजोन फाउंडेशन आर्थिक रूप से पिछड़े हुए लोगों के सामाजिक और आर्थिक स्तर को सुधार कर समाज में उनको एक नई पहचान देने के लिए दृढ़ प्रतिज्ञ है। एनजीओ का अर्थ होता है गैर सरकारी संगठन। एनजीओ एक निजी संगठन होता है जो लोगों के हितों के लिए कार्य करने, पर्यावरण की रक्षा करने, बुनियादी सामाजिक सेवाएं प्रदान करने अथवा सामुदायिक विकास के लिए गतिविधियां चलाता है। यह गैर सरकारी होते हैं अर्थात लाभ का वितरण अपने मालिकों और निदेशको के बीच नहीं करते बल्कि प्राप्त लाभ को संगठन में ही लगाते हैं। वे किसी सार्वजनिक उद्देश्य को लक्षित होते हैं। गैर सरकारी संगठनों की उपस्थिति नागरिकों की आवाज को अभिव्यक्त देकर भागी लोकतंत्र को सक्षम बनाती है। जागरूकता फैलाना, सामाजिक एकजुटता, सेवा वितरण, प्रशिक्षण, अध्ययन एवं अनुसंधान एवं सार्वजनिक उपेक्षा को स्वर देने में सहयोग करते हैं।<a href="<?=base_url('about-foundation')?>" class="pull-right d-none d-lg-inline d-md-inline text-dark font-weight-bold">आगे पढ़े <i class="fa fa-arrow-right"></i></a>
					<span class="text-center d-block">
						<a href="<?=base_url('about-foundation')?>" class="d-md-none text-dark font-weight-bold">आगे पढ़े <i class="fa fa-arrow-right"></i></a>
					</span>
					</p>
					<div class="row justify-content-around" >
						<div class="text-center">
							<a class="text-light" href="<?=base_url('about-foundation')?>#our-mission">
								<div class="h1 rounded-icon-70">
									<i class="fa text-light fa-bullseye"></i>
								</div>
							</a>
						</div>
						<div class=" text-center">
							<a class="text-light" href="<?=base_url('about-foundation/#our-vision')?>">
								<div class="h1 rounded-icon-70">
									<i class="fa text-light fa-graduation-cap"></i>
								</div>
							</a>
						</div>
						<div class="text-center">
							<a class="text-light" href="<?=base_url('about-foundation/#our-policy')?>">
								<div class="h1 rounded-icon-70">
									<i class="fa text-light fa-users"></i>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</section>

	<section>
		<div class="container py-5">
			<div class="heading pb-4 text-center">
				<h2 class="mb-4"><span>Recent Activity</span></h2>
				<div class="divider"><span></span></div>
			</div>
				
			<div class="row py-5" id="lightgallery">
				<div class="col-lg-3 col-6 col-mg-3 col-sm-4 pb-4" data-src="<?=base_url('assets/images/distributing-book-1.jpg')?>" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
					<a href="<?=base_url('assets/images/distributing-book-1.jpg')?>">
						<img src="<?=base_url('assets/images/distributing-book-1.jpg')?>" class="w-100 object-fit border p-1 rounded shadow border-primary" height="200">
					</a>
				</div>
				<div class="col-lg-3 col-6 col-mg-3 col-sm-4 pb-4" data-src="<?=base_url('assets/images/gallery_1.jpeg')?>" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
					<a href="<?=base_url('assets/images/gallery_1.jpeg')?>">
						<img src="<?=base_url('assets/images/gallery_1.jpeg')?>" class="w-100 object-fit border p-1 rounded shadow border-primary" height="200">
					</a>
				</div>
				<div class="col-lg-3 col-6 col-mg-3 col-sm-4 pb-4" data-src="<?=base_url('assets/images/gallery_2.jpeg')?>" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
					<a href="<?=base_url('assets/images/gallery_2.jpeg')?>">
						<img src="<?=base_url('assets/images/gallery_2.jpeg')?>" class="w-100 object-fit border p-1 rounded shadow border-primary" height="200">
					</a>
				</div>
				<div class="col-lg-3 col-6 col-mg-3 col-sm-4 pb-4" data-src="<?=base_url('assets/images/gallery_3.jpeg')?>" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
					<a href="<?=base_url('assets/images/gallery_3.jpeg')?>">
						<img src="<?=base_url('assets/images/gallery_3.jpeg')?>" class="w-100 object-fit border p-1 rounded shadow border-primary" height="200">
					</a>
				</div>
				<div class="col-lg-3 col-6 col-mg-3 col-sm-4 pb-4" data-src="<?=base_url('assets/images/gallery_4.jpeg')?>" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
					<a href="<?=base_url('assets/images/gallery_4.jpeg')?>">
						<img src="<?=base_url('assets/images/gallery_4.jpeg')?>" class="w-100 object-fit border p-1 rounded shadow border-primary" height="200">
					</a>
				</div>
				<div class="col-lg-3 col-6 col-mg-3 col-sm-4 pb-4" data-src="<?=base_url('assets/images/gallery_5.jpeg')?>" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
					<a href="<?=base_url('assets/images/gallery_5.jpeg')?>">
						<img src="<?=base_url('assets/images/gallery_5.jpeg')?>" class="w-100 object-fit border p-1 rounded shadow border-primary" height="200">
					</a>
				</div>
				<div class="col-lg-3 col-6 col-mg-3 col-sm-4 pb-4" data-src="<?=base_url('assets/images/gallery_6.jpeg')?>" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
					<a href="<?=base_url('assets/images/gallery_6.jpeg')?>">
						<img src="<?=base_url('assets/images/gallery_6.jpeg')?>" class="w-100 object-fit border p-1 rounded shadow border-primary" height="200">
					</a>
				</div>
				<div class="col-lg-3 col-6 col-mg-3 col-sm-4 pb-4" data-src="<?=base_url('assets/images/gallery_7.jpeg')?>" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
					<a href="<?=base_url('assets/images/gallery_7.jpeg')?>">
						<img src="<?=base_url('assets/images/gallery_7.jpeg')?>" class="w-100 object-fit border p-1 rounded shadow border-primary" height="200">
					</a>
				</div>
			</div>
		</div>
	</section>

</main>
