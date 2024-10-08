<style>
	header
	{
		display: none;
	}
</style>
<main>
	<section class="text-light bg-primary py-2 border-bottom">
		<div class="container-fluid d-flex justify-content-between">
			<span>
				HMF INDIA
			</span>
			<span>
				<i class="fa fa-user mr-2"></i><?=$userdata['name']?>
			</span>
		</div>
	</section>
	<section class="container-fluid">
		<div class="row">
			<div class="col-12 col-lg-2 p-0 min-h-100vh bg-primary">
				<nav class="navbar navbar-expand-md navbar-dark">

			  <!-- Toggler/collapsibe Button -->
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <!-- Navbar links -->
			  <div class="collapse navbar-collapse" id="collapsibleNavbar">
			    <ul class="navbar-nav d-block d-sm-flex d-lg-block">
				     <li class="nav-item">
							<a href="<?=base_url()?>user/dashboard" class="nav-link text-light"><i class="fa fa-tachometer mr-2"></i>Dashboard</a>
						</li>
						<li class="nav-item">
							<a href="<?=base_url()?>user/profile" class="nav-link text-light"><i class="fa fa-user mr-2"></i>Profile</a>
						</li>
						<li class="nav-item">
							<a href="<?=base_url()?>user/members" class="nav-link text-light"><i class="fa fa-users mr-2"></i>Members</a>
						</li>
						<li class="nav-item">
							<a href="<?=base_url()?>home" class="nav-link text-light"><i class="fa fa-arrow-left mr-2"></i>Back Home</a>
						</li>
			    </ul>
			  </div>
			</nav>
			</div>
			<!-- <div class="navbar-expand-md p-0 col-xl-2 col-lg-2 col-md-2">
				 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				    <span class="navbar-toggler-icon"></span>
				  </button>
				<div class="min-h-100vh h-100 bg-primary text-light collapse navbar-collapse" id="collapsibleNavbar">
					<div class="navbar-nav px-3">
						<li class="nav-item">
							<a href="<?=base_url()?>user/dashboard" class="nav-link text-light"><i class="fa fa-tachometer mr-2"></i>Dashboard</a>
						</li>
						<li class="nav-item">
							<a href="<?=base_url()?>user/profile" class="nav-link text-light"><i class="fa fa-user mr-2"></i>Profile</a>
						</li>
						<li class="nav-item">
							<a href="<?=base_url()?>user/members" class="nav-link text-light"><i class="fa fa-users mr-2"></i>Members</a>
						</li>
						<li class="nav-item">
							<a href="<?=base_url()?>home" class="nav-link text-light"><i class="fa fa-arrow-left mr-2"></i>Back Home</a>
						</li>
					</div>
				</div>
			</div> -->
			<div class="col-xl-10 col-lg-10 col-md-10">
				<div class="heading">
					<h2 class="pb-2 my-2 border-bottom"><?=ucwords($title)?>
						<span class="pull-right"><a href="<?=base_url()?>Login/logout" class="btn btn-primary">Logout<i class="fa fa-arrow-right ml-2"></i></a></span>
					</h2>
				</div>

				