				<div class="row">
					<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 py-4">
						<div class="border-primary card shadow">
							<div class="card-body">
								<h5 class="heading text-primary">My Wallet</h5>
								<h5><i class="fa fa-inr mr-2"></i><?=$earnings['wallet']?></h5>
							</div>	
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 py-4">
						<div class="border-info card shadow">
							<div class="card-body">
								<h5 class="heading text-info">My Earning</h5>
								<h5><i class="fa fa-inr mr-2"></i><?=$earnings['user']?></h5>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 py-4">
						<div class="border-warning card shadow">
							<div class="card-body">
								<h5 class="heading text-warning">Ref. Earning</h5>
								<h5><i class="fa fa-inr mr-2"></i><?=$earnings['referral']?></h5>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 py-4">
						<div class="border-info card shadow">
							<div class="card-body">
								<h4 class="text-info">Total Earning</h4>
								<h5><i class="fa fa-inr mr-2"></i><?=$earnings['referral'] + $earnings['user']?></h5>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 py-4">
						<div class="border-success card shadow">
							<div class="card-body">
								<h5 class="heading text-success">Withdraw</h5>
								<h5><i class="fa fa-inr mr-2"></i><?=$earnings['withdraw']?></h5>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 py-4">
						<div class="border-primary card shadow">
							<div class="card-body">
								<h5 class="heading text-danger">More Earnings</h5>
								<h5><i class="fa fa-inr mr-2"></i><?=0?></h5>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 py-4">
						<div class="border-info card shadow">
							<div class="card-body">
								<h5 class="heading text-info">Members</h5>
								<h5><i class="fa fa-users mr-2"></i><?=sizeof($members)?></h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>