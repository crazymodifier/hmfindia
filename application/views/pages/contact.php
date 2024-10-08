
<main>
	<section class="pt-4 my-5">
		<div class="container">
			<div class="heading pb-4 text-center">
				<h2><span>Contact With Us</span></h2>
			</div>
			<div class="row">
				<div class="col-xl-6 col-lg-6 col-md-12  text-center">
					<div>	
						<h2>Address</h2>
						<p>Lakhrawan, Bajardiha, Varanasi, Uttar Pradesh (221109), INDIA</p>
					</div>
					<div>	
						<h2>Contact Number</h2>
						<p>+91-7236098508</p>
					</div>
					<div>	
						<h2>Email Address</h2>
						<p>hmfindia1@gmail.com</p>
					</div>
					<!-- <div>	
						<span><i class="fa fa-facebook"></i></span>
						<span><i class="fa fa-facebook"></i></span>
						<span><i class="fa fa-facebook"></i></span>
						<span><i class="fa fa-facebook"></i></span>
					</div> -->
				</div>
				<div class="col-xl-6 col-lg-6 col-md-12 ">
					<div class="shadow bg-primary text-light mx-lg-4 py-4 border">
						<form class="px-5" action="<?=base_url('Welcome/query')?>" method="POST">
							<div class="form-group">
								<label for="name">Name :</label>
								<input type="text" name="name" class="form-control" required placeholder="Enter Your Name*">
							</div>
							<div class="form-group">
								<label for="mobile">Mobile :</label>
								<input type="number" name="mobile" required placeholder="Enter your Contact Number*" class="form-control">
							</div>
							<div class="form-group">
								<label for="email">Email :</label>
								<input type="email" name="email" class="form-control" required placeholder="Enter Your Email">
							</div>
							<div class="form-group">
								<label for="message">Message :</label>
								<textarea name="message" required class="form-control"></textarea>
							</div>
							<div class="form-group text-center">
								<button class="btn btn-outline-light">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>