<main class="container">
	<div class="col-lg-6 py-5 mx-auto">
		<form class="card p-3 shadow" method="post" action="<?=base_url()?>Welcome/registration"> 
			<div class="heading text-center pb-5">
				<h2 class="mb-4"><span>Register With Referral</span></h2>
				<div class="divider"><span></span></div>
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
                                <input type="password" class="form-control pl-5" name="password" value="<?=set_value('password')?>" placeholder="Create Your Password" required>
                                <i class="input-icon fa fa-key"></i>
                            </div>
                            <?php 
                            	if (isset($referral)) {
                            		$value = $referral->my_referral	;
                            	}
                            	else
                            	{
                            		$value = 'HMF0A190101';
                            	}
                             ?>
                            <div class="form-group">
                                <input readonly type="text" class="form-control pl-5" name="referral" value="<?=$value?>" placeholder="Refferal Code">
                                <i class="input-icon fa fa-user-plus"></i>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary text-center iq-mt-30"><i class="fa fa-lock mr-2"></i>SignUp</button>
                            </div>
                        </form>
	</div>	
</main>