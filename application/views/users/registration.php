<style>
	header
	{
		display: none;
	}
</style>
<main>
	<section class="py-5">
		<div class="container">
			<form action="<?=base_url('Users/updates')?>" method='POST'>
				<div class="row">				
					<div class="col-lg-6">
						<fieldset class="border p-2">
							<legend class="w-auto">Persolnal Details</legend>
							<div class="form-group">
								<label for="referral">Referral Code :</label>
								<input type="text" name="referral" placeholder="" class="form-control" value="<?=$user['referral']?>" readonly>
							</div>
							<div class="form-group">
								<label for="name">Name :</label>
								<input type="text" name="name" placeholder="" class="form-control" value="<?=$user['name']?>" readonly>
							</div>
							<div class="form-group">
								<label for="mobile">Mobile :</label>
								<input type="number" name="mobile" placeholder="" class="form-control" value="<?=$user['mobile']?>" readonly>
							</div>
							<div class="form-group">
								<label for="email">Email :</label>
								<input type="email" name="email" placeholder="" class="form-control" value="<?=$user['email']?>" readonly>
							</div>
						</fieldset>
					</div>
					<div class="col-lg-6">
						<fieldset class="border p-2">
							<legend class="w-auto">Address Details</legend>
							<div class="form-group">
								<label for="address">Address :</label>
								<input type="text" name="address" placeholder="" class="form-control" value="<?=$user['address']?>">
							</div>
							<div class="form-group">
								<label for="city">City :</label>
								<input type="text" name="city" placeholder="" class="form-control" value="<?=$user['city']?>" >
							</div>
							<div class="form-group">
								<label for="state">State :</label>
								<input type="text" name="state" placeholder="" class="form-control" value="<?=$user['state']?>" >
							</div>
							<div class="form-group">
								<label for="country">Country :</label>
								<input type="text" name="country" placeholder="" class="form-control" value="<?=$user['country']?>">
							</div>
						</fieldset>
					</div>
				</div>
				<div class="text-center py-3">
					<button class="btn btn-primary">Submit Now</button>
				</div>
			</form>
		</div>
	</section>
</main>